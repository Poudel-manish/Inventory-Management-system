<?php
session_start();
require("../db/connect.php");

$sql = "SELECT * FROM `purchase_return`";
$result = mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {

    $orderid = $_POST['orderid'];
    $ordernumber = $_POST['ordernumber'];
    $suppiers = $_POST['suppiers'];
    $orderdate = $_POST['orderdate'];
    $descriptions = $_POST['descriptions'];
    $quantity = $_POST['quantity'];
    $Amount = $_POST['Amount'];
    $user_id = $_SESSION['user_id'];
    if ($_SESSION['role'] == 'manager' || $_SESSION['role'] == 'employee') {

        $sqlFetch = "SELECT `company_id` FROM `users` WHERE `user_id` = '$user_id'";
        $fetchResult = mysqli_query($conn, $sqlFetch);

        $noOfRow = mysqli_num_rows($fetchResult);
        if ($noOfRow) {
            $row = mysqli_fetch_assoc($fetchResult);
            $company_id = $row['company_id'];
        }
    } else {
        $company_id = $user_id;
    }

    // Updated SQL query to match database column names
    $sql = "INSERT INTO `purchase_return` (orderid, ordernumber, suppiers, orderdate, descriptions, quantity, Amount,user_id,company_id)
            VALUES ('$orderid', '$ordernumber', '$suppiers', '$orderdate', '$descriptions', '$quantity', '$Amount','$user_id','$company_id')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        echo " ";
        header('Location: ../purchase/purchase_return_list.php');
        exit;
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
