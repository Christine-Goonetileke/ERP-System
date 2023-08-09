<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
include ("conn.php");

extract($_POST);

mysqli_select_db($conn, "assignment");

//check if the item already exists 
$sql_0= "select item_code from item where item_code='".$item_code."';";
$result_0 = mysqli_query($conn, $sql_0);
if(mysqli_num_rows($result_0) == 1){
	


    //converting the item category to category id 
    $sql_1= "select id from item_category where category='".$item_category."' limit 1;";
    $result_1 = mysqli_query($conn, $sql_1);
    if(!$result_1)
    	die("invalid query:".mysqli_error($conn));
    $row=mysqli_fetch_assoc($result_1);
    $item_category_id=$row['id'];

    //converting the item subcategory to subcategory id 
    $sql_2= "select id from item_subcategory where sub_category='".$item_subcategory."' limit 1;";
    $result_2 = mysqli_query($conn, $sql_2);
    if(!$result_2)
    	die("invalid query:".mysqli_error($conn));
    $row=mysqli_fetch_assoc($result_2);
    $item_subcategory_id=$row['id'];

    $sql = "UPDATE item SET item_code='".$item_code."', item_category='".$item_category_id."', item_subcategory='".$item_category_id."', item_name='".$item_name."', quantity='".$quantity."', unit_price='".$unit_price."' WHERE item_code='".$item_code."';";

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
