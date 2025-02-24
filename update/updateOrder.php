<?php
// require($_SERVER['DOCUMENT_ROOT'] . "/stock/db/database.php");
include '../db/database.php';
$id = $_GET['orderid'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $SN = $row['SN'];
    $suppliers = $row['suppliers'];
    $ordernum = $row['ordernum'];
    $orderdate = $row['orderdate'];
    $descriptions = $row['descriptions'];
    $quantity = $row['quantity'];
    $quotedprice = $row['quotedprice'];

    $sql = "UPDATE `crud` SET 
            SN='$SN',
            suppliers='$supplers',
            ordernum='$ordernum',
            orderdate='$orderdate',
            descripton='$description',
            quantity='$quantity',
            quptedprice='$quotedprice',        
             WHERE SN='$SN'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('Update successful!'); </script>";
        header("Location:../");
        exit();
    } else {
        die("Error updating record: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/addproduct.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Product</title>
</head>

<body>

    <form method="post" action="">
        <div id="addProduct" class="content-section">
            <h1>Update Order</h1>
            <label for="orderid">Order ID:</label>
            <input type="text" id="orderid" name="orderid" />

            <label for="cid">cid:</label>
            <input type="text" id="cid" name="suppliers" />

            <label for="suppliers">suppliers:</label>
            <input type="text" id="suppliers" name="suppliers" />

            <label for="ordernum">Order Number:</label>
            <input type="text" id="ordernum" name="ordernum" />

            <label for="orderdate">Order Date:</label>
            <input type="date" name="orderdate" />

            <label for="description">Description:</label>
            <input type="text" id="descriptions" name="descriptions" />

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" />

            <label for="quotedprice">Quoted Price:</label>
            <input type="text" id="quotedprice" name="quotedprice" />

            <input type="submit" name="Add" value="Add Order" />


        </div>
    </form>
</body>

</html>