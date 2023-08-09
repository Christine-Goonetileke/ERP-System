<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
include ("conn.php");

extract($_POST);

mysqli_select_db($conn, "assignment");

//check if the item already exists 
$sql_0= "select item_code from item where item_code='".$item_code."' and item_name='".$item_name."';";
$result_0 = mysqli_query($conn, $sql_0);
if(mysqli_num_rows($result_0) == 1){
	
    //to get the existing quantity 
    $sql_1= "select quantity from item where item_code='".$item_code."' and item_name='".$item_name."';";
    $result_1 = mysqli_query($conn, $sql_1);
    $row=mysqli_fetch_assoc($result_1);
    $new_quantity=$row['quantity']+$item_code;

    $sql = "UPDATE item SET quantity='".$new_quantity."' WHERE item_code='".$item_code."';";

    $result = mysqli_query($conn, $sql);

    if(!$result){
    	die("invalid query:".mysqli_error($conn));
    }
    

} else {
    header("Location:Item_Registration.php?status=fail");
    exit();
    
}

mysqli_close($conn);

header("Location:Item_Registration.php");
?>
