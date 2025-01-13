<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="stylesheet" href="../style/frontpage.css">
</head>

<body>
    <div class="container">
        <aside>
            <!-- aside strat from here -->
            <div class="top">
                <div class="logo">
                    <h2><span class="danger">IMS</span></h2>
                </div>

                <div class="close">
                    <span class="material-symbols-outlined"> close</span>
                </div>
            </div>
            <!-- end top -->
            <div class="sidebar">
                <a href="../dashbord/dashbord.php" class=" active">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="../dashbord/productList.php" class="active">
                    <span class="material-symbols-outlined"> inventory </span>
                    <h3>Product List</h3>
                </a>
                <a href="../dashbord/addproduct.php" class="active">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Add product</h3>
                </a>
                <a href="../dashbord/OrderList.php" class="active">
                    <span class="material-symbols-outlined"> list_alt </span>
                    <h3>Order</h3>
                </a>
                <a href="../dashbord/sells.php" class="active">
                    <span class="material-symbols-outlined">sell</span>
                    <h3>sells</h3>
                </a>

                <div class="dropdown-container">
                    <a href="../dashbord/admin/" class="active">
                        <span class="material-symbols-outlined">shield_person</span>
                        <h3>Admin</h3>
                    </a>
                    <ul class="dropdown">
                        <li><a href="../dashbord/admin/admin.php">Admin</a></li>
                        <li><a href="../dashbord/admin/account.php">Create Account</a></li>
                    </ul>
                </div>

                <a href="./logout/logout.php" class="active">
                    <span class="material-symbols-outlined"> logout </span>
                    <h3>Log out</h3>
                </a>


            </div>
        </aside>
        <!-- aside ended and top logo is ended -->




        <main>
            <h1> main</h1>
        </main>
        <!-- main ennd here -->
    </div>
    <script link="../javascript/frontpage.js"></script>
</body>

</html>