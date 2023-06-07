<?php
require_once("ketnoidulieu/db_module.php");
require_once("models/classes/ngay.php");


class NgayModel{

    public function GetListNgay(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_ngay ORDER BY ngay;");
 
        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $ngay = new ngay($rows['id_ngay'],$rows['ngay'],$rows['thu']);
            array_push($data,$ngay);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetNgayTheoID($ngay){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_ngay where ngay='".$ngay."'");

        #$data = array();
       # while ($rows = mysqli_fetch_assoc($re)){
            
        #    $ngay = new ngay($rows['id_ngay'],$rows['ngay'],$rows['thu']);
         #   array_push($data,$ngay);
            
        #}
        $row = mysqli_fetch_row($re);
        $id = $row[0];
        $ng = $row[1];
        $th = $row[2];
        $ngay = new ngay($id,$ng,$th);
        giaiPhongBoNho($link,$re);
        return $ngay;
    }
    public function GetNgayTheoIDreal($id_ngay){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_ngay where id_ngay='".$id_ngay."'");

        $row = mysqli_fetch_row($re);
        $id = $row[0];
        $ng = $row[1];
        $th = $row[2];
        $ngay = new ngay($id,$ng,$th);
        giaiPhongBoNho($link,$re);
        return $ngay;
    }
   
}
?>