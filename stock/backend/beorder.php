
<?php
require( "../db/connect.php");
$sql = "SELECT * FROM `order`";
$result = mysqli_query($conn, $sql);

// if ($result) {
//     echo "Connection successful and query executed.";
// } else {
//     echo "Error: " . mysqli_error($conn);
// }




if (isset($_POST['Add order'])) {
    // Database insert
    $SN = $_POST['SN'];
    $ordernum = $_POST['ordernum'];
    $orderdate = $_POST['orderdate'];
     $descriptions = $_POST['descriptions'];
    $quantity = $_POST['quantity'];
   
    $quotedprice = $_POST['quotedprice'];
 

    // Updated SQL query to match database column names
    $sql= "INSERT INTO `order` (SN, ordernum, orderdate, descriptions, quantity, quotedprice)
VALUES ('$SN', '$ordernum', '$orderdate', '$descriptions', '$quantity', '$quotedprice')";


    // Execute query and check for success
    if(mysqli_query($conn, $sql)) {
        echo "added sucess ";
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
