-- Create the database
CREATE DATABASE myshop;

-- Use the database
USE myshop;

-- Create the `crud` table
CREATE TABLE crud (
    productname VARCHAR(255) NOT NULL,
    productid INT AUTO_INCREMENT PRIMARY KEY,
    SKU VARCHAR(100) NOT NULL,
    quantity INT NOT NULL,
    productPrice DECIMAL(10, 2) NOT NULL,
    category VARCHAR(100),
    manufactureDate DATE,
    expiryDate DATE
);
-- Use the database
USE myshop;

-- Create the `orders` table
CREATE TABLE orders (
    suppliers VARCHAR(255) NOT NULL,
    ordernum INT AUTO_INCREMENT PRIMARY KEY,
    orderdate DATE NOT NULL,
    descriptions TEXT,
    quantity INT NOT NULL,
    quotedprice DECIMAL(10, 2) NOT NULL
);
-- Use the database
USE myshop;

-- Create the `sell` table
CREATE TABLE sell (
    productname VARCHAR(255) NOT NULL,
    productid INT NOT NULL,
    quantity INT NOT NULL,
    productPrice DECIMAL(10, 2) NOT NULL,
    category VARCHAR(100),
    manufactureDate DATE,
    expiryDate DATE
);
