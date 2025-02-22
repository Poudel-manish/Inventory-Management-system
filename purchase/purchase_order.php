<?php
include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/addOrder.css">
    <title>Purchase order</title>
</head>

<body>
    <!-- Form to add a new order -->
    <form method="post" action="../backend/beorder.php">
        <div id="add_order" class="content-section">
            <h1>Purchase order</h1>

            <!-- <label for="orderid">Order ID:</label>
            <input type="text" id="order_id" name="order_id" /> -->

            <!-- <label for="cid">Company Id:</label>
            <input type="text" id="company_id" name="supplier" /> -->


          
            <label for="suppliers">suppliers:</label>
            <input type="text" id="supplier" name="supplier" />



            <label for="orderdate">Order Date:</label>
            <input type="date" name="order_date" />

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" />

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" />

            <label for="quotedprice">Quoted Price:</label>
            <input type="text" id="total_price" name="total_price" />

            <input type="submit" name="Add" value="Add Order" />
        </div>
    </form>
</body>

</html>
</body>

</html>