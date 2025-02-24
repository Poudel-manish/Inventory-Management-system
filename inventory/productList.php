<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/productlist.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <title>Product List</title>



</head>

<body>
    <!-- Product List Section -->
    <div id="productList" class="content-section">
        <h1>Product List</h1>
        <a href="addProduct.php" type="button"><i class="fa-regular fa-plus"></i>
            Add products</a>
        <div class="search">
            <input type="search" placeholder=" products name" onkeyup="myFun()" id="search">

          
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <?php
                    session_start();
                    if ($_SESSION['role'] == "manager") {

                        echo '<th>Company id</th>';
                    }

                    ?>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                     <th>Total Price</th> 
                    <th>Category</th>
                    <th>Mfg.Date</th>
                    <th>Exp.Date</th>
                    <th>user_id</th>
                    <th>Operation </th>
                </tr>
            </thead>
            <tbody>
                <?php

                include '../db/connect.php';
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $product_id = $row['product_id'];
                        if ($_SESSION['role'] == "manager") {

                            $company_id = $row["company_id"];
                        }

                        $product_name = $row['product_name'];

                        $quantity = $row['quantity'];
                        $price = $row['price'];
                        $total_price = $row['total_price'];
                        $category = $row['category'];
                        $manufacture_date = $row['manufacture_date'];
                        $expiry_date = $row['expiry_date'];
                        $user_id = $row['user_id'];

                        echo '<tr>
                                <td>' . $product_id . '</td>';

                        if ($_SESSION['role'] == "manager") {
                            echo '<td>' . $company_id . '</td>';
                        }
                        echo '<td>' . $product_name . '</td>
                              
                                <td>' . $quantity . '</td>
                                <td>' . $price . '</td>
                              <td>' . $total_price . '</td>
                                <td>' . $category . '</td>
                                <td>' . $manufacture_date . '</td>
                                <td>' . $expiry_date . '</td>
                                 <td>' . $user_id . '</td>
                                 <td>
                                <button class="btn btn-primary" style="
                    background-color: green;">
    <a href="inventory_update/product_list_update.php?updateid=' . $product_id . '" class="text-light" style="text-decoration: none;">Update</a>
                <button class="btn btn-danger" style="
                    background-color: red;">
                    <a href="productDeleteDB.php?delete=' . $product_id . '" style="text-decoration: none;">Delete</a>
                                </button>


                                </td>           
                              </tr>';
                    }
                }
                ?>
            </tbody>


        </table>
    </div>
    <!-- cdn of bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DhYzUGYCr27/Jpc4Z5PYF/1pX6jI" crossorigin="anonymous"></script>
    <script src="../javascript/productList.js"></script>
</body>

</html>