<?php
include ("conn.php");

extract($_POST);

mysqli_select_db($conn, "assignment");

//converting the district name to district id 
$sql_1= "select id from district where district='".$district."' limit 1;";
$result_1 = mysqli_query($conn, $sql_1);
if(!$result_1)
	die("invalid query:".mysqli_error($conn));
$row=mysqli_fetch_assoc($result_1);
$district_id=$row['id'];


$sql = "insert into customer (title, first_name, middle_name, last_name, contact_no, district) values('".$title."', '".$first_name."' , '".$middle_name."' , '".$last_name."' , '".$contact_no."' , '".$district_id."');";

$result = mysqli_query($conn, $sql);

if(!$result)
	die("invalid query:".mysqli_error($conn));

mysqli_close($conn);
header("Location:Customer_Registration.php");
?>