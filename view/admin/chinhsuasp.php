<?php 
    include './partice/header.php';
    if(isset($_GET['id'])){
        $id_sanpham = $_GET['id'];
    }
?>
    <div class="container p-2">
        <h4 class="mt-3 text-center">Chỉnh sửa sản phẩm</h4>
        <a href="trangchu.php" class = "mt-3 btn btn-outline-warning text-black">quay lại</a>
        <p class="mt-3 text-center">
            <?php 
                if(isset($_GET['inf'])){
                    echo $_GET['inf'];
                }

                $sanpham = "SELECT * FROM sanpham WHERE id = '$id_sanpham'";
                $querysp = mysqli_query($conn,$sanpham);
                $row = mysqli_fetch_assoc($querysp);
            ?>
        </p>
        <form action="../../process/admin/chinhsuasanpham.php" class="mt-5" method = "post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name = "ten" value = "<?php echo $row['ten'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Giá </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name = "gia" value = "<?php echo $row['gia'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Màu </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name = "mau" value = "<?php echo $row['mau'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">số lượng </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name = "soluong" value = "<?php echo $row['soluong'];?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Hiển thị </label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name = "isShow">
                        <?php 
                            if($row['isShow'] == '1'){
                                ?>
                                    <option value="1">Hiển thị sản phẩm</option>
                                    <option value="0">Ẩn sản phẩm</option>
                                <?php 
                            }else{
                                ?>
                                    <option value="0">Ẩn sản phẩm</option>
                                    <option value="1">Hiển thị sản phẩm</option>
                                <?php 
                            }
                        ?>
                        
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Ảnh sản phẩm </label>
                <div class="col-sm-9">
                   <img src="../../uploads/<?php echo $row['anhsanpham'];?>" alt="">
                   <input type="file" class="form-control" name = "anhsanpham" id="image" placeholder = "Chọn file">
                </div>
            </div>
           
            <input type="hidden" value="<?php echo $id_sanpham; ?>" name="id_sanpham">
            <div class="mb-3 row ">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="submit" class="form-control btn btn-success mt-3" value = "Sửa bài viết">
                </div>
            </div>
        </form>
       
    </div>

<?php 
    include './partice/footer.php';
?>