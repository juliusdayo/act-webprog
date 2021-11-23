<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "webprog";

$con = mysqli_connect($host,$user,$password,$database);

if(!$con){
	die("Connection Failed: " .mysql_error());
}

