<?php
	//goi thu vien
	include('class.smtp.php');
	include "class.phpmailer.php"; 
	include "functions.php"; 
	
	$title = $_POST['topic'];
	$content = $_POST['address'];
	$content = $_POST['city'];
	$content = $_POST['state'];
	$content = $_POST['cardname'];
	$content = $_POST['cardnumber'];
	$content = $_POST['expmonth'];
	$content = $_POST['expyear'];
	$content = $_POST['cvv'];
	$content = $_POST['sameadr'];
	$nTo = $_POST['name'];
	$mTo = $_POST['email'];
	$diachi = 'lenhathao3112@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
	if($mail==1)
	echo 'Bạn đã thanh toán thành công mời vào email xem đơn hàng của bạn.';
	else echo 'Có lỗi!';
?>