<?php 
    class UserModel{
        private $id;
        private $tentaikhoan;
        private $matkhau;

        function __construct($id, $tentaikhoan, $matkhau){
            $this->id = $id;
            $this->tentaikhoan = $tentaikhoan;
            $this->matkhau = $matkhau;
        }
        
        function getId() { 
            return $this->id;
        }

        



    }

    $OUM = new UserModel('12','tuaanh','abc');
    echo $OUM->getId();

?>