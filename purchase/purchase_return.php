<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/addproduct.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Purchase Return</title>
</head>

<body>
    <form method="post" action="../backend/bpurchase_return.php">
        <div id="addProduct" class="content-section">
            <h1>Purchase Return</h1>

            <label for="orderid">Order ID:</label>
            <input type="text" id="orderid" name="orderid" />

         

            <label for="suppiers">Supplier:</label>
            <input type="text" id="suppiers" name="suppiers" />

            <label for="orderdate">Order Date:</label>
            <input type="date" id="orderdate" name="orderdate" />

            <label for="descriptions">Descriptions:</label>
            <input type="text" id="descriptions" name="descriptions" />

            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity" />

            <label for="Amount">Amount:</label>
            <input type="text" id="Amount" name="Amount" />

            <input type="submit" name="submit" value="Submit" />
        </div>
    </form>
</body>

</html>