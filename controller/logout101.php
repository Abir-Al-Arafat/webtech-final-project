<?php
session_start();
session_destroy();
// setcookie ("userid","",time() - (86400), "/");
// setcookie ("password","",time() - (86400), "/");
header("Location: ../view/loginV.php");
?>