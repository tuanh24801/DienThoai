<?php 
    include '../../process/admin/checkAdmin.php';
    include './partice/header.php';
    if(isset($_POST['textsearch'])){
        $_SESSION['textsearch'] = $_POST['textsearch'];
    }
?>

    <div class="container p-2">
        <!-- <h4>Đây là trang quản lí bài viết</h4> -->
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8">
                <form class="d-flex" action = "" method = "post">
                    <input class="form-control me-2" type="search" placeholder="Bạn muốn tìm kiếm ..." aria-label="Search" name = "textsearch"
                        value = "<?php 
                            if(isset($_SESSION['textsearch'])){
                                echo $_SESSION['textsearch'];
                            }
                        ?>"
                    >
                    <button class="btn btn-outline-success " type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="row mt-3"> 
            <div class="col-1"><a href="../../process/admin/showAllbaiviet.php" class = "btn btn-outline-success">Tất cả</a>  </div>
            <?php 
                if(isset($_GET['orderby'])){
                    if(($_GET['orderby']) == "ASC"){
                        ?>
                            <div class="col-2"><a href="?orderby=DESC" class = "btn btn-outline-danger">Sắp xếp v/^</a>  </div>
                        <?php
                    }else{
                        ?>
                            <div class="col-2"><a href="?orderby=ASC" class = "btn btn-outline-primary">Sắp xếp v/^</a>  </div>
                        <?php
                    }
                }else{
                    ?>
                        <div class="col-2"><a href="?orderby=DESC" class = "btn btn-outline-danger">Sắp xếp v/^</a>  </div>
                    <?php
                }
            ?>
            
        </div>
        
        <table class="table table-striped mt-2">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Màu</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Hiển thị</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_SESSION['textsearch'])){
                    $post = $_SESSION['textsearch'];
                    $where = "WHERE ten LIKE '%$post%'";
                    // echo $where;
                }else{
                    $where = " ";
                }
                $order = "ASC";
                if(isset($_GET['orderby'])){
                    $order = $_GET['orderby'];
                }
                $All = "SELECT * FROM sanpham ${where} ORDER BY id ${order}";
                $query = mysqli_query($conn,$All);
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']?></th>
                        <td><?php echo $row['ten']?></td>
                        <td><?php echo $row['gia']?></td>
                        <td><?php echo $row['mau']?></td>
                        <td><?php echo $row['soluong']?></td>
                        <td><?php echo $row['isShow']?></td>
                        <td><a href="chinhsuasp.php?id=<?php echo $row['id'];?>"><i class="fal fa-user-edit btn btn-outline-primary"></i></a></td>
                        <td><a href="xoasp.php"><i class="fal fa-trash-alt btn btn-outline-danger"></a></td>
                    </tr>
                    <?php
                }
            ?>
           
        </tbody>
        </table>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
    </div>


<?php 
    include './partice/footer.php';
?>