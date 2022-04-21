
<?php

include 'partice/header.php';
if(isset($_POST['timkiem'])){
    $tk = $_POST['timkiem'];
}
?>
<div class="container">
        <div class="row p-5">
            <?php 
                $sql = "SELECT * FROM sanpham where ten LIKE '%$tk%'";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div class="col-3 p-5">
                            <div class="card p-3" style="width: 18rem;">
                                    <p class="tsp"><a href="chitietsanpham.php?id=<?php echo $row['id']?>"><?php echo $row['ten'] ?></a></p>
                                    <a href="chitietsanpham.php?id=<?php echo $row['id']?>"> <img src="IMAGES/sanpham/<?php echo $row['anhsanpham'] ?>" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <p class="gg"><?php echo $row['gia'] ?></p>
                                        <p class="gm"><?php echo $row['gia'] ?></p>
                                    </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php require './partice/footer.php';?>
