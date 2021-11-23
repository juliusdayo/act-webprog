<?php

	$email = $_POST['email'];
	$pass =  $_POST['password'];

	include 'conn.php';



	$q = "SELECT * FROM users WHERE email='$email'";
	$res = $con->query($q);

	if(!$res){
		die("Email Not Found");
	}

	$data = $res->fetch_assoc();	
	$password  = $data["password"];

	if(password_verify($pass, $password)){
		header("Location: http://localhost/act/welcome.php");
	}
	

