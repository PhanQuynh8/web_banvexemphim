<?php
require_once("ketnoidulieu/db_module.php");
require_once("models/classes/chinhanh.php");


class ChiNhanhModel{

    public function GetListChiNhanh(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_chinhanh");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $lc = new chinhanh($rows['id_chinhanh'],$rows['tenchinhanh'],$rows['diachi'],$rows['linkdiachi']);
            array_push($data,$lc);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetChinhNhanhID($id_chinhanh){
        $datacn = $this -> GetListChiNhanh();
        foreach($datacn as $cn){
            if(trim($cn -> GetIdChiNhanh()) == trim($id_chinhanh)){
                return $cn;
            }
        }
        return null;
    }
   
}
?>