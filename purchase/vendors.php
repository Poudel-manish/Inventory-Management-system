<?php
// include '../backend/bvendors.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Vendor Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="../style/vendors.css">
</head>

<body>
    <div class="form-container">
        <h1>New Vendor</h1>
        <form method="post" action="../backend/bvendors.php">
            <!-- Primary Contact -->
            <div class="form-group">
                <label for="primary-contact">Primary Contact</label>
                <div class="row">
                    <select id="salutation" name="salutation">
                        <option value="">Salutation</option>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="ms">Ms.</option>
                    </select>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name">
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                </div>
            </div>

            <!-- Company Name -->
            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" id="company_name" name="company_name" placeholder="Company Name">
            </div>



            <!-- Email Address -->
            <div class="form-group">
                <label for="email-address">Email Address</label>
                <div class="email-input">
                    <!-- <span class="material-symbols-outlined">email</span> -->
                    <input type="email" id="email" name="email" placeholder="Email Address">
                </div>
            </div>
            <div class="form-group">
                <label for="location"> Address</label>
                <div class="location">
                    <!-- <span class="material-symbols-outlined">email</span> -->
                    <input type="text" id="address" name="address" placeholder=" Address">
                </div>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <div class="row">
                    <input type="text" id="phone" name="phone" placeholder="Work Phone">
                    <input type="text" id="phone1" name="phone1" placeholder="Mobile Phone">
                </div>
                <input type="submit" name="submit" value="submit" />
            </div>
        </form>
    </div>
</body>

</html>