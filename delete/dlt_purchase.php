<?php
include '../db/connect.php';


// Execute the query
if (mysqli_query($conn, $sql)) {
    // Debugging: Check if the deletion is successful
    error_log("Deletion successful");
    // Redirect to the product list page after successful update
    header('Location: ../inventory/productList.php');
    exit();
} else {
    // Debugging: Check if the deletion fails
    error_log("Deletion failed: " . mysqli_error($conn));
    // Display error if the query fails
    die("Failed to delete the record from the database: " . mysqli_error($conn));
}
