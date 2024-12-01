<?php
require($_SERVER['DOCUMENT_ROOT'] . "/stock/db/database.php");

if (isset($_GET['delete'])) {
   
    $productid = mysqli_real_escape_string($conn, $_GET['delete']);

 
   
    $sql = "DELETE FROM `crud` WHERE productid = '$productid'";

    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Deleted successfully";
      
    } else {
        die("Failed to delete the record from the database: " . mysqli_error($conn));
    }
}
?> 


