<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/productlist.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <title>Purchase Return List</title>
</head>

<body>
    <!-- Purchase Return List Section -->
    <div id="productList" class="content-section">
        <h1>Purchase Return List</h1>
        <a href="addProduct.php" type="button"><i class="fa-regular fa-plus"></i>
            Add Purchase Return</a>
        <div class="search">
            <input type="search" placeholder="Search by Order ID" onkeyup="myFun()" id="search">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Number</th>
                    <th>Vendors</th>
                    <th>Order Date</th>
                    <th>Descriptions</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../db/connect.php';
                $sql = "SELECT * FROM purchase_return";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $orderid = $row['orderid'];
                        $ordernumber = $row['ordernumber'];
                        $suppiers = $row['suppiers'];
                        $orderdate = $row['orderdate'];
                        $descriptions = $row['descriptions'];
                        $quantity = $row['quantity'];
                        $Amount = $row['Amount'];

                        echo '<tr>
                                <td>' . $orderid . '</td>
                                <td>' . $ordernumber . '</td>
                                <td>' . $suppiers . '</td>
                                <td>' . $orderdate . '</td>
                                <td>' . $descriptions . '</td>
                                <td>' . $quantity . '</td>
                                <td>' . $Amount . '</td>
                                 <td>
                                <button class="btn btn-primary" style="background-color: green;">
                                    <a href="update.php?updateid=' . $orderid . '" class="text-light" style="text-decoration: none;">Update</a>
                                </button>
                                <button class="btn btn-danger" style="background-color: red;">
                                    <a href="delete.php?delete=' . $orderid . '" style="text-decoration: none;">Delete</a>
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