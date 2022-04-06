<?php 
    session_start();
    if(isset($_SESSION['nguoidung'])){
        unset($_SESSION['nguoidung']);
        header('Location: ../view/index.php');
    }else{
        header('Location: ../view/index.php');
    }
?>