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
            background: #f4f7fc;
            color: #333;
        }

        .container {
            display: flex;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 96%;
            gap: 1.8rem;
            grid-template-columns: 16rem auto;
            margin: 0 auto;
            min-height: 90vh;
        }

        /* Sidebar Styles */
        aside {
            width: 260px;
            background: linear-gradient(135deg, #18d8ae, #1ecaa5);
            color: white;
            height: 100vh;
            padding: 30px 20px;
            border-radius: 10px 0 0 10px;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
        }

        .top .logo h2 {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .sidebar a,
        .dropdown-container>a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: #fff;
            padding: 12px 16px;
            font-size: 15px;
            margin: 4px 0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover,
        .dropdown-container>a:hover {
            background-color: #2d8c74;
        }

        .sidebar .material-icons-outlined {
            font-size: 26px;
        }

        /* Dropdown Menu Styles */
        .dropdown-container {
            margin-bottom: 10px;
        }

        .dropdown-container>a {
            cursor: pointer;
        }

        .dropdown-container .material-icons-outlined:last-child {
            transition: transform 0.3s ease;
        }

        .dropdown-container.active .material-icons-outlined:last-child {
            transform: rotate(180deg);
        }

        .dropdown {
            list-style: none;
            padding-left: 20px;
            margin: 0;
            display: none;
            background-color: #f4f7fc;
            border-left: 3px solid #18d8ae;
        }

        .dropdown-container.active .dropdown {
            display: block;
        }

        .dropdown li {
            margin: 3px 0;
        }

        .dropdown li a {
            display: block;
            text-decoration: none;
            color: #555;
            padding: 8px 18px;
            font-size: 14px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .dropdown li a:hover {
            background-color: #18d8ae;
            color: white;
        }

        /* Main Content */
        main {
            flex-grow: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.05);
            border-radius: 0 10px 10px 0;
        }

        main h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
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
                        <li><a href="../inventory/addProduct.php">Add Product</a></li>
                        <li><a href="../inventory/productList.php">Product List</a></li>
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
                        <li><a href="../purchase/vendors.php">Vendors</a></li>
                        <li><a href="../purchase/vendors_list.php">Vendors list</a></li>
                        <li><a href="../purchase/expenses.php">Expenses</a></li>
                        <li><a href="../purchase/expenseslist.php">Expenses List</a></li>
                        <li><a href="../purchase/purchase_order.php">Purchase Order</a></li>
                        <li><a href="../purchase/purchase_list.php">Purchase list</a></li>
                        <li><a href="../purchase/purchase_return.php">Purchase Return</a></li>
                        <li><a href="../purchase//purchase_return_list.php">Purchase Return List</a></li>
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
                        <li><a href="../sales/customer.php">Customer</a></li>
                        <li><a href="../sales/customer_list.php">Customer List</a></li>
                        <li><a href="../sales/sales.php">Sales</a></li>
                        <li><a href="../sales/saleslist.php">Sale List</a></li>
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
                        <li><a href="../user_auth/acc_list.php">Staff Account</a></li>
                        <li><a href="../user_auth/account.php">Add Staff</a></li>
                    </ul>
                </div>

                <a href="../logout/logout.php">
                    <span class="material-icons-outlined">logout</span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main>
            <h1>Welcome to the IMS Dashboard</h1>
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