<?php

		$email = $_POST['email'];
		$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

		include 'conn.php';

		$q = "INSERT INTO users (email,password) VALUES ('$email','$pass')";

		if(!$con->query($q)){
			die("Email Exists");
		}

		header("Location: http://localhost/act/welcome.php");
		$con->close();