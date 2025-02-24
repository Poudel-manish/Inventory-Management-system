<?php
// Include the database connection file
include '../db/connect.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $phone1 = $_POST['phone1'];

    // Update query
    $sql = "UPDATE customer SET 
            first_name = '$first_name', 
            last_name = '$last_name', 
            company_name = '$company_name', 
            email = '$email', 
            address = '$address', 
            phone = '$phone', 
            phone1 = '$phone1' 
            WHERE first_name = '$first_name'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to the customer list page after successful update
        header('Location: ../sales/customerList.php');
        exit();
    } else {
        // Display error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch the customer details for pre-filling the form
if (isset($_GET['updateid'])) {
    $first_name = $_GET['updateid'];
    $sql = "SELECT * FROM customer WHERE first_name = '$first_name'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Customer not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../style/customer_list.css"> <!-- Reuse the customer list CSS -->
</head>

<body>
    <div class="content-section">
        <h1>Update Customer</h1>
        <form method="POST" action="">
            <input type="hidden" name="first_name" value="<?php echo $row['first_name']; ?>">

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>" required>

            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" value="<?php echo $row['company_name']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required>

            <label for="phone1">Alternate Phone:</label>
            <input type="text" id="phone1" name="phone1" value="<?php echo $row['phone1']; ?>">

            <button type="submit" name="submit">Update Customer</button>
        </form>
    </div>
</body>

</html>