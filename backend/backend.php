<?php

include '../db/connect.php';


if (isset($_POST['submit'])) {
    // Database insertttt
    $product_id = $_POST['product_id'];
    $company_id = $_POST['company_id']; 
    $product_name = $_POST ['product_name'];
    $SKU = $_POST['SKU'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $manufacture_date = $_POST['manufacture_date'];
    $expiry_date = $_POST['expiry_date'];

    // Updated SQL query to match database column names
    $sql = "INSERT INTO `products`(product_id,company_id, product_name,SKU, quantity, price, category, manufacture_date, expiry_date)
            VALUES ('$product_id','$company_id', '$product_name',  '$SKU', '$quantity', '$price', '$category', '$manufacture_date', '$expiry_date')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully.";
        header("Location: productList.php");
        exit; // Always use `exit` after a redirect to stop script execution.

    } else {
        die("Error inserting data: " . mysqli_error($conn));
}
}
?>
