<?php
$host = "localhost";
$user ="root";
$password = "";
$database ="myshop";
$conn = mysqli_connect($host,$user,$password,$database);
if(!$conn)
{
   die ("not connected to the databse");
}
else{
   echo "connect'successfullll";
}

?>
