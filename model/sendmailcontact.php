<?php
	//goi thu vien
	include('class.smtp.php');
	include "class.phpmailer.php"; 
	include "functions2.php"; 
	
	$title = $_POST['topic'];
	$content = $_POST['message'];
	$nTo = $_POST['name'];
	$mTo = $_POST['email'];
	$diachi = 'lenhathao3112@gmail.com';
	//test gui mail
	$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
	if($mail==1)
	$erro = 'Thành công mời vào email xem kết quả.';
	else $erro = 'Có lỗi!';
?>