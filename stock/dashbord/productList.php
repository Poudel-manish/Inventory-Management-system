<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/product.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <title>Product List</title>



</head>

<body>
    <!-- Product List Section -->
    <div id="productList" class="content-section">
        <h1>Product List</h1>
        <a href="addProduct.php" type="button"><i class="fa-regular fa-plus"></i>
            Create New</a>
        <div class="search">
            <input type="search" placeholder=" Search" onkeyup="myFun()" id="search">

            <!-- <button class="print-button" onclick="window.print()">
                <i class="fas fa-print"></i> 
            </button> -->
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>P ID</th>
                    <th>SKU</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Manu. Date</th>
                    <th>Exp. Date</th>
                    <th>Operation </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // require($_SERVER['DOCUMENT_ROOT'] . "../db/database");
                include '../db/database.php';
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $productname = $row['productname'];
                        $productid = $row['productid'];
                        $SKU = $row['SKU'];
                        $quantity = $row['quantity'];
                        $productPrice = $row['productPrice'];
                        $category = $row['category'];
                        $manufactureDate = $row['manufactureDate'];
                        $expiryDate = $row['expiryDate'];

                        echo '<tr>
                                <td>' . $productname . '</td>
                                <td>' . $productid . '</td>
                                <td>' . $SKU . '</td>
                                <td>' . $quantity . '</td>
                                <td>' . $productPrice . '</td>
                                <td>' . $category . '</td>
                                <td>' . $manufactureDate . '</td>
                                <td>' . $expiryDate . '</td>
                                 <td>
                                <button class="btn btn-primary" style="
                    background-color: green;">
                    <a href="update.php?updateid=<?php echo $productid; ?>" class="text-light" style="text-decoration: none;">Update</a>
                </button>
                <button class="btn btn-danger" style="
                    background-color: red;">
                    <a href="delete.php?delete=<?php echo $productid; ?>" style="text-decoration: none;">Delete</a>
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