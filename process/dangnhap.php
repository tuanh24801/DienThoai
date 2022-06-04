<?php 
    session_start();
    if(isset($_POST['btndangnhap'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        require '../core/connection.php';

        $sql = "SELECT * FROM taikhoan";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($row['tentaikhoan'] == $taikhoan && $row['matkhau'] == $matkhau ){
                    if($row['isAdmin'] == '1'){
                        $_SESSION['adminlogin'] = 'adminlogin';
                        header('Location: ../view/admin/trangchu.php');
                        die();
                    }else{
                        $_SESSION['nguoidung'] = $row['id'];
                        header('Location: ../view/index.php');
                        die();
                    }
                }
            }
        }


        header("Location: ../view/dangnhap.php?info='Đăng nhập thất bại'");
        

      

    }
    

?>