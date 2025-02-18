# Inventory Management System

## Project Description

The Inventory Management System (IMS) is a web-based application designed to help businesses track and manage their inventory. The system allows users to add, update, delete, and view products in the inventory. It also provides features like tracking product quantities, prices, categories, and expiry dates.

## Features

- **Product Management**: Add, update, delete, and view products.
- **Stock Tracking**: Monitor product quantities and availability.
- **Price Management**: Set and update product prices.
- **Category Management**: Assign products to different categories.
- **Expiry Tracking**: Keep track of product expiry dates.
- **Search and Filter**: Search products by name, category, or price.
- **User Authentication**: Secure login and registration for system access.
- **Responsive Design**: Optimized for desktop and mobile views.

## Technologies Used

- **Frontend**:
  - HTML
  - CSS
  - JavaScript
  - Bootstrap (Optional, for styling)

- **Backend**:
  - PHP
  - MySQL (Database)

-
## Setup

### Prerequisites

Before running the project, make sure you have the following installed:

- A web server (e.g., Apache)
- PHP
- MySQL
- A code editor (e.g., VS Code)

### Steps to Run Locally

1. Clone this repository:

    ```bash
    git clone https://github.com/Poudel-manish/Inventory-Management-systemcls
    ```

2. Navigate to the project directory:

    ```bash
    cd inventory-management-system
    ```

3. Import the database schema (`inventory_db.sql`) into your MySQL database.

4. Configure your database connection by editing the `config.php` file with your database credentials.

5. Start your local server and navigate to the project folder using your browser.

6. You should now be able to access the Inventory Management System on `localhost`.

## Usage

1. **Login**: Use the login page to authenticate and access the dashboard.
2. **Dashboard**: View and manage the list of products in the inventory.
3. **Product Management**: Add new products, update existing ones, or delete products.
4. **Stock Management**: View product quantities and update stock levels as needed.
5. **Reports**: Generate reports based on categories, stock levels, and expiry dates.

## Screenshots

![Dashboard](./assets/images/dashboard.png)
![Product Management](./assets/images/product_management.png)

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.


## Acknowledgements

- [Bootstrap](https://getbootstrap.com/) for the responsive design framework.
- [PHP](https://www.php.net/) for backend scripting.
- [MySQL](https://www.mysql.com/) for database management.
