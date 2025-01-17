<?php

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

    // Updated SQL query to match database column names
    $sql = "INSERT INTO `purchase_return` (orderid, ordernumber, suppiers, orderdate, descriptions, quantity, Amount)
            VALUES ('$orderid', '$ordernumber', '$suppiers', '$orderdate', '$descriptions', '$quantity', '$Amount')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        echo " ";
        header('Location: purchase_return_list.php');
        exit;
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
