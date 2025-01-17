<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/sealList.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <title>sales List</title>



</head>

<body>
    <!-- Product List Section -->
    <div id="productList" class="content-section">
        <h1>sales List</h1>
        <a href="sales.php" type="button"><i class="fa-regular fa-plus"></i>
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
                    <th>Bill. NO</th>
                    <th>Company id</th>
                    <th>product id</th>
                    <th>Product Name</th>

                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Price</th>

                    <th>Operation </th>
                </tr>
            </thead>
            <tbody>
                <?php

                include '../db/connect.php';
                $sql = "SELECT * FROM sales";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $bill_id = $row['bill_id'];
                        $company_id = $row['company_id'];
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        // $SKU = $row['sku'];
                        $quantity_sold = $row['quantity_sold'];
                        $sale_date = $row['sale_date'];
                        $total_price = $row['total_price'];



                        echo '<tr>
                                <td>' . $bill_id . '</td>
                                <td>' . $company_id . '</td>
                                <td>' . $product_id . '</td>
                              <td>' . $product_name . '</td>
                                <td>' . $quantity_sold . '</td>
                                <td>' . $sale_date . '</td>
                                <td>' . $total_price . '</td>
                             
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