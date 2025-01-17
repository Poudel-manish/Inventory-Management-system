
<?php

require("../db/connect.php");
session_start(); //session start
if (!isset($_SESSION['company_id'])) {
    die("Company ID not set in session. Please log in again."); // Check if company_id exists in the session
}

$company_id = $_SESSION['company_id'];

$sql = "SELECT * FROM `sales`";
$result = mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {
    // Database insert
    $bill_id = $_POST['bill_id'];
    // $company_id= $_POST['company_id'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $quantity_sold = $_POST['quantity_sold'];
    $sale_date = $_POST['sale_date'];
    // $description = $_POST['description']; 
    $total_price = $_POST['total_price'];


    // Updated SQL query to match database column names
    $sql = "INSERT INTO `sales` (bill_id,company_id,product_id,product_name,quantity_sold, sale_date,  total_price)
VALUES ('$bill_id','$company_id','$product_id','$product_name','$quantity_sold' , '$sale_date', '$total_price')";


    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        echo " ";
        header('Location: sellList.php');
        exit;
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
