
<?php

include 'partice/header.php';
if(isset($_POST['timkiem'])){
    $tk = $_POST['timkiem'];
}
?>
    <div class="main-content mt-5">
        <div class="row mb-5">
            <?php 
                $sql = "SELECT * FROM sanpham WHERE ten LIKE '%$tk%'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                    
                            <div class="col-3 mb-3">
                                <div class="card" style="width: 18rem;">
                                    <p class="text-center"><a href="chitietsanpham.php?id=<?php echo $row['id']?>"><?php echo $row['ten'] ?></a></p>
                                    <a href="chitietsanpham.php?id=<?php echo $row['id']?>"><img src="IMAGES/sanpham/<?php echo $row['anhsanpham'] ?>" class="card-img-top" alt="..."></a> 
                                    <div class="card-body">
                                        <p class="text-center text-dark"><?php echo $row['gia']; ?></p>
                                    </div>
                                </div>
                            </div>
                        
                        <?php
                        
                    }
                }else{
                    ?>
                        <h1 class="text-center">Không tìm thấy kết quả tìm kiếm</h1>
                    <?php
                }
             ?>
        </div>
    </div>
    <?php require './partice/footer.php';?>
