<!DOCTYPE html>
<html>
<head>
    <title>Remove Items</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <?php
        if(isset($error)){
        echo '<p style="color: red;">' . $error . '</p>';
    }
    ?>
</head>
<body>
<div>
    <div class="home-button">
                <a href="Main.php">
                    <button>Home</button>
                </a>
                <a href="Items_Main_Page.php">
                    <button>Back</button>
                </a>
    </div>
    <div class="container">
        <h2>Item Remove</h2>
        <form id="item_remove_form" action="remove_item_backend.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="item_code">Item Code:</label>
                <input type="text" name="item_code" id="item_code">
                <span id="itemStatus"></span> <!-- To show validation message -->
                <!-- <input type="submit" value="Submit"> -->
            </div>
            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <input type="text" name="item_name" id="item_name" required>
            </div>
            <div class="form-group">
                <label for="quantity">Removing Quantity:</label>
                <input type="text" name="quantity" id="quantity" required>
            </div>
            <div class="form-group">
                <button type="submit">Remove</button>
                <button type="Reset">Reset</button>
            </div>
        
        </form>
        <?php
    if (isset($_GET['status']) && $_GET['status'] === 'fail') {
        echo '<script>alert("Item does not exists! Cannot remove. Register item if needed.");</script>';
        $_GET['status']='success';
    }
    ?>
    </div>

</div><!-- div contains the two form -->

    <div class="table-container">
    <h2>Item Details</h2>
    <?php include 'Display_item_List.php'; ?>   
    </div>

    

    <script>
    function validateForm() {
    const itemCode = document.getElementById("item_code").value;
    const itemName = document.getElementById("item_name").value;
    const Quantity = document.getElementById("quantity").value;

        if (itemCode === "" || itemName === "" || Quantity === "") {
            alert("All fields are required");
            return false;
        }
        return true;
    }
    </script>

</body>
</html>