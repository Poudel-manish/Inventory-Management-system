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
            <h1>Purchase Order</h1>

            <label for="suppliers">Suppliers:</label>
            <select id="supplier" name="supplier">
                <option value="" selected>Select a supplier</option>
                <?php
                // Fetch company names from the vendors table
                $sql = "SELECT company_name FROM vendors";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $company_name = $row['company_name'];
                        echo '<option value="' . $company_name . '">' . $company_name . '</option>';
                    }
                }
                ?>
            </select>

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