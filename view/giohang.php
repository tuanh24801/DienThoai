<?php 
    require './partice/header.php';
    if(isset($_SESSION['nguoidung'])){
        $id_nguoidung = $_SESSION['nguoidung'];
    }
    $sql = "SELECT tentaikhoan FROM taikhoan WHERE $id_nguoidung";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    
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
                        $i = 1; 
                        $sql_sp = "SELECT id_sanpham FROM giohang WHERE id_nguoidung = '$id_nguoidung'";
                        $result_sp = mysqli_query($conn,$sql_sp);
                        while($row_sp = mysqli_fetch_assoc($result_sp)){
                            $id_sp = $row_sp['id_sanpham'];
                            $sql_chitietsp = "SELECT * FROM sanpham WHERE id = '$id_sp'";
                            $result_chitietsp = mysqli_query($conn,$sql_chitietsp);
                            $row_chitietsp = mysqli_fetch_assoc($result_chitietsp);
                            $sql_soluong = "SELECT soluong FROM giohang WHERE id_nguoidung = '$id_nguoidung' AND id_sanpham = '$id_sp'";
                            $result_soluong = mysqli_query($conn,$sql_soluong);
                            $row_soluong = mysqli_fetch_assoc($result_soluong);
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
                    
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row">
                        
            <h3>Tổng tiền: <?php echo $tong?></h3>
        </div>
    </div>

<?php require './partice/footer.php';?>