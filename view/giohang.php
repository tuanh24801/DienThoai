<?php 
    require './partice/header.php';
    if(!isset($_SESSION['nguoidung'])){
       header("location: dangnhap.php?info=Vui lòng đăng nhập để vào giỏ hàng");
       die();
    }
    if(isset($_SESSION['nguoidung'])){
        $id_nguoidung = $_SESSION['nguoidung'];
    }
    $sql = "SELECT tentaikhoan FROM taikhoan WHERE id ='$id_nguoidung'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    // $check = "SELECT id_sanpham  FROM giohang WHERE id_nguoidung='$id_nguoidung'";
    // $check1 = mysqli_query($conn,$check);
    // if(mysqli_num_rows($check1)<=0){
    //     echo "khong co gi" ;
    //     die();
    // }
    

    
?>
    <div class="container p-4">
        <h4 class="mb-4">khách: <?php echo $row['tentaikhoan']?></h4>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tong = 0;
                        // $i = 1; 
                        $sql_sp = "SELECT id_sanpham FROM giohang WHERE id_nguoidung = '$id_nguoidung' AND isBuy = '0'";
                        $result_sp = mysqli_query($conn,$sql_sp);
                        while($row_sp = mysqli_fetch_assoc($result_sp)){
                            $id_sp = $row_sp['id_sanpham'];
                            $sql_chitietsp = "SELECT * FROM sanpham WHERE id = '$id_sp'";
                            $result_chitietsp = mysqli_query($conn,$sql_chitietsp);
                            $row_chitietsp = mysqli_fetch_assoc($result_chitietsp);
                            $sql_soluong = "SELECT * FROM giohang WHERE id_nguoidung = '$id_nguoidung' AND id_sanpham = '$id_sp' AND isBuy = '0'";
                            $result_soluong = mysqli_query($conn,$sql_soluong);
                            if(mysqli_num_rows($result_soluong) > 0){
                                $row_soluong = mysqli_fetch_assoc($result_soluong);
                                $id_giohang = $row_soluong['id'];
                                $tong = $tong + $row_soluong['soluong']*$row_chitietsp['gia'];
                                ?>
                                    <tr>
                                        <th><?php echo $row_chitietsp['ten'];?></th>
                                        <th><?php echo $row_chitietsp['gia'];?></th>
                                        <th><?php echo $row_soluong['soluong'];?></th>
                                        <th><?php echo $row_soluong['soluong']*$row_chitietsp['gia'];?></th>
                                        
                                    </tr>
                                    
                                <?php
                            }
                            
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row">
                        
            <h3>Tổng tiền: <?php echo $tong?></h3>
        
        </div>
        <div class="row">
                        
            <a href="../process/thanhtoan.php" class ="btn btn-success">Thanh Toán</a>
        
        </div>
        
    </div>
    

<?php require './partice/footer.php';?>