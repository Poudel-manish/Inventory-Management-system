<?php

session_reset();


session_destroy();
header("Location:../../login/login.php");
exit();
?>