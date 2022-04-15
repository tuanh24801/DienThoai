<?php 
    session_start();
    require '../core/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop dien thoai</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="logo">
        <img src="IMAGES/LOGO.png" alt="">
    </div>
    <div class="menu">
        <ul>
            <li><a href="../index.php">Trang chủ</a></li>
            <li><a href="">Điện Thoại</a></li>
            <li><a href="">Máy Tính</a></li>
            <li><a href="">Máy Tính Bảng</a></li>
            <?php 
                if(!isset($_SESSION['nguoidung'])){
                ?>
                    <li><a href="dangnhap.php">Đăng Nhập </a></li>
                    <li><a href="giohang.php">Giỏ Hàng</a></li>
                <?php
                }else{
                    $id = $_SESSION['nguoidung'];
                    $sql = "SELECT tentaikhoan FROM taikhoan WHERE id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
                    <li><a href="dangnhap.php"><?php echo $row['tentaikhoan']?> </a></li>
                    <li><a href="giohang.php">Giỏ Hàng</a></li>
                    <li><a href="../process/dangxuat.php">Đăng xuất </a></li>
                <?php
                }
            ?>
            
            
        </ul>
        <ul>
            <form action="">
                <input type="text" required class="nhap">
                <input type="submit" value="Tìm Kiếm" class="timkiem">
            </form>
        </ul>
    </div>
    <div class="banner">
        <img src="IMAGES/IMG (2).jpg" alt="">
    </div>