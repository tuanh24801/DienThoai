<?php
    session_start();
    require '../core/connection.php';   
    $id_nguoidung = $_SESSION['nguoidung'];
    $update = "UPDATE giohang SET isBuy = '1' WHERE id_nguoidung = '$id_nguoidung'";
    $query = mysqli_query($conn,$update);
    header("location: ../view/giohang.php");
