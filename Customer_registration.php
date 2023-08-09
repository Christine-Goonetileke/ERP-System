<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="home-button">
                <a href="Main.php">
                	<button>Home</button>
                </a>
    </div>
    
    <div class="container">
        <h2>Customer Registration</h2>
        <form action="insert_customer.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="title">Title:</label>
                <select name="title" id="title" required>
                    <option value="">Select</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Miss">Miss</option>
                    <option value="Dr">Dr</option>
                </select>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
	    <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" name="middle_name" id="middle_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="tel" name="contact_no" id="contact_no" required>
            </div>
            <div class="form-group">
                <label for="district">District:</label>
                <select name="district" id="district" required>
                    <option value="">Select</option>
                    <option value="Ampara">Ampara</option>
                    <option value="Anuradhapura">Anuradhapura</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Galle">Galle</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Hambantota">Hambantota</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Kurunegala">Kurunegala</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Matale">Matale</option>
                    <option value="Matara">Matara</option>
                    <option value="Moneragala">Moneragala</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Rathnapura">Rathnapura</option>
                    <option value="Vavuniya">Vavuniya</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
                <button type="reset">Reset</button>
            </div>	
		
        </form>
    </div>



    <div class="table-container">
	<h2>Customer Details</h2>
	<?php include 'Display_customer_List.php'; ?>	
    </div>



    <script>
	function validateForm() {
    const title = document.getElementById("title").value;
    const firstName = document.getElementById("first_name").value;
    const lastName = document.getElementById("last_name").value;
    const contactNumber = document.getElementById("contact_no").value;
    const district = document.getElementById("district").value;

    if (title === "" || firstName === "" || lastName === "" || contactNumber === "" || district === "") {
        alert("All fields are required");
        return false;
    }

    return true;
}

    </script>
</body>
</html>