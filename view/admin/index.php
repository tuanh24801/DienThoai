<?php
    session_start();
    if(isset($_SESSION['adminlogin'])){
        header('Location: trangchu.php');
    }else{
        header('Location: dangnhap.php');
    }
?>