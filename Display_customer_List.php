<?php
include ('conn.php');

mysqli_select_db($conn, "assignment");

$sql = "select * from customer;";

$result = mysqli_query($conn, $sql);

if(!$result)
	die("invalid query:".mysqli_error($conn));

echo "<table>";
?>
<tr>
            <th>ID</th>
            <th>Title</th>
            <th>First Name</th>
	    <th>Middle Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>District</th>
        </tr>
<?php
while($row=mysqli_fetch_array($result)){ 
            echo "<tr>";
                echo "<td>".htmlspecialchars($row['id'])."</td>";
		echo "<td>".htmlspecialchars($row['title'])."</td>";
		echo "<td>".htmlspecialchars($row['first_name'])."</td>";
		echo "<td>".htmlspecialchars($row['middle_name'])."</td>";
		echo "<td>".htmlspecialchars($row['last_name'])."</td>";
		echo "<td>".htmlspecialchars($row['contact_no'])."</td>";
		echo "<td>".htmlspecialchars($row['district'])."</td>";
            echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>