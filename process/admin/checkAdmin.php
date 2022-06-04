<?php 
    session_start();
    if(!isset($_SESSION['adminlogin'])){
        header('Location: ../../view/dangnhap.php?info=Bạn phải đăng nhập để thực hiện chức năng này');
    }

?>