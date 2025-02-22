<?php

session_reset();


session_destroy();
header("Location:../auth/login.php");

exit();
?>