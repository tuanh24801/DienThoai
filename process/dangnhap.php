<?php 
    if(isset($_POST['btndangnhap'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        
        require '../core/connection.php';

        $sql = "SELECT * FROM taikhoan";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                
                if($row['tentaikhoan'] == $taikhoan && $row['matkhau'] == $matkhau){
                    echo 'đăng nhập thành công';
                    die();
                }

            }

        }
        echo 'đăng nhập thất bại';
        

      

    }
    

?>