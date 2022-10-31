<?php 

    session_start();
    unset($_SESSION['login']);
    // เพิ่ม
    unset($_SESSION['who']);
    unset($_SESSION['student']);
    // เพิ่ม
    header('location: ../index.php');

?>