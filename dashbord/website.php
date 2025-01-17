<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            width: 100vw;
            font-style: normal;
            height: 100vh;
            font-size: 0.88rem;
            user-select: none;
            overflow-x: hidden;
            background: #edeffd;
        }

        .container {
            display: flex;
            background-color: #fff;
            /* White background for entire container */

            display: grid;
            width: 96%;
            gap: 1.8rem;
            grid-template-columns: 16rem auto;
            margin: 0 auto;
        }

        /* Sidebar Styles */
        aside {
            width: 260px;
            background-color: #fff;
            /* White background for sidebar */
            border-right: 1px solid #ddd;
            height: 100vh;
            padding: 20px;
        }

        .sidebar a,
        .dropdown-container>a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: #333;
            padding: 12px 16px;
            /* Padding inside menu items */
            font-size: 14px;
            /* Primary text size */
            margin: 4px 0;
            /* Vertical spacing */
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover,
        .dropdown-container>a:hover {
            background-color: #F6F8FA;
            /* Light gray hover */
            color: #000;
            /* Black text on hover */
        }

        .sidebar .material-icons-outlined {
            font-size: 25px;
            /* Icon size */
            margin-right: 0px;
        }

        /* Dropdown Menu Styles */
        .dropdown-container {
            margin-bottom: 5px;
            /* Group spacing between sections */
        }

        .dropdown-container>a {
            cursor: pointer;
        }

        .dropdown-container .material-icons-outlined:last-child {
            transition: transform 0.3s ease;
        }

        .dropdown-container.active .material-icons-outlined:last-child {
            transform: rotate(360deg);
        }

        .dropdown {
            list-style: none;
            padding-left: 10px;
            margin: 0;
            display: none;
            background-color: #fff;
            /* White background for dropdown */
            border-left: 2px solid #18d8ae;
            margin-left: 50px;
        }

        .dropdown-container.active .dropdown {
            display: block;
        }

        .dropdown li {
            margin: 3px;
        }

        .dropdown li a {
            display: block;
            text-decoration: none;
            color: #555;
            padding: 5px 20px;
            /* Padding inside dropdown items */
            font-size: 14px;
            /* Secondary text size */
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .dropdown li a:hover {
            background-color: #18d8ae;
            color: #fff;
        }

        /* Main Content */
        main {
            flex-grow: 1;
            padding: 10px;
            background-color: #fff;
            /* White background for main content */
        }

        main h1 {
            font-size: 16px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>IMS</h2>
                </div>
            </div>

            <div class="sidebar">
                <a href="../dashbord/dashbord.php" class="active">
                    <span class="material-icons-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <!-- Inventory Dropdown -->
                <div class="dropdown-container">
                    <a>
                        <span class="material-icons-outlined">inventory</span>
                        <h3>Inventory</h3>
                        <span class="material-icons-outlined">expand_more</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="../dashbord/addproduct.php">Add Product</a></li>
                        <li><a href="../dashbord/productList.php">Product List</a></li>
                    </ul>
                </div>

                <!-- Purchase Dropdown -->
                <div class="dropdown-container">
                    <a>
                        <span class="material-icons-outlined">shopping_cart</span>
                        <h3>Purchase</h3>
                        <span class="material-icons-outlined">expand_more</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="../dashbord/vendors.php">Vendors</a></li>
                        <li><a href="../dashbord/expenses.php">Expenses</a></li>
                        <li><a href="../dashbord/expenseslist.php">Expenses List</a></li>
                        <li><a href="../dashbord/purchase_order.php">Purchase Order</a></li>
                        <li><a href="../dashbord/purchase_list.php">Purchase list</a></li>
                        <li><a href="../dashbord/purchase_return.php">Purchase Return</a></li>
                        <li><a href="../dashbord/purchase_return_list.php">Purchase Return List</a></li>
                        <!-- <li><a href="../dashbord/vendors_credits.php">Vendors Credits</a></li> -->
                    </ul>
                </div>

                <!-- Sales Dropdown -->
                <div class="dropdown-container">
                    <a>
                        <span class="material-icons-outlined">sell</span>
                        <h3>Sales</h3>
                        <span class="material-icons-outlined">expand_more</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="../dashbord/customer.php">Customer</a></li>
                        <li><a href="../dashbord/customer_list.php">Customer List</a></li>
                        <li><a href="../dashbord/sales.php">Sales</a></li>
                        <li><a href="../dashbord/saleslist.php">Sale List</a></li>

                    </ul>
                </div>

                <!-- Admin Dropdown -->
                <div class="dropdown-container">
                    <a>
                        <span class="material-icons-outlined">person</span>
                        <h3>Admin</h3>
                        <span class="material-icons-outlined">expand_more</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="../dashbord/admin/acc_list.php">Account</a></li>
                        <li><a href="../dashbord/admin/account.php">Create Account</a></li>
                        <li><a href="../dashbord/staffList.php">Staff List</a></li>
                    </ul>
                </div>

                <a href="./logout/logout.php">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main>
            <h1>Main Content</h1>
        </main>
    </div>

    <script>
        // Toggle Dropdown Menus
        const dropdownContainers = document.querySelectorAll('.dropdown-container');

        dropdownContainers.forEach(container => {
            container.addEventListener('click', () => {
                container.classList.toggle('active');
            });
        });
    </script>
</body>

</html>