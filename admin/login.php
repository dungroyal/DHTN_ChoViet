<?php
	session_start();
	include "../model/user.php";
	include "../model/pdo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="../view/style-login/image/png" href="../view/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../view/style-login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../view/style-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../view/style-login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../view/style-login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../view/style-login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../view/style-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../view/style-login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../view/img/favicon.png" alt="IMG">
				</div>



				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title">
						Quản trị Chợ Việt
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="user" placeholder="Tên đăng nhập" autocomplete="off" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="login" value="ĐĂNG NHẬP">
					</div>

					<?php
						if (isset($_POST['login']) && $_POST['login']) {
							$user = $_POST['user'];
							$pass = $_POST['password'];
							$kt_user = check_user($user, $pass);

							$name_user=$kt_user['name'];
							$id_user=$kt_user['id'];
							$lever=$kt_user['lever'];



							if (($id_user > 0) && ($lever==1)) {
								$_SESSION['nameuser'] = $name_user;
								$_SESSION['iduseradmin'] = $id_user;
								$_SESSION['iduserguest'] = $id_user;
								header('Location: ../admin.php');
							}

							if (($id_user > 0) && ($lever==0)) {
								$_SESSION['nameuser'] = $name_user;
								$_SESSION['iduserguest'] = $id_user;
								header('Location: ../index.php');
							}else{
								echo '<div class="text-center p-t-12">
										<span class="txt1" style=" color=red;color: red;font-weight: bold;">
											SAI TÊN ĐĂNG NHẬP HOẶC MẬT KHẨU
										</span>
									</div>
							';
							}
						}
					?>				

					<div class="text-center p-t-12">
						<span class="txt1">
							QUÊN 
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							TẠO TÀI KHOẢN
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>



			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../view/style-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../view/style-login/vendor/bootstrap/js/popper.js"></script>
	<script src="../view/style-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../view/style-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../view/style-login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../view/style-login/js/main.js"></script>

</body>
</html>