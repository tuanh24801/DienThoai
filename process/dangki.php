<?php 
    if(isset($_POST['btndangki'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        $matkhau2 = $_POST['matkhau2'];

        if($matkhau != $matkhau2){
            die('mật khẩu không khớp');
        }

        
        require '../core/connection.php';

        $sql = "SELECT * FROM taikhoan WHERE tentaikhoan = '$taikhoan'";
        // die($sql);
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            die('đã tồn tại tên tài khoản');
        }

        $sql = "INSERT INTO taikhoan(tentaikhoan, matkhau) VALUES ('$taikhoan', '$matkhau')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo 'thêm thành công';
            header('location: ../view/dangnhap.php');
            die();
        }
        echo 'không thành công';

    }
    

?>