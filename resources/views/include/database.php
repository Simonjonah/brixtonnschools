<?php
$user = "root";
$password = "";

$conn = new PDO('mysql:host=localhost;dbname=nci', $user, $password);

if ($conn) {
	//echo "success";
}else{
	echo "non";
}
