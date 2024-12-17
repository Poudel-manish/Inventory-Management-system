<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/product.css">
    <link rel="stylesheet" href="../style/orderList.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <title>Order List</title>



</head>

<body>
    <!-- Product List Section -->
    <div id="orderList" class="content-section">
        <h1>Order List</h1>
        <a href="addorder.php" type="button"> <i class=" fa-regular fa-plus"></i>
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
                    <th>SN</th>
                    <th>suppliers</th>
                    <th>Order Num</th>
                    <th>Order date</th>
                    <th>Descriptions</th>
                    <th>Quantity</th>
                    <th>Quotedprice</th>
                    <th>Operation </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // require($_SERVER['DOCUMENT_ROOT'] . "../db/database");
                include '../db/database.php';
                $sql = "SELECT * FROM `order`";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $SN = $row['SN'];
                        $suppliers = $row['suppliers'];
                        $ordernum = $row['ordernum'];
                        $orderdate = $row['orderdate'];
                        $descriptions = $row['descriptions'];
                        $quantity = $row['quantity'];
                        $quotedprice = $row['quotedprice'];

                        echo '<tr>
                                <td>' . $SN . '</td>
                                <td>' . $suppliers . '</td>
                                <td>' . $ordernum . '</td>
                                <td>' . $orderdate . '</td>
                                <td>' . $descriptions . '</td>
                                <td>' . $quantity . '</td>
                                <td>' . $quotedprice . '</td>
                               
                             <td>
                                <button class="btn btn-primary" style="
                              background-color: green;">
                            <a href="updateOrder.php?orderid=<?php echo $productid; ?>" class="text-light" style="text-decoration: none;">Update</a>
                             </button>
                                <button id="orderButton" class="order-button">Pending</button>



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
    <script src="../javascript/orderList.js"></script>
</body>

</html>