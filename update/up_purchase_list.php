<?php
include '../db/connect.php';

// Check if order ID is set
if (isset($_GET['orderid'])) {
    $order_id = $_GET['orderid'];

    // Fetch the existing order details
    $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $order = mysqli_fetch_assoc($result);

        // Update logic when form is submitted
        if (isset($_POST['update'])) {
            $supplier = $_POST['supplier'];
            $order_date = $_POST['order_date'];
            $description = $_POST['description'];
            $quantity = $_POST['quantity'];
            $total_price = $_POST['total_price'];

            $update_sql = "UPDATE orders SET supplier='$supplier', order_date='$order_date', description='$description', quantity='$quantity', total_price='$total_price' WHERE order_id='$order_id'";
            $update_result = mysqli_query($conn, $update_sql);

            if ($update_result) {
                echo "<script>alert('Order updated successfully!'); window.location.href='../purchase/purchase_list.php';</script>";
            } else {
                echo "Failed to update the order.";
            }
        }
    } else {
        echo "No order found with this ID.";
    }
} else {
    echo "Order ID not provided.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Order</title>
</head>

<body>
    <h2>Update Order</h2>
    <form method="POST">
        Supplier: <input type="text" name="supplier" value="<?php echo $order['supplier']; ?>"><br><br>
        Order Date: <input type="date" name="order_date" value="<?php echo $order['order_date']; ?>"><br><br>
        Description: <input type="text" name="description" value="<?php echo $order['description']; ?>"><br><br>
        Quantity: <input type="number" name="quantity" value="<?php echo $order['quantity']; ?>"><br><br>
        Total Price: <input type="text" name="total_price" value="<?php echo $order['total_price']; ?>"><br><br>
        <button type="submit" name="update">Update Order</button>
    </form>
</body>

</html>