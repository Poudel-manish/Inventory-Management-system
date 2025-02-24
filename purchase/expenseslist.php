<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/expenses_list.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <title>expensis</title>



</head>

<body>
    <!-- Product List Section -->
    <div id="expensisList" class="content-section">
        <h1>Expenses</h1>
        <a href="expenses.php" type="button"><i class="fa-regular fa-plus"></i>
            New Expenses</a>
        <div class="search">
            <input type="search" placeholder=" Search" onkeyup="myFun()" id="search">

            <!-- <button class="print-button" onclick="window.print()">
                <i class="fas fa-print"></i> 
            </button> -->
        </div>

        <table>
            <thead>
                <tr>
                   
                    <th>Date</th>
                    <th>Bill. NO</th>
                    <th>vendors</th>
                    <th>category</th>
                    <th>payment</th>
                    <th>account</th>
                    <th>amount</th>
                    <th>note</th>
                    <th>Operation </th>
                </tr>
            </thead>
            <tbody>
                <?php

                include '../db/connect.php';
                $sql = "SELECT * FROM expenses";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $date = $row['date'];
                        $bill_no = $row['bill_no'];
                        $vendors = $row['vendors'];
                        $category = $row['category'];
                        $payment = $row['payment'];
                        $account = $row['account'];
                        $amount = $row['amount'];
                        $note = $row['note'];



                        echo '<tr>
                                
                                 <td>' . $date . '</td>
                                <td>' . $bill_no . '</td>
                               
                                <td>' . $vendors . '</td>
                              <td>' . $category . '</td>
                               
                                <td>' . $payment . '</td>
                                <td>' . $account . '</td>
                                <td>' . $amount . '</td>
                                 <td>' . $note . '</td>
                             
                                 <td>
                 <button class="btn btn-primary" style="
                    background-color: green;">
<a href="../update/up_expenses.php?updateid=<?php echo $vendors; ?>" class="text-light" style="text-decoration: none;">Update</a>
                </button>
                <button class="btn btn-danger" style="
                    background-color: red;">
                    <a href="../delete/expenses_list_dlt.php?delete=' . $vendors. '" style="text-decoration: none;">Delete</a>
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