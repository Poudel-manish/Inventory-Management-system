<?php
include '../db/connect.php';

$inventoryResult = mysqli_query($conn, "SELECT SUM(price) AS total_inventory_value FROM products");
$inventory = mysqli_fetch_assoc($inventoryResult)['total_inventory_value'];

$ordersResult = mysqli_query($conn, "SELECT SUM(total_price) AS total_orders_value FROM orders");
$orders = mysqli_fetch_assoc($ordersResult)['total_orders_value'];

$returnResult = mysqli_query($conn, "SELECT SUM(total_amount) AS total_purchase_return_value FROM purchase_return");
$purchase_return = mysqli_fetch_assoc($returnResult)['total_purchase_return_value'];

$salesResult = mysqli_query($conn, "SELECT SUM(total_price) AS total_sales_value FROM sales");
$sales = mysqli_fetch_assoc($salesResult)['total_sales_value'];

$customerResult = mysqli_query($conn, "SELECT COUNT(*) AS total_customers FROM customer");
$customer = mysqli_fetch_assoc($customerResult)['total_customers'];

$expensesResult = mysqli_query($conn, "SELECT SUM(amount) AS total_amount_value FROM expenses");
$expenses = mysqli_fetch_assoc($expensesResult)['total_amount_value'];

$vendorResult = mysqli_query($conn, "SELECT COUNT(*) AS total_vendors FROM vendors");
$vendors = mysqli_fetch_assoc($vendorResult)['total_vendors'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/dashbord.css">
</head>

<body>
    <div class="dashboard-container">
        <h1>Dashboard Overview</h1>
        <div class="dashboard-cards">
            <div class="card inventory">
                <h3>Total Inventory Value</h3>
                <p><?php echo number_format($inventory ?? 0, 2); ?></p>
            </div>
            <div class="card orders">
                <h3>Total Orders</h3>
                <p><?php echo number_format($orders ?? 0, 2); ?></p>
            </div>
            <div class="card purchase_return">
                <h3>Purchase Return</h3>
                <p><?php echo number_format($purchase_return ?? 0, 2); ?></p>
            </div>
            <div class="card sales">
                <h3>Total Sales</h3>
                <p><?php echo number_format($sales ?? 0, 2); ?></p>
            </div>
            <div class="card customer">
                <h3>Total Customers</h3>
                <p><?php echo number_format($customer ?? 0, 0); ?></p>
            </div>
            <div class="card vendor">
                <h3>Total Vendors</h3>
                <p><?php echo number_format($vendors ?? 0, 0); ?></p>
            </div>
            <div class="card exp">
                <h3>Total Expenses</h3>
                <p><?php echo number_format($expenses ?? 0, 2); ?></p>
            </div>
        </div>
    </div>
</body>

</html>