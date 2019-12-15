<?php
    ob_start();
    session_start();
    include "model/pdo.php";
    include "model/user.php";
    include "model/store.php";
    include "model/product.php";
    include "model/catalog.php";
    include "model/tool.php";
	include "model/cart.php"; 
	include "model/global.php"; 


	/**---------Setup Ngày-------------------------- */
	date_default_timezone_set("Asia/Ho_Chi_Minh");	
	$ngay=date("d");
	$thang=date("m");
	$nam=date("Y");
	$gio=date("H");
	$phut=date("i");
	/**------------------------------------------- */

	$list_comment=commentlist();

	if (isset($_SESSION['iduserguest'])) {
		$id_userr=$_SESSION['iduserguest'];

		$infor_user=user_by_id($id_userr);

		$ten_user=$infor_user['fullname'];
		$email_user=$infor_user['email'];
	}else{
		$ten_user="";
		$email_user="";
	}

	
	if (isset($_GET['idProduct'])) {
		$idProduct=$_GET['idProduct'];
	}
	else{
		$idProduct=0;
	}

	if (isset($_POST['binhluan']) && $_POST['binhluan']) {
		$name_bl=$_POST['name'];
		$email_bl=$_POST['email'];
		$noidung_bl=$_POST['noidung'];
		$idproduct_bl=$_POST['idproduct'];
		$danhgia_bl=$_POST['danhgia'];
		$datetime=$_POST['datetime'];

		user_insert($name_bl,$email_bl,$noidung_bl,$danhgia_bl,$idproduct_bl,$id_userr,$datetime);
		header("location: comment.php?idProduct=".$idproduct_bl);
	}

	if (isset($_GET['page']) && $_GET['page']>0 ){
		$page=$_GET['page'];
	}else{
		$page=1;
	}

	$count_danhgia=count_danhgia($idProduct);
	
	$phantrang_comment=phan_comment($idProduct,$page,$count_danhgia);
	
	$show_comment=commentlist_by_id($idProduct,$page);	
	$dem_comment=count($show_comment);
	$TB_danhgia=TBdanhgia($idProduct);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Comment Royal Sport</title>
	<link rel="stylesheet" href="view/style-comment/vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="view/style-comment/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="view/style-comment/vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="view/style-comment/vendors/linericon/style.css">
	<link rel="stylesheet" href="view/style-comment/vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="view/style-comment/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="view/style-comment/vendors/owl-carousel/owl.carousel.min.css">

	<link rel="stylesheet" href="view/style-comment/css/style.css">
</head>

<body>

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-6 " id="widthcustom-left">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Tổng thể</h5>
										<h4>
											<?php
												if ($TB_danhgia>0) {
													echo $TB_danhgia;
												}else{
													echo '0';
												}
											?>
										<h6>(<?=$count_danhgia="1";?> lược đánh giá)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Các lược đánh giá</h3>
										<?php
											$count_1sao=count_1_sao(1,$idProduct);
											$count_2sao=count_1_sao(2,$idProduct);
											$count_3sao=count_1_sao(3,$idProduct);
											$count_4sao=count_1_sao(4,$idProduct);
											$count_5sao=count_1_sao(5,$idProduct);										
										?>
										<ul class="list">
											<li><a href="#">5 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>( <?=COUNT($count_5sao)?> )</a></li>
											<li><a href="#">4 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>( <?=COUNT($count_4sao)?> )</a></li>
											<li><a href="#">3 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>( <?=COUNT($count_3sao)?> )</a></li>
											<li><a href="#">2 Sao <i class="fa fa-star"></i><i class="fa fa-star"></i>( <?=COUNT($count_2sao)?> )</a></li>
											<li><a href="#"> 1 Sao <i class="fa fa-star"></i>( <?=COUNT($count_1sao)?> )</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<?php
								
										if ($dem_comment>0) {
											foreach ($show_comment as $com) {
												$demsao=SoSao($com['danhgia']);
												echo'
													<div class="review_item">
													<div class="media">
														<div class="d-flex">
															<img src="uploads/'.$com['image'].'" alt="">
														</div>
														<div class="media-body">
															<h4>'.$com['name'].'<span class="Datecomment">'.$com['datetime'].'</span></h4>
															'.$demsao.'
														</div>
													</div>
													<p>'.$com['noidung'].'</p>
												</div>
												';
											}
										}else{
											echo'
											<i class="far fa-sad-tear"></i> 
											<Strong>Chưa có bất cứ nhận xét nào về sản phẩm này!</Strong> <br><br><br>';
										}			
																		
								?>
								
								
								<!-- Pagination -->
							<div class="flex-c-m flex-w w-full p-t-38">
								<?php
								echo $phantrang_comment;								
								?>
							</div>								
						</div>

						</div>
						<div class="col-lg-6 " id="widthcustom-right">
							<div class="review_box">
								<h4>Thêm đánh giá</h4>
								<form action="comment.php" method="post" class="form-contact form-review mt-3">
									<div id="select_SAO" style="padding-bottom: 17px;" >
										<select name="danhgia" required>
											<option value="1">1 Sao</option>
											<option value="2">2 Sao</option>
											<option value="3">3 Sao</option>
											<option value="4">4 Sao</option>
											<option selected value="5">5 Sao</option>
										</select>
										<ul class="list">
											<li><a href="#"><i class="fa fa-star" style=" margin-top: 14px;"></i></a></li>
											<li><a href="#"><i class="fa fa-star" style=" margin-top: 14px;"></i></a></li>
											<li><a href="#"><i class="fa fa-star" style=" margin-top: 14px;"></i></a></li>
											<li><a href="#"><i class="fa fa-star" style=" margin-top: 14px;"></i></a></li>
											<li><a href="#"><i class="fa fa-star" style=" margin-top: 14px;"></i></a></li>
										</ul>											
									</div>								
									<input type="hidden" name="idproduct" value="<?=$idProduct;?>">
									<input type="hidden" name="datetime" value="<?=$nam;?>-<?=$thang;?>-<?=$ngay;?>T<?=$gio;?>:<?=$phut;?>" >									
									<div class="form-group">
										<input class="form-control" name="name" type="text" placeholder="Họ và Tên" value="<?=$ten_user;?>" autocomplete="no" required>
									</div>
									<div class="form-group">
										<input class="form-control" name="email" type="email" placeholder="Địa chỉ thư điện tử"  value="<?=$email_user;?>" required>
									</div>
									<div class="form-group">
										<textarea class="form-control different-control w-100" name="noidung" id="textarea" cols="30" rows="7" placeholder="Đánh giá sản phẩm" required title="Đánh giá của bạn về sản phẩm như thết nào?" minlength="10"></textarea>
									</div>
									<div class="form-group text-center text-md-right mt-3">
										<input type="submit" class="button button--active button-review" name="binhluan" value="Thêm bình luận">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<script src="view/style-comment/vendors/jquery/jquery-3.2.1.min.js"></script>
		<script src="view/style-comment/vendors/bootstrap/bootstrap.bundle.min.js"></script>
		<script src="view/style-comment/vendors/skrollr.min.js"></script>
		<script src="view/style-comment/vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="view/style-comment/vendors/nice-select/jquery.nice-select.min.js"></script>
		<script src="view/style-comment/vendors/jquery.ajaxchimp.min.js"></script>
		<script src="view/style-comment/vendors/mail-script.js"></script>
		<script src="view/style-comment/js/main.js"></script>
</body>

</html>