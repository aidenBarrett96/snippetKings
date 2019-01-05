<?php
$conn = mysqli_connect('localhost','root','');

if(!$conn) {
	die("connection failed: " .mysqli_connect_error());
}
echo "Connected successfully";
?>