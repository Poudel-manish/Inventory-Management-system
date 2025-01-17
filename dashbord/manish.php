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
            <div class="top">
                <div class="logo">
                    <h2><span class="danger">IMS</span></h2>
                </div>
                <div class="close">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="../dashbord/dashbord.php" class="active">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="material-symbols-outlined">inventory</span>
                        <h3>Inventory</h3>
                        <span class="material-symbols-outlined dropdown-icon">expand_more</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../dashbord/addproduct.php">Add Product</a></li>
                        <li><a href="../dashbord/productList.php">Product List</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="material-symbols-outlined">drive_file_move_outline</span>
                        <h3>Purchase</h3>
                        <span class="material-symbols-outlined dropdown-icon">expand_more</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../dashbord/vendors_list.php">Vendors</a></li>
                        <li><a href="../dashbord/expenses.php">Expenses</a></li>
                        <li><a href="../dashbord/expenseslist.php">Expenses List</a></li>
                        <li><a href="../dashbord/purchase_order.php">Purchase Order</a></li>
                        <li><a href="../dashbord/purchase_return_list.php">Purchase Return</a></li>
                        <li><a href="../dashbord/vendors_credits.php">Vendors Credits</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="material-symbols-outlined">sell</span>
                        <h3>Sales</h3>
                        <span class="material-symbols-outlined dropdown-icon">expand_more</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../dashbord/customer.php">Customer</a></li>
                        <li><a href="../dashbord/sale_order.php">Sale Order</a></li>
                        <li><a href="../dashbord/sale_return.php">Sale Return</a></li>
                        <li><a href="../dashbord/credit_notes.php">Credit Notes</a></li>
                    </ul>
                </div>
                <a href="../dashbord/expenseslist.php" class="active">
                    <span class="material-symbols-outlined">sell</span>
                    <h3>Expenses</h3>
                </a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="material-symbols-outlined">shield_person</span>
                        <h3>Admin</h3>
                        <span class="material-symbols-outlined dropdown-icon">expand_more</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../dashbord/admin/admin.php">Admin</a></li>
                        <li><a href="../dashbord/admin/account.php">Create Account</a></li>
                        <li><a href="../dashbord/admin/staffList.php">Staff List</a></li>
                    </ul>
                </div>
                <a href="./logout/logout.php" class="active">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Log out</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>main</h1>
        </main>
    </div>
    <script src="../javascript/frontpage.js"></script>
</body>

</html>