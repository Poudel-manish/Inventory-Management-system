<?php
include '../db/connect.php';



if (isset($_GET['delete'])) {
    // Get the product_id from the URL parameter and escape it to prevent SQL injection
    $vendors = mysqli_real_escape_string($conn, $_GET['delete']);

    // Use the correct variable in the DELETE query
    $sql = "DELETE FROM `expenses` WHERE vendors = '$vendors'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // If the deletion is successful, redirect to the product list

        header("Location: ../purchase/expenseslist.php");
        exit;
    } else {
        // If the deletion fails, display an error message
        die("Failed to delete the record from the database: " . mysqli_error($conn));
    }
}
