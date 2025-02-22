
<?php

require( "../db/connect.php");
session_start(); //session start
if (!isset($_SESSION['user_id'])) {
    die("Company ID not set in session. Please log in again."); // Check if company_id exists in the session
}

$company_id = $_SESSION['company_id'];

$sql = "SELECT * FROM `orders`";
$result = mysqli_query($conn, $sql);

if (isset($_POST['Add'])) {
    // Database insert
    $order_id= $_POST['order_id'];
    // $company_id= $_POST['company_id'];
   
    $supplier = $_POST['supplier'];
    $order_date = $_POST['order_date'];
     $description = $_POST['description'];
    $quantity = $_POST['quantity']; 
    $total_price = $_POST['total_price'];
    $user_id =$_SESSION['user_id'];

    if ($_SESSION['role'] == 'manager' || $_SESSION['role'] == 'employee'
    ) {

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
    $sql= "INSERT INTO `orders` (order_id,company_id,supplier, order_date, description, quantity, total_price,user_id)
VALUES ('$order_id','$company_id','$supplier' , '$order_date', '$description', '$quantity', '$total_price','$user_id')";


    // Execute query and check for success
    if(mysqli_query($conn, $sql)) {
        echo " ";
        header('Location: ../purchase/purchase_order.php');
        exit; 

    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
