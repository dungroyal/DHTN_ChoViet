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

    
    include"view/header.php";

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
						header('location: index.php?act=loginuser');
					}else{
					$img = $product_detail_by_id['image'];
					$coin = $product_detail_by_id['price'];
					$name = $product_detail_by_id['name'];
					$info = $product_detail_by_id['descripsion'];
					$color = $_POST['color'];
					$soluong = $_POST['soluong'];
					$idpro = $_GET['idProduct'];
					$iduser = $product_detail_by_id['id_user'];
					$idcata = $product_detail_by_id['idCatalog'];
					$idcustom = $_SESSION['iduserguest'];
					add_cart($name,$img,$coin,$info,$color,$soluong,$iduser,$idcata,$idpro,$idcustom);
					$erro = 'Bạn đã thêm '.$name.' số lượng '.$soluong.' cái';
				}
				}
                include"view/product_detail.php";
                break;

			case 'contact':
				if(isset($_POST['lienhe']) && $_POST['lienhe'] ){
                    $title = $_POST['topic'];
	$content = '<!DOCTYPE html>
	<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<style>
			* {
				box-sizing: border-box;
			}
			
			body {
				margin: 0px auto;
				width: 70%;
			}
			
			header {
				background-color: #f1f1f1;
				padding: 20px;
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<header>
			<img src="http://choviet.xyz/images/4.png" alt="Logo" style="width:300px;text-align: center; margin: 0px auto;">
			<h1>Xin chào quý khách</h4>
				<h3>Cảm ơn bạn đã liên hệ với chúng tôi, shop sẽ liên hệ với bạn trong thời gian ngắn nhất.</h3>
		</header>
		<h1></h1>
	</body>
	
	</html>';
	$nTo = $_POST['name'];
	$mTo = $_POST['email'];
	$diachi = 'lenhathao3112@gmail.com';
	//test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
    if($mail==1)
	$erro = 'Bạn đã liên hệ thành công mời bạn vào email xem kết quả.';
	else $erro = 'Có lỗi!';
                }
                include"view/contact.php";
                break;

            case 'cart':
                if(isset($_POST['muahang']) && $_POST['muahang'] ){
					$title = $_POST['topic'];
	$content = '<!DOCTYPE html>
	<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<style>
			* {
				box-sizing: border-box;
			}
			
			body {
				margin: 0px auto;
				width: 70%;
			}
			
			header {
				background-color: #f1f1f1;
				padding: 20px;
				text-align: center;
			}
			
			.column {
				float: left;
				width: 50%;
				padding: 15px;
			}
			
			.bang {
				width: 100%;
				text-align: center;
			}
			
			.bang table {
				margin: 0 auto;
			}
			
			.row:after {
				content: "";
				display: table;
				clear: both;
			}
			/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
			
			@media screen and (max-width:600px) {
				.column {
					width: 100%;
				}
			}
			
			@media screen and (max-width:1000px) {
				.bang {
					width: 100%;
				}
			}
		</style>
	</head>
	
	<body>
		<header>
			<img src="http://choviet.xyz/images/4.png" alt="Logo" style="width:300px;text-align: center; margin: 0px auto;">
			<h1>Chào quý khách</h4>
				<p>Chợ Việt gửi đến khách hàng hóa đơn từ bên shop, Quý khách vui lòng kiểm tra hóa đơn điện tử bên dưới phần chi tiết đơn hàng.</p>
		</header>
		<div class=row>
			<div class="column">
				<h3>Thông tin thanh toán</h3>
				<p name="name">Lê Nhật Hào</p>
				<a href="" name="email">lenhathao3112@gmail.com</a>
				<p>0815777721</p>
			</div>
			<div class="column">
				<h3>Địa chỉ giao hàng</h3>
				<p name="name">Lê Nhật Hào</p>
				<p name="address">334 Chu Văn An, P12, Bình Thạnh</p>
				<p name="city">Hồ Chí Minh</p>
				<p name="state">Việt Nam</p>
			</div>
			<h3>Xuất hóa đơn điện tử từ Chợ Việt </h3>
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
				</tr>
				<tr style="height:70px;width: 80%;">
					<td>IP 11 Pro Max 256 GB</td>
					<td>30.000.000 VNĐ</td>
					<td>1</td>
					<td>0 VNĐ</td>
					<td>30.000.000 VNĐ</td>
				</tr>
				<tr style="height: 30px;">
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
	//test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
    if($mail==1)
	$erro = 'Bạn đã thanh toán thành công mời vào email xem đơn hàng của bạn.';
	else $erro = 'Có lỗi!';
				}
				
                include"view/cart.php";
                break;


            case 'about':
                include"view/about.php";
                break;

			case 'dangkithanhvien':
				if (isset($_POST['submitbtn_add_store']) && $_POST['submitbtn_add_store']) {
					
					$namestore=$_POST['namestore'];
					$username='asanzo';
					$password='asanzo';
					$phonenumber=$_POST['phonenumber'];
					$email=$_POST['email'];
					$idUser='9';

					store_insert($namestore,$username,$password,$phonenumber,$email,$idUser);
					header('location: view/thongbao.html'); 
					}
                include"view/dangkithanhvien.php";
                break;

			case 'dangkitaikhoan':
				if(isset($_POST['dangki']) && $_POST['dangki'] ){
                    $title = $_POST['topic1'];
	$content = '<!DOCTYPE html>
	<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<style>
			* {
				box-sizing: border-box;
			}
			
			body {
				margin: 0px auto;
				width: 70%;
			}
			
			header {
				background-color: #f1f1f1;
				padding: 20px;
				text-align: center;
			}
			
			.dangki1 {
				width: 100%;
				border: 1px solid grey;
			}
			
			.thongtindangki {
				width: 50%;
				margin: 30px;
			}
			
			@media screen and (max-width:1000px) {
				header {
					width: 100%;
				}
			}
			
			@media screen and (max-width:1000px) {
				.dangki1 {
					width: 100%;
				}
			}
		</style>
	</head>
	
	<body>
		<header>
			<img src="http://choviet.xyz/images/4.png" alt="Logo" style="width:300px;text-align: center; margin: 0px auto;">
			<h1>Xin chào quý khách</h4>
				<p>Bạn đã đăng kí tài khoản thành công vui lòng kiểm tra thông tin bên dưới mail.</p>
		</header>
		<div class="dangki1">
			<div class="thongtindangki">
				<h2>Thông tin tài khoản</h2>
				<p>Tên đăng nhập:</p>
				<p>Email:</p>
				<p>Mặt khẩu:</p>
			</div>
			<h3 style="text-align: center;">Cảm ơn bạn đã đăng kí tài khoản chúng tôi sẽ cố gắng hỗ trợ quý khách hết mức có thể.</h3>
		</div>
	</body>
	
	</html>';
	$nTo = $_POST['name'];
	$mTo = $_POST['email'];
	$diachi = 'lenhathao3112@gmail.com';
	//test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
    if($mail==1)
	$erro = 'Bạn đã đăng kí thành công mời bạn vào email xem thông tin tài khoản của bạn.';
	else $erro = 'Có lỗi!';
                }
                include"view/dang-ki-user.php";
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