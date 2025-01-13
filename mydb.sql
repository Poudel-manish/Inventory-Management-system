-- Simplified SQL File for New Database

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Create new database and use it
CREATE DATABASE IF NOT EXISTS `ims`;
USE `ims`;

-- Table for companies
CREATE TABLE `companies` (
  `company_id` INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each company
  `company_name` VARCHAR(255) NOT NULL, -- Name of the company
  `role` ENUM('admin') NOT NULL, -- Role of the company (e.g., admin)
  `email` VARCHAR(100) NOT NULL UNIQUE, -- Unique email for the company
  `phone` VARCHAR(15) NOT NULL UNIQUE, -- Unique phone number
  `address` TEXT NOT NULL, -- Company address
  `password` VARCHAR(250) NOT NULL -- Password for authentication
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for products
CREATE TABLE `products` (
  `product_id` INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each product
  `company_id` INT NOT NULL, -- ID of the company owning the product
  `product_name` VARCHAR(100) NOT NULL, -- Name of the product
  `sku` VARCHAR(50) NOT NULL UNIQUE, -- Stock Keeping Unit (unique identifier)
  `quantity` INT NOT NULL, -- Available stock quantity
  `price` DECIMAL(10,2) NOT NULL, -- Price per unit
  `category` VARCHAR(50), -- Category of the product
  `manufacture_date` DATE, -- Manufacturing date
  `expiry_date` DATE, -- Expiry date
  FOREIGN KEY (`company_id`) REFERENCES `companies`(`company_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for inventory adjustments
CREATE TABLE `inventory_adjustments` (
  `adjustment_id` INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for adjustment
  `company_id` INT NOT NULL, -- Company performing the adjustment
  `product_id` INT NOT NULL, -- Product being adjusted
  `adjustment_type` ENUM('increase', 'decrease') NOT NULL, -- Type of adjustment
  `quantity_adjusted` INT NOT NULL, -- Quantity adjusted
  `adjustment_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Date of adjustment
  FOREIGN KEY (`company_id`) REFERENCES `companies`(`company_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for orders
CREATE TABLE `orders` (
  `order_id` INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each order
  `company_id` INT NOT NULL, -- ID of the company placing the order
  `order_number` VARCHAR(50) NOT NULL, -- Order number
  `supplier` VARCHAR(100) NOT NULL, -- Supplier name
  `order_date` DATE NOT NULL, -- Date of the order
  `description` TEXT, -- Description of the order
  `quantity` INT NOT NULL, -- Total quantity ordered
  `total_price` DECIMAL(10,2) NOT NULL, -- Total price of the order
  FOREIGN KEY (`company_id`) REFERENCES `companies`(`company_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for sales
CREATE TABLE `sales` (
  `sale_id` INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each sale
  `company_id` INT NOT NULL, -- Company making the sale
  `product_id` INT NOT NULL, -- Product being sold
  `quantity_sold` INT NOT NULL, -- Quantity sold
  `sale_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Date of sale
  `total_price` DECIMAL(10,2) NOT NULL, -- Total sale price
  FOREIGN KEY (`company_id`) REFERENCES `companies`(`company_id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table for users
CREATE TABLE `users` (
  `user_id` INT AUTO_INCREMENT PRIMARY KEY, -- Unique ID for each user
  `username` VARCHAR(100) NOT NULL UNIQUE, -- Username for login
  `password` VARCHAR(255) NOT NULL, -- Password for authentication
  `role` ENUM('admin', 'manager', 'employee') NOT NULL, -- Role of the user
  `company_id` INT NOT NULL, -- Associated company
  `email` VARCHAR(100) NOT NULL UNIQUE, -- Unique email for the user
  `phone` VARCHAR(15) NOT NULL UNIQUE, -- Unique phone number
  FOREIGN KEY (`company_id`) REFERENCES `companies`(`company_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

-- Notes:
-- 1. Use this script to set up the database structure for the Inventory Management System (IMS).
-- 2. Ensure that appropriate indexing is applied where necessary for optimal query performance.
-- 3. Modify ENUM values or table structures based on specific project requirements.
