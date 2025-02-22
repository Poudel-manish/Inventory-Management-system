<?php
include '../backend/bcustomer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/customer_list.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Customer List</title>
</head>

<body>
    <!-- Customer List Section -->
    <div id="customer" class="content-section">
        <h1>Customer</h1>
        <a href="customer.php" type="button"><i class="fa-regular fa-plus"></i> Add Customer</a>
        <div class="search">
            <input type="search" placeholder="Company name" onkeyup="myFun()" id="search">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Phone1</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../db/connect.php';
                $sql = "SELECT * FROM customer";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $company_name = $row['company_name'];
                        $email = $row['email'];
                        $address = $row['address'];
                        $phone = $row['phone'];
                        $phone1 = $row['phone1'];

                        echo '<tr>
                                <td>' . $first_name . '</td>
                                <td>' . $last_name . '</td>
                                <td>' . $company_name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $phone . '</td>
                                <td>' . $phone1 . '</td>
                                <td>
                                    <button class="btn btn-primary" style="background-color: green;">
                                        <a href="update.php?updateid=' . $first_name . '" class="text-light" style="text-decoration: none;">Update</a>
                                    </button>
                                    <button class="btn btn-danger" style="background-color: red;">
                                        <a href="../delete/customerList_dlt.php?delete=' . $first_name . '" style="text-decoration: none;">Delete</a>
                                    </button>
                                </td>
                              </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- CDN of Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DhYzUGYCr27/Jpc4Z5PYF/1pX6jI" crossorigin="anonymous"></script>
    <script src="../javascript/productList.js"></script>
</body>

</html>
