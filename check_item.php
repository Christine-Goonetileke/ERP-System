<?php
// Connect to the database and query to check if the username exists
include ("conn.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['item_code'])) {
    $item_code = $_POST['item_code'];

    // Prevent SQL injection by using prepared statements
    $sql = "SELECT * FROM item WHERE item_code = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $item_code);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // Username exists in the database
        echo "exists";
    } else {
        // Username does not exist in the database
        echo "not_exists";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
