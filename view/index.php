<?php 
    require './partice/header.php';
?>
    <div class="main-content mt-5">
    <form action = "" method = "post"   class="row g-3 mb-3">
        <div class="col-3">
            <?php 
                $selectColor = "SELECT DISTINCT mau FROM sanpham ";
                $query = mysqli_query($conn,$selectColor);
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $row['mau']?>" name="<?php echo $row['mau']?>">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $row['mau']?></label>
                    </div>
                    <?php
                }
            ?>
        </div>
        <div class="col-3">
            <select class="form-select" aria-label="Default select example" name = "gia">
                <option value="">Tất cả</option>
                <option value="5">0 - 5.000.000</option>
                <option value="10">5.000.000 - 10.000.000</option>
                <option value="20">10.000.000 - 20.000.000</option>
            </select>
        </div>
        <div class="col-3">
            <input type="submit" value="Tìm kiếm" name="btntkboloc">
        </div>
    </form>
        <div class="row mb-5">
            <?php 
                include '../process/timkiemboloc.php';
                $sql = "SELECT * FROM sanpham ${WHERE}";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                        <div class="col-3 mb-3">
                            <div class="card" style="width: 18rem;">
                                <p class="text-center"><a href="chitietsanpham.php?id=<?php echo $row['id']?>"><?php echo $row['ten'] ?></a></p>
                                <a href="chitietsanpham.php?id=<?php echo $row['id']?>"><img src="IMAGES/sanpham/<?php echo $row['anhsanpham'] ?>" style = "width: 100%; height:370px;" class="card-img-top" alt="..."></a> 
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