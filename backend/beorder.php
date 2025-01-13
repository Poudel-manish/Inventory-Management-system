
<?php
require( "../db/connect.php");
$sql = "SELECT * FROM `orders`";
$result = mysqli_query($conn, $sql);

if (isset($_POST['Add'])) {
    // Database insert
    $order_id= $_POST['order_id'];
    $company_id= $_POST['company_id'];
    $order_number = $_POST['order_number'];
    $supplier = $_POST['supplier'];
    $order_date = $_POST['order_date'];
     $description = $_POST['description'];
    $quantity = $_POST['quantity']; 
    $total_price = $_POST['total_price'];
 

    // Updated SQL query to match database column names
    $sql= "INSERT INTO `orders` (order_id,company_id,order_number,supplier, order_date, description, quantity, total_price)
VALUES ('$order_id','$company_id','$order_number','$supplier' , '$order_date', '$description', '$quantity', '$total_price')";


    // Execute query and check for success
    if(mysqli_query($conn, $sql)) {
        echo " ";
        header('Location: orderList.php');
        exit; 

    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
