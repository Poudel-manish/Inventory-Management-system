<?php
// require($_SERVER['DOCUMENT_ROOT'] . "/stock/db/database.php");
include '../db/connect.php';

// Check if the 'update' parameter is set in the URL and is not empty
if (!isset($_GET['update']) || empty($_GET['update'])) {
  die("Error: Update parameter is missing or invalid."); // Added error handling for missing or invalid 'update' parameter
}

$product_id = $_GET['update']; // Get the product ID from the URL

// Fetch existing product details from the database
$sql = "SELECT * FROM products WHERE product_id = '$product_id'";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
  die("Error: Product not found."); // Added error handling for product not found
}

$row = mysqli_fetch_assoc($result); // Fetch the product details into an associative array

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the updated product details from the form
  $product_id = $_POST['product_id'];
  $company_id = $_POST['company_id'];
  $product_name = $_POST['product_name'];
  $sku = $_POST['sku'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $manufacture_date = $_POST['manufacture_date'];
  $expiry_date = $_POST['expiry_date'];

  // Update the product details in the database
  $sql = "UPDATE products SET 
            company_id = '$company_id',
            product_name = '$product_name',
            sku = '$sku',
            quantity = '$quantity',
            price = '$price',
            category = '$category',
            manufacture_date = '$manufacture_date',
            expiry_date = '$expiry_date'
          WHERE product_id = '$product_id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('Update successful!');</script>"; // Added success message
    header("Location: ../productList.php"); // Redirect to productList.php after successful update
    exit();
  } else {
    die("Error updating record: " . mysqli_error($conn)); // Added error handling for update failure
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
  <title>Update Product</title>
</head>

<body>

  <form method="post" action="">
    <div id="addProduct" class="content-section">
      <h1>Update Product</h1>
      <label for="product_id">Product ID:</label>
      <input type="text" id="product_id" name="product_id" value="<?php echo $row['product_id']; ?>" readonly />

      <label for="company_id">Company ID:</label>
      <input type="text" id="company_id" name="company_id" value="<?php echo $row['company_id']; ?>" />

      <label for="product_name">Product Name:</label>
      <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>" />

      <label for="sku">SKU:</label>
      <input type="text" name="sku" placeholder="SKU" value="<?php echo $row['sku']; ?>" />

      <label for="quantity">Quantity:</label>
      <input type="text" id="QTY" name="quantity" value="<?php echo $row['quantity']; ?>" />

      <label for="price">Product Price:</label>
      <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>" />

      <label for="category">Category:</label>
      <select id="category" name="category">
        <option value="default" selected>Select a category</option>
        <option value="Man's fashion" <?php if ($row['category'] == "Man's fashion") echo 'selected'; ?>>Man's fashion</option>
        <option value="Women's fashion" <?php if ($row['category'] == "Women's fashion") echo 'selected'; ?>>Women's fashion</option>
        <option value="Sports & Outdoor" <?php if ($row['category'] == "Sports & Outdoor") echo 'selected'; ?>>Sports & Outdoor</option>
        <option value="Electronic Accessories" <?php if ($row['category'] == "Electronic Accessories") echo 'selected'; ?>>Electronic Accessories</option>
        <option value="Motors" <?php if ($row['category'] == "Motors") echo 'selected'; ?>>Motors</option>
        <option value="Home & Lifestyle" <?php if ($row['category'] == "Home & Lifestyle") echo 'selected'; ?>>Home & Lifestyle</option>
      </select>

      <label for="manufacture_date">Manufacture Date:</label>
      <input type="date" id="manufacture_date" name="manufacture_date" value="<?php echo $row['manufacture_date']; ?>" />

      <label for="expiry_date">Expiry Date:</label>
      <input type="date" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']; ?>" />

      <input type="submit" name="submit" value="Update" id="update" />
    </div>
  </form>
</body>

</html>