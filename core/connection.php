<?php
    require 'config.php';
    
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);
    if(!$conn){
        echo 'Lỗi kết nối Database';
    }
?>