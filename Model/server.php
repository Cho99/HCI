<?php 
session_start();
if (isset($_POST['login'])) {
	if (empty($_POST['username'])) {
		header('location:../View/form-login.php');
	}else {
		$_SESSION['login'] = $_POST['username'];
		header('location:../View/index.php');
	}
	
}

if (isset($_GET['logout'])) {
	unset($_SESSION['login']);
	header('location:../View/login.php');
}
 ?>