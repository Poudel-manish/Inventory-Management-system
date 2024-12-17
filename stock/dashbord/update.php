<?php
// require($_SERVER['DOCUMENT_ROOT'] . "/stock/db/database.php");
include '../db/database.php';
$id = $_GET['updateid'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $productname = $_POST['productname'];
  $productid = $_POST['productid'];
  $SKU = $_POST['SKU'];
  $quantity = $_POST['quantity'];
  $productPrice = $_POST['productPrice'];
  $category = $_POST['category'];
  $manufactureDate = $_POST['manufactureDate'];
  $expiryDate = $_POST['expiryDate'];

  $sql = "UPDATE `crud` SET 
            productname='$productname',
            productid='$productid',
            SKU='$SKU',
            quantity='$quantity',
            productPrice='$productPrice',
            category='$category',
            manufactureDate='$manufactureDate',
            expiryDate='$expiryDate'
             WHERE productid='$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script> alert('Update successful!'); </script>";
    header("Location: product.php");
    exit();
  } else {
    die("Error updating record: " . mysqli_error($conn));
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
  <title>Add Product</title>
</head>

<body>
 
  <form method="post" action="">
    <div id="addProduct" class="content-section">
      <h1>Update Product</h1>
      <label for="productname">Product Name:</label>
      <input type="text" id="productName" name="productname" />

      <label for="productid">Product ID:</label>
      <input type="text" id="productid" name="productid" />


      <label for="sku">SKU:</label>
      <input type="text" name="SKU" placeholder="SKU">


      <label for="quantity">Quantity:</label>
      <input type="text" id="QTY" name="quantity" />

      <label for="productPrice">Product Price:</label>
      <input type="text" id="productPrice" name="productPrice" />



      <label for="category">Category:</label>
      <select id="category" name="category">
        <option value="default" selected>Select a category</option>
        <option value="Category A">Man's fashion</option>
        <option value="Category B">Women's fashion</option>
        <option value="Category C">Sports & Outdor</option>
        <option value="Category d">Electronic Accessories</option>
        <option value="Category e">Motors</option>
        <option value="Category f">Home & Lifestyle </option>
      </select>

      <label for="manufactureDate">Manufacture Date:</label>
      <input type="date" id="manufactureDate" name="manufactureDate" />

      <label for="expiryDate">Expiry Date:</label>
      <input type="date" id="expiryDate" name="expiryDate" />



      <input type="submit" name="submit" value="Update" />


    </div>
  </form>
</body>

</html>