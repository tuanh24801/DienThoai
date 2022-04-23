<?php 
    session_start();
    require '../core/connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dien thoai</title>
  </head>
  <body>
    <div class="container">
        <!-- start menu -->
        <nav class="navbar navbar-expand-lg menu-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="./IMAGES/LOGO.png" alt="" style = "width: 200px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  text-menu-top" aria-current="page" href="giohang.php"><b>Giỏ hàng</b> </a>
                    </li>
                            <?php 
                        if(!isset($_SESSION['nguoidung'])){
                        ?>
                            <li class="nav-item"><a class="nav-link  text-menu-top" href="dangnhap.php"><b>Đăng Nhập</b>  </a></li>
                            
                        <?php
                        }else{
                            $id = $_SESSION['nguoidung'];
                            $sql = "SELECT tentaikhoan FROM taikhoan WHERE id = '$id'";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_assoc($result);
                        ?>
                            <li class="nav-item"><a class="nav-link  text-menu-top" href="dangnhap.php"><b> <?php echo $row['tentaikhoan']?> </b></a></li>
                           
                            <li class="nav-item"><a class="nav-link  text-menu-top" href="../process/dangxuat.php"><b>Đăng xuất</b>  </a></li>
                        <?php
                        }
                    ?>
                </ul>
                <form class="d-flex formtimkiem">
                    <input class="form-control me-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" style = "width: 200px;"><b>tìm kiếm</b> </button>
                </form>
                </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./IMAGES/slide-1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./IMAGES/slide-2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./IMAGES/slide-3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- end menu -->