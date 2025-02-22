<?php
include '../db/connect.php';



if (isset($_GET['delete'])) {
    
    $user_id = mysqli_real_escape_string($conn, $_GET['delete']);

    // Use the correct variable in the DELETE query
    $sql = "DELETE FROM `users` WHERE user_id = '$user_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
     
        header("Location: ../user_auth/acc_list.php");
        exit;
    } else {
       
        die("Failed to delete the record from the database: " . mysqli_error($conn));
    }
}
