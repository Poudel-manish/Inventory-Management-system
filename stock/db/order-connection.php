<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "myshop";
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Unable to connect";
} else {
    echo "Connection was successful";
}
?>
