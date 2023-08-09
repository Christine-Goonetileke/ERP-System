<?php
$conn=mysqli_connect("localhost", "root", "");

if(!$conn){
	die("Coonection failed:".mysqli_error($conn));
}


?>