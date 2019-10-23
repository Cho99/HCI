<?php 
session_start();
if (isset($_POST['login'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
		$_SESSION['error'] = "Quý khách vui lòng nhập lại Email và Mật Khẩu!";
		header('location:../View/form-login.php');
	}else {
		$_SESSION['login'] = $_POST['email'];
		header('location:../View/index.php');
	}
	
}

if (isset($_GET['logout'])) {
	unset($_SESSION['login']);
	header('location:../View/form-login.php');
}
 ?>