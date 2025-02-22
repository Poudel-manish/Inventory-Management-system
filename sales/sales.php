<?php
include "../backend/b_sells.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/sales.css" />


</head>

<body>
  <form method="post" action="../backend/b_sells.php">
    <div id="sells" class="content-section">
      <h1>sells Product</h1>
 
   

      

      <label for="productname">Product Name:</label>
      <input type="text" id="product_name" name="product_name" />



      <label for="quantity">Quantity:</label>
      <input type="text" id="quantity_sold" name="quantity_sold" />


      <label for="Date">Date:</label>
      <input type="date" id="sale_date" name="sale_date" />

      <label for="productPrice">Total Price:</label>
      <input type="text" id="Price" name="total_price" />

      <input type="submit" name="submit" value="submit" />


    </div>
  </form>
</body>

</html>