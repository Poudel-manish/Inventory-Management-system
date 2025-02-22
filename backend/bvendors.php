
<?php
session_start();
require("../db/connect.php");


$sql = "SELECT * FROM `vendors`";
$result = mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {
  
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $phone1 = $_POST['phone1'];
    $user_id = $_SESSION['user_id'];



    // Updated SQL query to match database column names
    $sql = "INSERT INTO `vendors` (first_name,last_name,company_name,email, address, phone,phone1, user_id)
VALUES ('$first_name','$last_name','$company_name','$email' ,'$address', '$phone','$phone1', $user_id )";


    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        echo " ";
        header('Location: ../purchase/vendors_list.php');
        exit;
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
