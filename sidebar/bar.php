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
            position: sticky;
            top: 0;
            height: 100vh;
            transition: all 0.3s ease;
        }

        .top {
            background-color: #14b895;
            padding: 20px;
            text-align: center;
        }

        .logo h2 {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .sidebar {
            padding: 20px 0;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #e0f7fa;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #14b895;
            color: white;
        }

        .sidebar a .material-icons-outlined {
            margin-right: 10px;
        }

        .dropdown-container {
            padding: 0 20px;
            position: relative;
        }

        .dropdown-container a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #e0f7fa;
            font-size: 18px;
            cursor: pointer;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .dropdown-container a:hover {
            background-color: #14b895;
            color: white;
        }

        .dropdown-container .material-icons-outlined {
            margin-right: 10px;
        }

        .dropdown {
            display: none;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .dropdown li a {
            padding: 10px;
            color: #e0f7fa;
            text-decoration: none;
            font-size: 16px;
            display: block;
            transition: all 0.3s ease;
        }

        .dropdown li a:hover {
            background-color: #11997d;
        }

        .dropdown-container.active .dropdown {
            display: block;
        }

        /* Main Content Styling */
        main {
            background-color: white;
            padding: 40px;
            margin-left: 250px;
            flex-grow: 1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            aside {
                width: 80px;
            }

            .logo h2 {
                display: none;
            }

            .sidebar a h3,
            .dropdown-container a h3 {
                display: none;
            }

            .sidebar a,
            .dropdown-container a {
                justify-content: center;
            }

            .dropdown-container .material-icons-outlined {
                margin-right: 0;
            }

            .dropdown-container .material-icons-outlined {
                font-size: 24px;
            }

            .dropdown-container a {
                justify-content: space-between;
            }

            main {
                margin-left: 80px;
            }

            .dropdown-container.active .dropdown {
                right: 0;
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