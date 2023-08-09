<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
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
        <h2>Item Update</h2>
        <form id="item_update_form" action="update_item_backend.php" method="POST" onsubmit="return validateForm()">
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
                <label for="item_category">Item Category:</label>
                <select name="item_category" id="item_category" required>
                    <option value="">Select</option>
                    <option value="Printers">Printers</option>
                    <option value="Laptops">Laptops</option>
                    <option value="Gadgets">Gadgets</option>
                    <option value="Ink bottels">Ink bottels</option>
                    <option value="Cartridges">Cartridges</option>
                </select>
            </div>
            <div class="form-group">
                <label for="item_subcategory">Item Subcategory:</label>
                <select name="item_subcategory" id="item_subcategory" required>
                    <option value="">Select</option>
                    <option value="HP">HP</option>
                    <option value="Dell">Dell</option>
                    <option value="Lenovo">Lenovo</option>
                    <option value="Acer">Acer</option>
                    <option value="Samsung">Samsung</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Updating Quantity:</label>
                <input type="text" name="quantity" id="quantity" required>
            </div>
            <div class="form-group">
                <label for="unit_price">Updating Unit Price:</label>
                <input type="text" name="unit_price" id="unit_price" required>
            </div>
            <div class="form-group">
                <button type="submit">Update</button>
                <button type="Reset">Reset</button>
            </div>
		
        </form>
        <?php
    if (isset($_GET['status']) && $_GET['status'] === 'fail') {
        echo '<script>alert("Item does not exists! Cannot update. Register item if needed.");</script>';
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
    const itemCategory = document.getElementById("item_category").value;
    const itemSubCategory = document.getElementById("item_subcategory").value;
    const Quantity = document.getElementById("quantity").value;
    const UnitPrice = document.getElementById("unit_price").value;

    	if (itemCode === "" || itemName === "" || itemCategory === "" || itemSubCategory === "" || Quantity === ""|| UnitPrice === "") {
        	alert("All fields are required");
        	return false;
    	}
    	return true;
	}
    </script>

</body>
</html>