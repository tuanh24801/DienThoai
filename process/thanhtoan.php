<?php
session_start();
    require '../core/connection.php';
    $id_nguoidung = $_SESSION['nguoidung'];
    $xoa = "DELETE FROM giohang WHERE id_nguoidung = '$id_nguoidung'";
    $xoa1 = mysqli_query($conn,$xoa);
    header("location: ../view/giohang.php");
