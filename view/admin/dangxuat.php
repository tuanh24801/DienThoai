<?php 
    session_start();
    if(isset($_SESSION['adminlogin'])){
        unset($_SESSION['adminlogin']);
        header('Location: ../dangnhap.php?info=Bạn đã đăng xuất');
    }else{
        header('Location: ../dangnhap.php?info=Bạn đã đăng xuất');
    }
?>