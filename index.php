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
                include "view/product.php";
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
					$coin = $product_detail_by_id['specialprice'];
					$name = $product_detail_by_id['name'];
					$soluong = $_POST['soluong'];
					$idpro = $_GET['idProduct'];
					$iduser = $product_detail_by_id['id_user'];
					$idcata = $product_detail_by_id['idCatalog'];
					$idcustom = $_SESSION['iduserguest'];
					$thanhtien=($coin)*($soluong);

					
					add_cart($name,$img,$coin,$thanhtien,$soluong,$iduser,$idcata,$idpro,$idcustom);
					$erro = '<img src="uploads/checkbox-dribbble-looped-landing.gif">Bạn đã thêm '.$name.' số lượng '.$soluong.' cái';
					
					header('location: index.php?act=cart');
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
					<html lang="vi">
					
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
					</head>
					
					<body>
						<div style="font-family:Verdana;margin-top:0;margin-bottom:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;width:100%!important;background-color:#c9c9c9!important" bgcolor="#fbfafb">
							<table align="center" cellpadding="0" border="0" cellspacing="0" bgcolor="#c9c9c9" style="background-color:#c9c9c9!important">
								<tbody>
									<tr>
										<td style="padding-top:30px">
											<div style="display:none;max-height:0px;overflow:hidden">
											</div>
											<table width="660" border="0" cellpadding="0" cellspacing="0" style="width:660px;background-color:#ffffff" bgcolor="#ffffff">
												<tbody>
													<tr>
														<td bgcolor="#ffffff" style="background-color:#ffffff;padding-bottom:15px">
															<table width="660" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="background-color:#ffffff;width:660px">
					<tbody>
						<tr>
							<td background="http://choviet.xyz/uploads/santa-claus.png" bgcolor="#ffffff" width="660" valign="top" style="background:#ffffff url(http://choviet.xyz/uploads/santa-claus-png.png) no-repeat top center;background-size:660px auto;background-repeat:no-repeat;background-position:top center">
								<table align="left" width="400" border="0" cellpadding="0" cellspacing="0" style="width:400px;padding-bottom:38px">
									<tbody>
										<tr>
											<td style="padding-bottom:5px;padding-top:37px;padding-left:60px">
												<img src="http://choviet.xyz/view/img/logo/logo.png" alt="Chợ Việt logo" style="width: 65%;">
											</td>
										</tr>
										<tr>
											<td valign="top" style="padding-left:60px;padding-bottom:0px">
												<img src="http://choviet.xyz/uploads/ChoViet_DELEVER.gif" alt="Success payment" style="width: 50%;margin: 0px;padding: 0px;"><br><br>
												<p style="width=150%;color:#1e1f4e;font-family:Verdana;font-size:28px;font-weight:bold;line-height:normal;padding-top:0;padding-left:0;padding-bottom:0;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:10px">Bạn đã đặt hàng thành công!</p>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td align="left" style="padding-bottom:20px;padding-left:60px;padding-right:60px">
								<div>
									<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;padding-top:0;padding-left:0;padding-bottom:10px;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;color:#1e1f4e">Chào <strong>'.$ten.'!</strong></p>
									<p style="width:150%;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;padding-top:0;padding-left:0;padding-bottom:0;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;color:#1e1f4e">Đơn hàng của bạn đã được gửi đến nhà bán hàng. </p>
								</div>
							</td>
						</tr>
						<tr>
							<td align="left" style="padding-bottom:10px;padding-left:60px;padding-right:60px;padding-top:0px">
								<div>
									<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;padding-top:0;padding-left:0;padding-bottom:10px;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;color:#1e1f4e">Thông tin chi tiết như sau:
								</div>
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-bottom:50px;padding-left:60px;padding-right:60px">
								<table align="center" border="0" cellpadding="10" cellspacing="0" style="width:790px; border:solid 2px #f4f8ff;width: 100%;font-size: 12px;">
									<thead>
										<tr>
											<th scope=" row " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); height: 40px; width: 80px; ">STT</th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); "><strong>Sản phẩm</strong></th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); ">Đơn gi&aacute;<br /> (VNĐ)
											</th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); ">Số lượng</th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); ">Th&agrave;nh tiền<br /> (VNĐ)
											</th>
										</tr>
									</thead>
									<tbody>';

					?>					
					<?php 
					foreach (show_cart($_SESSION['iduserguest']) as $item) {
						$content.='
							<tr>
								<th scope="row " style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); width:100px ">1</th>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); width:580px ">'.$item['pro_name'].'</td>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); text-align:center; width:100px "><strong>'.number_format($item['coin']).'</strong></td>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); text-align:center; width:100px ">'.$item['so_luong'].'</td>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; "><strong>'.number_format(($item['coin'])*($item['so_luong'])).'</strong></td>
							</tr>
						';
					}
				?>					
					<?php
					$content.='
							<tr>
								<th colspan="4 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; ">Th&agrave;nh tiền</th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; "><strong>'.number_format(($item['coin'])*($item['so_luong'])).'</strong></td>
							</tr>
							<tr>
								<th colspan="4 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; ">Thuế</th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; ">- 0</td>
							</tr>
							<tr>
								<th colspan="4 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; ">Giảm gi&aacute;</th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; ">- 0</td>
							</tr>
							<tr>
								<th colspan="4 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; "><strong>Ph&iacute; vận chuyển</strong></th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; ">15.000&nbsp;</td>
							</tr>
							<tr>
								<th colspan="4 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; "><strong>Tổng cộng</strong></th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; "><strong>'.number_format(($item['coin'])*($item['so_luong'])).'</strong></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td align="left" style="padding-bottom:10px;padding-left:60px;padding-right:60px;padding-top:0px">
					<table align="center" border="0" cellpadding="1" cellspacing="0" style="width:790px;width: 100%;font-size: 14px;">
						<tbody>
							<tr>
								<td colspan="2" style="border-color: rgb(221, 221, 221); height: 40px; width: 600px;">
									<h3><strong>Thông tin thanh toán</strong></h3>
								</td>
								<td colspan="2" style=" border-color: rgb(221, 221, 221);">
									<h3><strong>Địa chỉ giao hàng</strong></h3>
								</td>
							</tr>
							<tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Họ v&agrave; t&ecirc;n:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left; white-space: nowrap;">'.$ten.'</th>
								<td style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Người nhận:</td>
								<td style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 415px; text-align: left;">'.$ten.'</td>
							</tr>
							<tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Số điện thoại:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left;">'.$sdt.'</th>
								<td style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Số điện thoại</td>
								<td style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 415px; text-align: left;">'.$sdt.'</td>
							</tr>
							<tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Địa chỉ:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left;">'.$diachi.'</th>
								<td style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Địa chỉ</td>
								<td style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 415px; text-align: left;">'.$diachi.'</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td align="left " style="padding-bottom:30px;padding-left:60px;padding-right:60px;padding-top:10px ">
			<div>

			<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;padding-top:0;padding-left:0;padding-bottom:20px!important;padding-right:0;color:#817c8f;max-width:540px ">Bạn có bất kỳ câu hỏi nào? Đội ngũ hỗ trợ thân thiện của chúng tôi sẵn sàng trả lời tất cả câu hỏi bạn có. Chỉ cần nhấn nút trả lời email này hoặc liên hệ chúng tôi qua live chat trong trang quản trị.</p>
			<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;padding-top:0;padding-left:0;padding-bottom:5px!important;padding-right:0;color:#817c8f;max-width:540px ">Cảm ơn '.$ten.'!</p>

			</div>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td align="center " style="text-align:center;padding-top:50px;padding-bottom:50px;font-family:Verdana;color:#666666;font-size:12px;line-height:18px ">
			© 2019 - 2020 CHOVIET Inc.
			</td>
			</tr>
			</tbody>
			</table>
			</div>
			</body>

			</html>
					';

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

				if (isset($_GET['del']) && ($_GET['del']==1) ) {
					$id=$_GET['id'];
					pro_cart_delete($id);
					header('location: index.php?act=cart');
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
            include "view/home.php";
    }
    include "view/footer.php";
?>