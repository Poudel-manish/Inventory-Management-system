<?php

include '../db/connect.php';
session_start(); // Start session to access session variables

if (!isset($_SESSION['user_id'])) {
    die("User ID not set in session. Please log in again."); // Check if user_id exists in the session
}

$user_id = $_SESSION['user_id'];

$sqlFetch = "SELECT `company_id` FROM `users` WHERE `user_id` = '$user_id'";
$sqlResult = mysqli_query($conn, $sqlFetch);
if ($sqlResult) {
    $row = mysqli_fetch_assoc($sqlResult);
    $company_id = $row['company_id']; // Fetch company_id from users table
} else {
    die("Error fetching company_id: " . mysqli_error($conn));
}

if (isset($_POST['submit'])) {
    // Database insert
    $product_name = $_POST['product_name'];
    $quantity_sold = $_POST['quantity_sold'];
    $sale_date = $_POST['sale_date'];
    $total_price = $_POST['total_price'];

    // Updated SQL query to match database column names
    $sql = "INSERT INTO `sales` (company_id, product_name, quantity_sold, sale_date, total_price, user_id)
            VALUES ('$company_id', '$product_name', '$quantity_sold', '$sale_date', '$total_price', '$user_id')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        header('Location: ../sales/saleslist.php');
        exit;
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
