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
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">số lượng</label>
                            <form action="../process/themgiohang.php" method="post">
                            <input type="number" min="1" step="1" class="form-control" name = "soluong" id="exampleFormControlInput1" value ="1">
                            <input type="hidden" value="<?php echo $id; ?>" name="id">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <?php 
                                if(isset($_SESSION['nguoidung'])){
                                    ?>
                                        <input type="submit" value="đặt mua" class="btn btn-success" name="btndatmua">
                                    <?php
                                }else{
                                    ?>
                                        <a href="dangnhap.php" class="btn btn-success">đặt mua</a>
                                    <?php
                                }
                            ?>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
<?php require './partice/footer.php';?>