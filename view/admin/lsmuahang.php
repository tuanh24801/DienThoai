<?php 
    include '../../process/admin/checkAdmin.php';
    include './partice/header.php';
?>

    <div class="container p-2">
        <table class="table table-striped mt-2">
        <thead>
            <tr>
            <th scope="col">Người dùng</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thời gian</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $All = "SELECT * FROM giohang WHERE isBuy = '1'";
                $query = mysqli_query($conn,$All);
                while($row = mysqli_fetch_assoc($query)){
                    $id_nguoidung = $row['id_nguoidung'];
                    $queryTen = mysqli_query($conn,"SELECT * FROM taikhoan WHERE id = '$id_nguoidung'");
                    $rowTen = mysqli_fetch_assoc($queryTen);

                    $id_sanpham = $row['id_sanpham'];
                    $queryTensp = mysqli_query($conn,"SELECT * FROM sanpham WHERE id = '$id_sanpham'");
                    $rowTensp = mysqli_fetch_assoc($queryTensp);
                    ?>
                    <tr>
                        <th scope="row"><?php echo $rowTen['tentaikhoan']?></th>
                        <td><?php echo $rowTensp['ten']?></td>
                        <td><?php echo $row['soluong']?></td>
                        <td><?php echo $row['ngaymua']?></td>
                    </tr>
                    <?php
                }
            ?>
           
        </tbody>
        </table>
     
    </div>


<?php 
    include './partice/footer.php';
?>