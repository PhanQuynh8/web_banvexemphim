<?php
require_once("ketnoidulieu/db_module.php");
require_once("models/classes/ve.php");
    function AddNewVe($idve,$iduser,$idphim,$idlc,$ghes,$slve,$slbap,$slnuoc,$thanhtien){
        $link = null;
        taoKetNoi($link);
       
        $re = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_ticket
        VALUES ('".$idve."', '".$iduser."',
        '".$idphim."', 
        '".$idlc."','".$ghes."',".$slve.",".$slbap.",".$slnuoc.",".$thanhtien.");");
        return $re;
    } 
    function GetToanBoVe(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_ticket");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $phim = new ve($rows['id_ve'],$rows['id_user'],$rows['id_phim'],$rows['id_lichchieu'],$rows['ghe'],$rows['soluongve'],$rows['soluongbap'],$rows['soluongnuoc'],$rows['tongtien']);
            array_push($data,$phim);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    function GetToanBoVeTheoIDUS($idus){
        $toanbo = GetToanBoVe();
        $data = array();
        foreach($toanbo as $phim){
            if(trim($phim -> GetIDUS()) == trim($idus)){
                array_push($data,$phim);
            }           
        } 
        return $data;
    }
?>