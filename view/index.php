<?php 
    require './partice/header.php';
?>
    <div class="content">
        <div class="td">
            <p>
                KHUYẾN MÃI HOT
            </p>
        </div>
        <div class="box">
            <?php 
                $sql = "SELECT * FROM sanpham";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                   ?>
                        <div class="sp1">
                            <p class="tsp"><a href=""><?php echo $row['ten'] ?></a></p>
                            <img src="IMAGES/sanpham/<?php echo $row['anhsanpham'] ?>" alt="">
                            <p class="gg"><?php echo $row['gia'] ?></p>
                            <p class="gm"><?php echo $row['gia'] ?></p>
                        </div>
                   <?php
                }
            ?>
          
        </div>
        
        
    </div>
    <?php require './partice/footer.php';?>