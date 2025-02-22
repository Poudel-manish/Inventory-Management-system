<?php
include '../db/connect.php';

if (isset($_GET['delete'])) {
    // Get the first_name from the URL parameter and escape it to prevent SQL injection
    $first_name = mysqli_real_escape_string($conn, $_GET['delete']);

    // Use the correct variable in the DELETE query
    $sql = "DELETE FROM `customer` WHERE first_name = '$first_name'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // If the deletion is successful, redirect to the customer list
        header("Location: ../sales/customer_list.php");
        exit;
    } else {
        // If the deletion fails, display an error message
        die("Failed to delete the record from the database: " . mysqli_error($conn));
    }
}
