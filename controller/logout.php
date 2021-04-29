<?php 
    session_start();
    unset($_SESSION['flag']);
    $_SESSION['flag']=false;
    unset($_SESSION['id']);
    unset($_SESSION['type']);
    unset($_SESSION['username']);
    unset($_SESSION['fullname']);
    unset($_SESSION['email']);
    unset($_SESSION['dateOfBirth']);
    unset($_SESSION['phone']);
    unset($_SESSION['regdate']);
    unset($_SESSION['image1']);
    session_destroy();

    header('location: ../view/login.php');
?>