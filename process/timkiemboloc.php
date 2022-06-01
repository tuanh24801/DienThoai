<?php 
    if(isset($_POST['btntkboloc'])){
        $mauArr = [];
        $WHERE = " ";
        $selectColor = "SELECT DISTINCT mau FROM sanpham ";
        $con = mysqli_connect('localhost', 'root', '', 'dienthoai');
        $query = mysqli_query($con,$selectColor);
        while($row = mysqli_fetch_assoc($query)){
            $mau = $row['mau'];
            if(isset($_POST["$mau"])){
                array_push($mauArr,$_POST["$mau"]);
            }
        }
        if(isset($_POST['gia'])){
            $gia =  $_POST['gia'];
            if($gia == 5){
                $giaEnd = "gia < 5000000";
            }elseif($gia == 10){
                $giaEnd = "gia > 5000000 AND gia < 10000000";
            }elseif($gia == 20){
                $giaEnd = "gia > 10000000 AND gia < 20000000";
            }
        }
        
        if(!empty($mauArr)){
            $mauu = "";
            foreach ($mauArr as $key => $value) {
                $mauu .= " mau = '${value}' OR";
            }
            $mauend = rtrim($mauu," OR");
        }

        if(isset($giaEnd) && isset($mauend)){
            $WHERE = "WHERE ( $mauend ) AND  ( $giaEnd ) ";
        }elseif(isset($giaEnd) && !isset($mauend)){
            $WHERE = "WHERE  ( $giaEnd ) ";
        }elseif(isset($mauend) && !isset($giaEnd)){
            $WHERE = "WHERE ( $mauend ) ";
        }
        
       
    }

?>