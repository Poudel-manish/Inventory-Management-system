<?php
include '../../db/connect.php';

// Check if the update ID is set
if (isset($_GET['updateid'])) {
    $product_id = mysqli_real_escape_string($conn, $_GET['updateid']);

    // Fetch product details based on the provided ID
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $product_name = $row['product_name'];
        $quantity = $row['quantity'];
        $price = $row['price'];
        $total_price = $row['total_price'];
        $category = $row['category'];
        $manufacture_date = $row['manufacture_date'];
        $expiry_date = $row['expiry_date'];
    } else {
        die("Product not found.");
    }
}

// Update the product when the form is submitted
if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total_price = $quantity * $price;
    $category = $_POST['category'];
    $manufacture_date = $_POST['manufacture_date'];
    $expiry_date = $_POST['expiry_date'];

    // Update query
    $update_sql = "UPDATE products SET 
        product_name='$product_name', 
        quantity='$quantity', 
        price='$price', 
        total_price='$total_price', 
        category='$category', 
        manufacture_date='$manufacture_date', 
        expiry_date='$expiry_date' 
        WHERE product_id = '$product_id'";

    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        echo "<script>alert('Product Updated Successfully!'); window.location.href='../productList.php';</script>";
    } else {
        die("Update failed: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <link rel="stylesheet" href="../../style/up_product_list.css"> 
</head>

<body>
    <h1>Update Product</h1>
    <form method="POST">
        <label>Product Name:</label>
        <input type="text" name="product_name" value="<?php echo $product_name; ?>" required><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" value="<?php echo $quantity; ?>" required><br>

        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="<?php echo $price; ?>" required><br>

        <label>Category:</label>
        <input type="text" name="category" value="<?php echo $category; ?>" required><br>

        <label>Manufacture Date:</label>
        <input type="date" name="manufacture_date" value="<?php echo $manufacture_date; ?>" required><br>

        <label>Expiry Date:</label>
        <input type="date" name="expiry_date" value="<?php echo $expiry_date; ?>" required><br>

        <button type="submit" name="submit">Update Product</button>
    </form>
</body>

</html>