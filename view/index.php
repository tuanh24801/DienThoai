<?php 
    require './partice/header.php';
?>
    <div class="main-content mt-5">
        <div class="row mb-5">
            <?php 
                $sql = "SELECT * FROM sanpham";
                $result = mysqli_query($conn,$sql);
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
             ?>
      </div>
    </div>   
       

<?php require './partice/footer.php';?>