<?php

include '../../db/connect.php';


session_start(); // Start session to access session variables

if (!isset($_SESSION['user_id'])) {
    die("Company ID not set in session. Please log in again."); // Check if company_id exists in the session
}

$uid = $_SESSION['user_id'];
$product_id = $_GET['updateid'];

$sqlFetch = "SELECT `company_id` FROM `users` WHERE `user_id` = '$uid'";
$sqlResult = mysqli_query($conn, $sqlFetch);

if ($sqlResult) {
    $row = mysqli_fetch_assoc($sqlResult);
    $company_id = $row['company_id']; // 
} else {
    die("Error fetching company_id: " . mysqli_error($conn));
}

// $company_id = $_SESSION['user_id'];
$user_id = $_SESSION['user_id'];


if (isset($_GET['updateid'])) {
    $product_id = $_GET['updateid'];

    // Fetch specific product details
    $sql = "SELECT * FROM products WHERE product_id = '$product_id' AND company_id = '$company_id' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        die("Error: Product not found.");
    }
} else {
    die("Error: No product ID provided.");
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/addproduct.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Update Product</title>
</head>

<body>
    <div id="productList" class="content-section">
        <h1>Update Product</h1>
        <form action="updateProductDB.php" method="POST">
            <label for="productid">Product ID:</label>
            <input type="text" id="product_id" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>" readonly />

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" />

            <label for="quantity">Quantity:</label>
            <input type="text" id="QTY" name="quantity" value="<?php echo htmlspecialchars($product['quantity']); ?>" />

            <label for="productPrice">Product Price:</label>
            <input type="text" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" />

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="<?php echo htmlspecialchars($product['category']); ?>" />

            <label for="manufactureDate">Manufacture Date:</label>
            <input type="date" id="manufacture_date" name="manufacture_date" value="<?php echo htmlspecialchars($product['manufacture_date']); ?>" />

            <label for="expiryDate">Expiry Date:</label>
            <input type="date" id="expiry_date" name="expiry_date" value="<?php echo htmlspecialchars($product['expiry_date']); ?>" />

            <input type="submit" name="submit" value="Update Product" />
        </form>
    </div>
</body>

</html>