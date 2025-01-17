<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../style/productlist.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <title>Purchase List</title>



</head>

<body>
    <!-- Product List Section -->
    <div id="orderList" class="content-section">
        <h1>Purchase List</h1>
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
                    <th>Order Id</th>
                    <th>Company Id</th>
                    <th>Order Num</th>
                    <th>suppliers</th>
                    <th>Order date</th>
                    <th>Descriptions</th>
                    <th>Quantity</th>
                    <th>Quotedprice</th>
                     <th>Operation </th> 
                </tr>
            </thead>
            <tbody>
                <?php

                include '../db/connect.php';
                $sql = "SELECT * FROM `orders`";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $order_id = $row['order_id'];
                        // $company_id = $row['company_id'];
                        $order_number = $row['order_number'];
                        $supplier = $row['supplier'];
                        $order_date = $row['order_date'];
                        $description = $row['description'];
                        $quantity = $row['quantity'];
                        $total_price = $row['total_price'];

                        echo '<tr>
                                <td>' . $order_id . '</td>
                                <td>' . $Company_id . '</td>
                                <td>' . $order_number . '</td>
                                <td>' . $supplier . '</td>
                                <td>' . $order_date . '</td>
                                <td>' . $description . '</td>
                                <td>' . $quantity . '</td>
                                <td>' . $total_price  . '</td>
                               
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