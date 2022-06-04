<?php
   include './checkAdmin.php';
   $ten = $_POST['ten'];
   $gia = $_POST['gia'];
   $mau = $_POST['mau'];
   $soluong = $_POST['soluong'];
   $anhsanpham = basename($_FILES["anhsanpham"]["name"]);
   $target_dir = "../../uploads/";
   $target_file = $target_dir.$anhsanpham;
   move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file);


   include '../../core/connection.php';
    //inset baiviet    
    $themsp= "INSERT INTO sanpham(ten,gia,anhsanpham,mau, soluong, isShow) 
                                VALUES('$ten', '$gia', '$anhsanpham', '$mau', '$soluong', '1')";
    $result_thembaiviet = mysqli_query($conn,$themsp);
    if(!$result_thembaiviet){
        echo 'Lỗi ở thêm bài viết';
        die();
    }
    header('location: ../../view/admin/themsp.php?inf=Thêm bài viết thành công');
 
?>