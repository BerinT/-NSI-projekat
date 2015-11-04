<?php
$conn = mysqli_connect("localhost:3306", "root", "","evidencija_godisnji");
if(!$conn){
	die("Connection failed" . mysqli_connect_error());
}
else{
	echo "Connected successfully";
}
?>