<?php
   include './checkAdmin.php';
   include '../../core/connection.php';
   $ten = $_POST['ten'];
   $gia = $_POST['gia'];
   $mau = $_POST['mau'];
   $soluong = $_POST['soluong'];
   $isShow = $_POST['isShow'];
    $id_sanpham = $_POST['id_sanpham'];
   $anhsanpham = basename($_FILES["anhsanpham"]["name"]);
//    echo $ten."<br>".$gia."<br>".$mau."<br>".$soluong."<br>".$isShow."<br>".$id_sanpham."<br>".$anhsanpham."<br>".$isShow;
    
   $target_dir = "../../uploads/";
   if($anhsanpham == ""){
        $suasp= "UPDATE sanpham SET ten = '$ten',
                        gia = '$gia',
                        mau = '$mau',
                        soluong  = '$soluong', isShow = '$isShow'  WHERE id = '$id_sanpham'";
        if(mysqli_query($conn,$suasp)){
            header("location: ../../view/admin/chinhsuasp.php?inf=Chỉnh sửa bài viết thành công&id=$id_sanpham");
        }
   }else{
        $target_file = $target_dir.$anhsanpham;
        move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file);
        $suasp= "UPDATE sanpham SET ten = '$ten',
        gia = '$gia',
        anhsanpham = '$anhsanpham',
        mau = '$mau',
        soluong  = '$soluong', isShow = '$isShow'  WHERE id = '$id_sanpham'";
        if(mysqli_query($conn,$suasp)){
            header("location: ../../view/admin/chinhsuasp.php?inf=Chỉnh sửa bài viết thành công&id=$id_sanpham");
        }
    }
  
   
    

    // header("location: ../../Public/Admin/suabaiviet.php?inf=sửa bài viết thành công&id=$id_baiviet");
 
?>