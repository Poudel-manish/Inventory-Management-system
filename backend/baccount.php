<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Company ID not set in session. Please log in again."); // Check if company_id exists in the session
}
include '../db/connect.php';

$company_id = $_SESSION['user_id'];

if (isset($_POST['signup'])) {
    // $company_id = $_POST['company_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; // Hash the password
    $role = $_POST['role'];





    // Insert into the users table
    $sql = "INSERT INTO users (company_id, username, email, phone, password, role)
                VALUES ('$company_id', '$username', '$email', '$phone', '$password', '$role')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Data was inserted');</script>";
        header("Location: ../user_auth/acc_list.php");
        exit; // Always use `exit` after a redirect to stop script execution.
    
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    echo "<script>alert('Invalid role selected');</script>";
}
?>