<?php
include ('conn.php');

mysqli_select_db($conn, "assignment");

$sql = "select * from item;";

$result = mysqli_query($conn, $sql);

if(!$result)
	die("invalid query:".mysqli_error($conn));

echo "<table>";
?>
<tr>
            <th>ID</th>
            <th>Item Code</th>
            <th>Item Category</th>
	    <th>Item Subcategory</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
        </tr>
<?php
while($row=mysqli_fetch_array($result)){ 
            echo "<tr>";
                echo "<td>".htmlspecialchars($row['id'])."</td>";
		echo "<td>".htmlspecialchars($row['item_code'])."</td>";
		echo "<td>".htmlspecialchars($row['item_category'])."</td>";
		echo "<td>".htmlspecialchars($row['item_subcategory'])."</td>";
		echo "<td>".htmlspecialchars($row['item_name'])."</td>";
		echo "<td>".htmlspecialchars($row['quantity'])."</td>";
		echo "<td>".htmlspecialchars($row['unit_price'])."</td>";
            echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>