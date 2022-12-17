<?php
session_start();
	include('dbconnect.php');
	$username = $_POST["username"];
	$pass = $_POST["password"];
/*
	$regex = '/[A-Z]/';
	if (!preg_match($regex, $pass)) {
		echo " must contain at least one capital letter";
	}else{ 
*/	

if($_GET['mod']=='login'){
	$Q=mysqli_query($conn,"SELECT * FROM user WHERE name='$username' AND password='$pass'");
	$r=mysqli_fetch_array($Q);
	//check data
	if(mysqli_num_rows($Q)){
	$_SESSION['username']=$r['name'];
		$_SESSION['pass']=$r['password'];
		header('location:index.php');	
	}
	else {
	header('location:login.php');	
	}
}
	// if regex }


