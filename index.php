<?php
    ob_start();
    session_start();
    include "model/pdo.php";
    include "model/user.php";
    include "model/store.php";
    include "model/product.php";
    include "model/catalog.php";
    include "model/banner.php";
    include "model/tool.php";
    include ('model/class.smtp.php');
	include "model/class.phpmailer.php"; 
	include "model/functions.php"; 
	include "model/cart.php"; 

    $productlist=productlist();
	$cataloglist=cataloglist(); 

/**---------Setup Ngày-------------------------- */
		date_default_timezone_set("Asia/Ho_Chi_Minh");	
		$ngay=date("d");
		$thang=date("m");
		$nam=date("Y");
		$gio=date("H");
		$phut=date("i");
/**------------------------------------------- */

    
    include "view/header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'home':
                include"view/home.php";
                break;

            case 'product':
                if (isset($_GET['idStore']) && $_GET['idStore']) {
                    $idStore=$_GET['idStore'];
                    $store_by_id= store_by_id($idStore);

                    $catalog_by_store=catalog_by_store($idStore);
                    $productlist_by_store=productlist_by_store($idStore);
                }
                
                if (isset($_GET['idCatalog']) && $_GET['idCatalog']) {
                    $idCatalog=$_GET['idCatalog'];
                }


                $showproduct=productlist_by_id();         
                include"view/product.php";
                break;

			case 'product_detail':
                if (isset($_GET['idProduct']) && $_GET['idProduct']) {
                    $idProduct=$_GET['idProduct'];
                }
                
                $product_detail_by_id=product_detail_by_id($idProduct);
                
                $GET_idStore=GET_idStore($product_detail_by_id['idCatalog']);

				$info_store= store_by_id( $GET_idStore['idStore']);
				
				if(isset($_POST['addcart']) && $_POST['addcart']){	
					if(!isset($_SESSION['iduserguest'])){
						header('location: index.php');
						header('location: index.php?act=loginuser');
					}else{
					$img = $product_detail_by_id['image'];
					$coin = $product_detail_by_id['price'];
					$name = $product_detail_by_id['name'];
					$soluong = $_POST['soluong'];
					$idpro = $_GET['idProduct'];
					$iduser = $product_detail_by_id['id_user'];
					$idcata = $product_detail_by_id['idCatalog'];
					$idcustom = $_SESSION['iduserguest'];
					add_cart($name,$img,$coin,$soluong,$iduser,$idcata,$idpro,$idcustom);
					$erro = '<img src="uploads/checkbox-dribbble-looped-landing.gif">Bạn đã thêm '.$name.' số lượng '.$soluong.' cái';
				}
				}
                include "view/product_detail.php";
                break;

			case 'contact':
				if(isset($_POST['lienhe']) && $_POST['lienhe'] ){
					$title = $_POST['topic'];
					global $content_contact;
					$nTo = $_POST['name'];
					$mTo = $_POST['email'];
					$diachi = 'lenhathao3112@gmail.com';
					$mail = sendMail($title, $content_contact, $nTo, $mTo,$diachicc='');
					if($mail==1)
					$erro = 'Bạn đã liên hệ thành công mời bạn vào email xem kết quả.';
					else $erro = 'Có lỗi!';
				}
				
                include "view/contact.php";
                break;

            case 'cart':
                if(isset($_POST['muahang']) && $_POST['muahang'] ){
					$title = "Thông tin đơn hàng trên CHỢ VIỆT";
					$ten=$_POST['name'];
					$email=$_POST['email'];
					$diachi=$_POST['diachi'];
					$sdt=$_POST['sdt'];
					$content = '<!DOCTYPE html>
					<html lang="en">					
					<head>
						<meta charset="UTF-8">
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<meta http-equiv="X-UA-Compatible" content="ie=edge">
						<style>
							* {box-sizing: border-box;}							
							body {margin: 0px auto;width: 70%;}							
							header {background-color: #f1f1f1;padding: 20px;text-align: center;}							
							.column {float: left;width: 50%;padding: 15px;}							
							.bang {width: 100%;text-align: center;}							
							.bang table {margin: 0 auto;}							
							.row:after {content: "";display: table;clear: both;}							
							@media screen and (max-width:600px) {
								.column {width: 100%;}}							
							@media screen and (max-width:1000px) {
								.bang {width: 100%;}}
						</style>
					</head>					
					<body>
						<header>
							<img src="http://choviet.xyz/view/img/logo/logo.png" alt="Logo" style="width:300px;text-align: center; margin: 0px auto;">
							<h1>Chào quý khách</h4>
								<p>Chợ Việt gửi đến khách hàng thông tin đơn hàng mà quý khách hàng vừa đặt, Quý khách vui lòng kiểm tra hóa đơn điện tử bên dưới phần chi tiết đơn hàng.</p>
						</header>
						<div class=row>
							<div class="column">
								<h3>Thông tin thanh toán</h3>
								<p name="name">'.$ten.'</p>
								<a href="" name="email">'.$email.'</a>
								<p>'.$sdt.'</p>
							</div>
							<div class="column">
								<h3>Địa chỉ giao hàng</h3>
								<p name="name">Lê Nhật Hào</p>
								<p name="address">'.$diachi.'</p>
							</div>
							<h3>Chi tiết đơn hàng từ Chợ Việt </h3>
						</div>
						<div class="bang">
							<h2 style="color:blue;">Chi tiết đơn hàng</h2>							
							<table style="width:80%;display: table;
								border-collapse: separate;
								border-spacing: 0px;
								border-color: gray;
								background-color: burlywood;">
								<tr style="background-color: cornflowerblue;height: 50px;width: 800px;">
									<th>Sản phẩm</th>
									<th>Đơn giá</th>
									<th>Số lượng</th>
									<th>Giảm giá</th>
									<th>Tổng tạm tính</th>
								</tr>';

					?>					
					<?php 
					foreach (show_cart($_SESSION['iduserguest']) as $item) {
						$content.='
							<tr style="height: 30px;text-align: center;">
								<td><strong>'.$item['pro_name'].'</strong></td>
								<td><strong>'.number_format($item['coin']).'</strong></td>
								<td><strong>'.$item['so_luong'].'</strong></td>
								<td>Không có MGG</td>
								<td><strong>'.number_format(($item['coin'])*($item['so_luong'])).'</strong></td>
							</tr>
						';
					}
				?>					
					<?php
					$content.='<tr style="height: 30px;">
									<td></td>
									<td></td>
									<td></td>
									<td>Tổng giá trị sản phẩm chưa giảm</td>
									<td>30.000.000 VNĐ</td>
								</tr>
								<tr style="height: 30px;">
									<td></td>
									<td></td>
									<td></td>
									<td>Giảm giá phiếu quà tặng</td>
									<td>0 VNĐ</td>
								</tr>
								<tr style="height: 30px;">
									<td></td>
									<td></td>
									<td></td>
									<td>Chi phí vận chuyển</td>
									<td>15.000 VNĐ</td>
								</tr>
								<tr style="height: 30px;">
									<td></td>
									<td></td>
									<td></td>
									<td>Phí xử lý đơn hàng</td>
									<td>0 VNĐ</td>
								</tr>
								<tr style="height: 30px;">
									<td></td>
									<td></td>
									<td></td>
									<td>Tổng giá trị đơn hàng</td>
									<td>30.015.000 VNĐ</td>
								</tr>
							</table>
						</div>
						<h3>Thông tin chi tiết: </h2>
							<a href="?act=product_detail"></a>
							<h3>Mua tiếp: </h2>
								<a href="?act=product"></a>
					</body>					
					</html>';

					$nTo = $_POST['name'];
					$mTo = $_POST['email'];
					$diachi = 'lenhathao3112@gmail.com';
					$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
					if($mail==1){
					$erro = '<div class="thongbaoTC">
					<div class="thongbaoTC-content">
					  <p>Thành công</p>
					  <img src="uploads/0_LDuhViPQfVryctHL.gif" alt="">
					  <p><a href="index.php">Quay về trang chủ</a></p>
					</div>
				  </div>';
				}else{ $erro = 'Có lỗi!';}
				}
				
                include "view/cart.php";
                break;


            case 'about':
                include "view/about.php";
                break;

			case 'dangkithanhvien':
				if (isset($_POST['dangkicuahang']) && $_POST['dangkicuahang']) {					
					$name=$_POST['fullname'];
					$namestore=$_POST['namestore'];
					$phonenumber=$_POST['sdt'];
					$cmdn=$_POST['cmdn'];
					$email=$_POST['email'];
					$username=$_POST['username'];
					$password=$_POST['password'];

					$Get_city=Get_city($_POST['thanhpho']);
					$Get_district=Get_district($_POST['quanhuyen']);
					$Get_ward=Get_ward($_POST['phuongxa']);

					$city=$Get_city['name'];
					$district=$Get_district['name'];
					$ward=$Get_ward['name'];
					$diachi=$_POST['diachi'];
					$date=$_POST['date'];
					$idUser=$_POST['idUser'];

					store_insert($namestore,$username,$password,$phonenumber,$cmdn,$email,$city,$district,$ward,$diachi,$date,$idUser);
					
					$_SESSION['thongbao'] = '<div class="thongbaoTC_cv">
												<div class="thongbaoTC-content_cv">
												<h1>Đăng Kí Thành công</h1>												
												<img src="uploads/checkbox-dribbble-looped-landing.gif" alt="">
												<h2><span>Thông báo: </span>Bạn đã đăng kí trở thành nhà bán hàng cùng với <strong>Chợ Viêt</strong> thành công! Hãy đăng nhập ngay <a href="login.php">Kênh dành cho người bán hàng</a>, hoàn tất những thông tin còn thiếu, và đợi Chợ Việt duyệt cửa hàng của bạn nhé!</h2>
												<form action="?act=dangkitaikhoan" method="post">
													<input type="submit" name="delete_SESS" value="Đăng Nhập Ngay!" class="delete_SESS_btn_cv">
												</form></p>
												</div>
											</div>';
					
					header('location: ?act=dangkithanhvien'); 
					}
					if(isset($_POST['delete_SESS']) && $_POST['delete_SESS'] ){
						unset($_SESSION['thongbao']);
						header('location: login.php');
					}
                include "view/dangkithanhvien.php";
                break;

			case 'dangkitaikhoan':
				if(isset($_POST['dk_user']) && $_POST['dk_user'] ){
                	$fullname = $_POST['hovsten'];
                	$sdt = $_POST['sdt'];
                	$email = $_POST['mail'];
					$username = $_POST['username'];
					$password = $_POST['pwd1'];					
					
					new_user_insert($fullname,$sdt,$username,$password,$email);

					$_SESSION['thongbao'] = '<div class="thongbaoTC">
												<div class="thongbaoTC-content">
												<p>Đăng kí thành công</p>
												<img src="uploads/checkbox-dribbble-looped-landing.gif" alt="">
												<p>
												<form action="?act=dangkitaikhoan" method="post">
													<input type="submit" name="delete_SESS" value="Đăng Nhập Ngay!" class="delete_SESS_btn">
												</form></p>
												</div>
											</div>';

					header('location: index.php?act=dangkitaikhoan');
				}

				if(isset($_POST['delete_SESS']) && $_POST['delete_SESS'] ){
					unset($_SESSION['thongbao']);
					header('location: index.php?act=loginuser');
				}
				
                include "view/dang-ki-user.php";
                break;
               
			case 'login':

				header('location: index.php');
                include"view/login.php";
                break;

			case 'loginuser':
                include"view/loginuser.php";
                break;

            case 'logout_user':
				unset($_SESSION['nameuser']);
				unset($_SESSION['iduserstore']);
				unset($_SESSION['iduserguest']);
				header('location: index.php');
				break;

            default:
                include"view/home.php";
                break;

            
        }
    }else{
            include"view/home.php";
    }
    include"view/footer.php";
?>