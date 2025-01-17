<?php

require("../db/connect.php");
session_start(); 
if (!isset($_SESSION['company_id'])) {
    die("Company ID not set in session. Please log in again."); 
}

$company_id = $_SESSION['company_id'];
$sql = "SELECT * FROM `expenses`";
$result = mysqli_query($conn, $sql);
if (isset($_POST['submit'])) {
    // Retrieve form data
    $date = $_POST['date'];
    $bill_no = $_POST['bill_no'];
    $vendors = $_POST['vendors'];
    $category = $_POST['category'];
    $payment = $_POST['payment'];
    $account = $_POST['account'];
    $amount = $_POST['amount'];
    $note = $_POST['note'];

    // Insert into the expenses table
    $sql = "INSERT INTO `expenses` (date, bill_no, vendors, category, payment, account, amount, note, company_id) 
            VALUES ('$date', '$bill_no', '$vendors', '$category', '$payment', '$account', '$amount', '$note', '$company_id')";

    // Execute query and handle errors
    if (mysqli_query($conn, $sql)) {
        header('Location: expensesList.php'); // Redirect after successful insertion
        exit;
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
