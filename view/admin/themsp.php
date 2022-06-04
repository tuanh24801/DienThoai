<?php 
    include './partice/header.php';
?>
    <div class="container p-2">
        <h4 class="mt-3 text-center">Thêm bài sản phẩm mới</h4>
        <p class="mt-3 text-center">
            <?php 
                if(isset($_GET['inf'])){
                    echo $_GET['inf'];
                }
            ?>
        </p>
        <form action="../../process/admin/themsanpham.php" class="mt-5" method = "post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                    <label for="inputPassword" class="col-sm-1 col-form-label">Tên</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name = "ten">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Giá</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name = "gia">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Màu</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name = "mau">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Số lượng</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name = "soluong">
                </div>
            </div>
            
            <div class="mb-3 row">
                <div class="col-sm-1"></div>
                <label for="inputPassword" class="col-sm-1 col-form-label">Ảnh sản phẩm</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name = "anhsanpham" id="image" placeholder = "Chọn file" required>
                </div>
            </div>
           
            <div class="mb-3 row ">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="submit" class="form-control btn btn-success" value = "Thêm bài viết">
                </div>
            </div>
        </form>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
    </div>

<?php 
    include './partice/footer.php';
?>