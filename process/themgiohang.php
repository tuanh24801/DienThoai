<?php 
    session_start();
    require '../core/connection.php';
    $id_nguoidung = $_SESSION['nguoidung'];
    if(isset($_GET['id'])){
        $id_sanpham =  $_GET['id'];
    }
    $sql_check = "SELECT * FROM giohang WHERE id_nguoidung = '$id_nguoidung'";
    $result_check = mysqli_query($conn,$sql_check);
    $row_check = mysqli_fetch_assoc($result_check);
    if($row_check['id_sanpham'] == $id_sanpham){
        $sql_update_sp = "UPDATE giohang SET soluong = (soluong + 1) WHERE id_nguoidung = '$id_nguoidung' AND id_sanpham = '$id_sanpham'";
        $result_update_sp = mysqli_query($conn,$sql_update_sp);
        if($result_update_sp){
            echo 'cập nhật số lượng thành công';
        }else{
            echo 'cập nhật thất bại';
        }
    }
    else{
        $sql = "INSERT INTO giohang(id_nguoidung, id_sanpham, soluong) VALUES ('$id_nguoidung', '$id_sanpham' , '1')";
        $result = mysqli_query($conn,$sql);
        if($result){
           header("Location: ../view/giohang.php");
        }else{
            echo 'thêm vào giỏ hàng thất bại';
        }
    }
    
    
?>