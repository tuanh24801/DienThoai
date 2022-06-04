<?php 
    session_start();
    if(isset($_SESSION['textsearch'])){
        unset($_SESSION['textsearch']);
    }
    header('Location: ../../view/admin/trangchu.php');
?>