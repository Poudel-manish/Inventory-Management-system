
<?php
require( "../db/connect.php");
$sql = "SELECT * FROM `order`";
$result = mysqli_query($conn, $sql);




if (isset($_POST['Add'])) {
    // Database insert
    $SN = $_POST['SN'];
    $suppliers =$_POST['suppliers'];
    $ordernum = $_POST['ordernum'];
    $orderdate = $_POST['orderdate'];
     $descriptions = $_POST['descriptions'];
    $quantity = $_POST['quantity']; 
    $quotedprice = $_POST['quotedprice'];
 

    // Updated SQL query to match database column names
    $sql= "INSERT INTO `order` (SN,suppliers, ordernum, orderdate, descriptions, quantity, quotedprice)
VALUES ('$SN','$suppliers' ,'$ordernum', '$orderdate', '$descriptions', '$quantity', '$quotedprice')";


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
