
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/addOrder.css">
    <title>add order</title>
</head>
<body>
        <!-- Form to add a new order -->
    <form method="post" action="addorder.php">
        <div id="add_order" class="content-section">
            <h1>Add Order</h1>
            <label for="SN">SN:</label>
            <input type="text" id="SN" name="SN" required />

            <label for="ordernum">Order Number:</label>
            <input type="text" id="ordernum" name="ordernum" required />

            <label for="orderdate">Order Date:</label>
            <input type="date" name="orderdate" required />

            <label for="description">Description:</label>
            <input type="text" id="descriptions" name="descriptions" required />

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required />

            <label for="quotedprice">Quoted Price:</label>
            <input type="text" id="quotedprice" name="quotedprice" required />

            <input type="submit" name="Add" value="Add Order" />
        </div>
    </form>
</body>
</html>
</body>
</html>