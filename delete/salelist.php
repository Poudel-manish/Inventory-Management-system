<?php
include '../db/connect.php';



if (isset($_GET['delete'])) {
    // Get the product_id from the URL parameter and escape it to prevent SQL injection
    $bill_id = mysqli_real_escape_string($conn, $_GET['delete']);

    // Use the correct variable in the DELETE query
    $sql = "DELETE FROM `sales` WHERE bill_id = '$bill_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // If the deletion is successful, redirect to the product list
        header("Location: .../sales/saleslist.php");
        exit;
    } else {
        // If the deletion fails, display an error message
        die("Failed to delete the record from the database: " . mysqli_error($conn));
    }
}
