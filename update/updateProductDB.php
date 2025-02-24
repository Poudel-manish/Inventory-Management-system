<?php
include '../db/connect.php';

if (isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $manufacture_date = $_POST['manufacture_date'];
    $expiry_date = $_POST['expiry_date'];

    $total_price = $quantity * $price;

    $sql = "UPDATE products SET 
            product_name = '$product_name', 
            quantity = '$quantity', 
            price = '$price', 
            total_price = '$total_price', 
            category = '$category', 
            manufacture_date = '$manufacture_date', 
            expiry_date = '$expiry_date' 
            WHERE product_id = '$product_id'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to the product list page after successful update
        header('Location: ../productList.php');
        exit();
    } else {
        // Display error if the query fails
        echo "Error: " . mysqli_error($conn);
    }
}

// Fetch the product details for pre-filling the form
if (isset($_GET['updateid'])) {
    $product_id = $_GET['updateid'];
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Product not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../style/productlist.css"> 
</head>

<body>
    <div class="content-section">
        <h1>Update Product</h1>
        <form method="POST" action="">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">

            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>" required>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="<?php echo $row['quantity']; ?>" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="<?php echo $row['price']; ?>" required>

            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="Man fashion" <?php echo ($row['category'] == 'Man fashion') ? 'selected' : ''; ?>>Man's fashion</option>
                <option value="Womens fashion" <?php echo ($row['category'] == 'Womens fashion') ? 'selected' : ''; ?>>Women's fashion</option>
                <option value="Sports & Outdor" <?php echo ($row['category'] == 'Sports & Outdor') ? 'selected' : ''; ?>>Sports & Outdor</option>
                <option value="Electronic Accessories" <?php echo ($row['category'] == 'Electronic Accessories') ? 'selected' : ''; ?>>Electronic Accessories</option>
                <option value="Motors" <?php echo ($row['category'] == 'Motors') ? 'selected' : ''; ?>>Motors</option>
                <option value="Home & Lifestyle" <?php echo ($row['category'] == 'Home & Lifestyle') ? 'selected' : ''; ?>>Home & Lifestyle</option>
            </select>

            <label for="manufacture_date">Manufacture Date:</label>
            <input type="date" id="manufacture_date" name="manufacture_date" value="<?php echo $row['manufacture_date']; ?>" required>

            <label for="expiry_date">Expiry Date:</label>
            <input type="date" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']; ?>" required>

            <button type="submit" name="submit">Update Product</button>
        </form>
    </div>
</body>

</html>