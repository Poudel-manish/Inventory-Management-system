<?php 
include '../../db/connect.php';
if (isset($_POST['submit'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    // $sku = $_POST['sku'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $manufacture_date = $_POST['manufacture_date'];
    $expiry_date = $_POST['expiry_date'];

    $sql = "UPDATE products SET 
            product_name = '$product_name', 
            -- sku = '$sku', 
            quantity = '$quantity', 
            price = '$price', 
            category = '$category', 
            manufacture_date = '$manufacture_date', 
            expiry_date = '$expiry_date' 
            WHERE product_id = '$product_id'";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../productList.php'); // Redirect to product list after successful update
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>



?>