<?php
require_once("ketnoidulieu/db_module.php");
require_once("models/classes/lichchieu.php");
require_once("ChinhNhanhModel.php");
require_once("PhimModel.php");

class LichChieuModel{

    public function GetListLichChieuTheoNgayCN($idngay,$idcn,$idphim){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_lichchieu where id_ngay='".$idngay."' and id_chinhanh='".$idcn."' and id_phim='".$idphim."'");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $lc = new lichchieu($rows['id_lichchieu'],$rows['id_ngay'],$rows['giochieu'],$rows['id_phim'],$rows['rap'],$rows['id_chinhanh']);
            array_push($data,$lc);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetToanBoLichChieu(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_lichchieu ");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $lc = new lichchieu($rows['id_lichchieu'],$rows['id_ngay'],$rows['giochieu'],$rows['id_phim'],$rows['rap'],$rows['id_chinhanh']);
            array_push($data,$lc);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetListChiNhanh_BangLichChieu(){
        $link = null;
        taoKetNoi($link);   
        $mdchinhanh = new ChiNhanhModel();
        $re = chayTruyVanTraVeDL($link, "select distinct id_chinhanh from tbl_lichchieu");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $cnhanh = $mdchinhanh -> GetChinhNhanhID($rows['id_chinhanh']);
            array_push($data,$cnhanh);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetLichChieuByID($idlc){
        $toanbo = $this -> GetToanBoLichChieu();
        foreach($toanbo as $lc){
            if(trim($lc -> GetIDLC()) == trim($idlc)){
                return $lc;
            }           
        } 
        return null;
    }
}
   
    


?>