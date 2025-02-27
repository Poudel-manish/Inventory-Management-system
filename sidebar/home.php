<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Professional Sidebar</title>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            min-height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
        }

        /* Sidebar Styling */
        aside {
            width: 250px;
            background-color: #18d8ae;
            /* Updated background color */
            color: #fff;
            height: 100vh;
            position: sticky;
            top: 0;
            transition: width 0.3s ease;
        }

        aside .top {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #14b895;
            /* Darker shade for the top section */
        }

        aside .logo h2 {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .sidebar {
            padding: 20px 0;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #e0f7fa;
            /* Light text color for better contrast */
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #14b895;
            /* Darker shade on hover */
            color: #fff;
        }

        .sidebar a.active {
            background-color: #14b895;
            /* Darker shade for active link */
            color: #fff;
        }

        .sidebar a .material-icons-outlined {
            margin-right: 10px;
            font-size: 20px;
        }

        .sidebar a h3 {
            font-size: 16px;
            font-weight: 500;
            margin: 0;
        }

        /* Dropdown Styling */
        .dropdown-container {
            position: relative;
        }

        .dropdown-container>a {
            cursor: pointer;
        }

        .dropdown-container .dropdown {
            display: none;
            padding-left: 30px;
            background-color: #14b895;
            /* Darker shade for dropdown */
        }

        .dropdown-container.active .dropdown {
            display: block;
        }

        .dropdown-container .dropdown li {
            list-style: none;
        }

        .dropdown-container .dropdown li a {
            padding: 10px 20px;
            color: #e0f7fa;
            /* Light text color for dropdown items */
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }

        .dropdown-container .dropdown li a:hover {
            background-color: #11997d;
            /* Even darker shade on hover */
            color: #fff;
        }

        /* Main Content Styling */
        main {
            flex: 1;
            padding: 40px;
            /* Increased padding for more margin */
            background-color: #fff;
            margin-left: 20px;
            /* Added margin between sidebar and content */
        }

        main h1 {
            font-size: 24px;
            color: #2c3e50;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            aside {
                width: 80px;
            }

            aside .logo h2 {
                display: none;
            }

            .sidebar a h3 {
                display: none;
            }

            .sidebar a .material-icons-outlined {
                margin-right: 0;
            }

            .dropdown-container .dropdown {
                position: absolute;
                left: 80px;
                top: 0;
                width: 200px;
                background-color: #14b895;
                /* Darker shade for dropdown */
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
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
                <a href="../dashbord/dashbord.php" class="active" id="dashboardLink">
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
                        <li><a href="../purchase/purchase_return_list.php">Purchase Return List</a></li>
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
                // Close all other dropdowns
                dropdownContainers.forEach(otherContainer => {
                    if (otherContainer !== container) {
                        otherContainer.classList.remove('active');
                    }
                });

                // Toggle the clicked dropdown
                container.classList.toggle('active');
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (event) => {
            if (!event.target.closest('.dropdown-container')) {
                dropdownContainers.forEach(container => {
                    container.classList.remove('active');
                });
            }
        });

        // Set the default active link to Dashboard
        document.addEventListener("DOMContentLoaded", function() {
            const dashboardLink = document.getElementById("dashboardLink");
            dashboardLink.classList.add("active");

            // Ensure dropdowns are closed
            dropdownContainers.forEach(container => {
                container.classList.remove('active');
            });
        });
    </script>
</body>

</html>