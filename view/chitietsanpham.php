<?php 
    require './partice/header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $sql = "SELECT * FROM sanpham WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
    <div class="container">
        <div class="row p-5">
            <div class="col-5 me-5">
                <img src="./IMAGES/sanpham/<?php echo $row['anhsanpham']?>" alt="" style="width: 100%;">
            </div>
            <div class="col-6">
                <div class="row">
                    <h1><?php echo $row['ten']?></h1>
                    <h2><?php echo $row['gia']?>vnđ</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <?php 
                            if(isset($_SESSION['nguoidung'])){
                                ?>
                                    <a href="../process/themgiohang.php?id=<?php echo $id; ?>" class="btn btn-success">đặt mua</a>
                                <?php
                            }else{
                                ?>
                                    <a href="dangnhap.php" class="btn btn-success">đặt mua</a>
                                <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require './partice/footer.php';?>