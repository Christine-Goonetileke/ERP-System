<?php
include ("conn.php");

extract($_POST);

mysqli_select_db($conn, "assignment");

//chek if the id already exists 
$sql_1= "select id from item where id='".$id."';";
$result_1 = mysqli_query($conn, $sql_1);

mysqli_close($conn);

?>