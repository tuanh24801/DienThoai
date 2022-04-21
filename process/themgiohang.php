<?php 
    session_start();
    require '../core/connection.php';
    $id_nguoidung = $_SESSION['nguoidung'];
    if(isset($_POST['btndatmua'])){
        $id_sanpham =  $_POST['id'];
        $soluong = $_POST['soluong'];
    }
    $sql_check = "SELECT * FROM giohang WHERE id_nguoidung = '$id_nguoidung'";
    $result_check = mysqli_query($conn,$sql_check);
    while( $row_check = mysqli_fetch_assoc($result_check)){
        if($row_check['id_sanpham'] == $id_sanpham){
            $sql_update_sp = "UPDATE giohang SET soluong = soluong + '$soluong' WHERE id_nguoidung = '$id_nguoidung' AND id_sanpham = '$id_sanpham'";
            $result_update_sp = mysqli_query($conn,$sql_update_sp);
            if($result_update_sp){
                header("Location: ../view/giohang.php");
            }
            die();
        }
    }
    $sql = "INSERT INTO giohang(id_nguoidung, id_sanpham, soluong) VALUES ('$id_nguoidung', '$id_sanpham' , '$soluong')";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: ../view/giohang.php");
    }else{
        echo 'thêm vào giỏ hàng thất bại';
    }
    
    
    
?>