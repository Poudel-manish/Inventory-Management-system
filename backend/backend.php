<?php

include '../db/connect.php';
session_start(); // Start session to access session variables

if (!isset($_SESSION['user_id'])) {
    die("Company ID not set in session. Please log in again."); // Check if company_id exists in the session
}

$uid = $_SESSION['user_id'];

$sqlFetch = "SELECT `company_id` FROM `users` WHERE `user_id` = '$uid'";
$sqlResult = mysqli_query($conn, $sqlFetch);

if ($sqlResult) {
    $row = mysqli_fetch_assoc($sqlResult);
    $company_id = $row['company_id']; // 
} else {
    die("Error fetching company_id: " . mysqli_error($conn));
}

// $company_id = $_SESSION['user_id'];
$user_id = $_SESSION['user_id'];

if (isset($_POST['submit'])) {

    // Database insertttt
    $product_id = $_POST['product_id'];
    $user_id = $uid; 
    $product_name = $_POST ['product_name']; 
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total_price = $quantity * $price;
    $category = $_POST['category'];
    $manufacture_date = $_POST['manufacture_date'];
    $expiry_date = $_POST['expiry_date'];
    
    // Updated SQL query to match database column names
    $sql = "INSERT INTO `products`(product_id,company_id, product_name, quantity, price,total_price, category, manufacture_date, expiry_date,user_id)
            VALUES ('$product_id','$company_id', '$product_name', '$quantity', '$price','$total_price', '$category', '$manufacture_date', '$expiry_date','$user_id')";

// Execute query and check for success
if (mysqli_query($conn, $sql)) {
    echo "Product added successfully.";
    header("Location: ../inventory/productList.php");
    exit; // Always use `exit` after a redirect to stop script execution.
    
} else {
    die("Error inserting data: " . mysqli_error($conn));
}
}

?>
