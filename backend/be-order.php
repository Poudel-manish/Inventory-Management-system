<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "myshop";
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Unable to connect";
} else {
    echo "Connection was successful";
}
if(isset($_POST['Add'])){
    $SN =$_POST['SN'];
    $ordernum=$_POST['ordernum'];
    $orderdate=$_POST['orderdate'];
    $descriptions=$_POST['descriptions'];
    $quantity=$_POST['quantity'];
    $quotedprice=$_POST['quotedprice'];
    $sql = "INSERT INTO `order` (SN, ordernum, orderdate, descriptions, quantity, quotedprice) 
        VALUES ('$SN', '$ordernum', '$orderdate', '$descriptions', '$quantity', '$quotedprice')";


    if(mysqli_query($conn,$sql)){
        echo "product added";
    }
    else{
        echo "failed to added";
    }

}
?>