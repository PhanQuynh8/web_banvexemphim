<?php
require_once("ketnoidulieu/db_module.php");
require_once("models/classes/phim.php");

class PhimModel{
    public function GetListPhim(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_movie");
        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            
            $phim = new phim($rows['id_phim'],$rows['tenphim'],$rows['hinhanh'],$rows['phanloai'],$rows['daodien'],$rows['dienvien'],$rows['theloai'],$rows['khoichieu'],$rows['thoiluong'],$rows['trailer'],$rows['tinhtrangphim']);
            array_push($data,$phim);
            
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetListPhimDangChieu(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_movie");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            if($rows['tinhtrangphim'] == 'dangchieu'){
            $phim = new phim($rows['id_phim'],$rows['tenphim'],$rows['hinhanh'],$rows['phanloai'],$rows['daodien'],$rows['dienvien'],$rows['theloai'],$rows['khoichieu'],$rows['thoiluong'],$rows['trailer'],$rows['tinhtrangphim']);
            array_push($data,$phim);
            }
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetListPhimSapChieu(){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "select * from tbl_movie");

        $data = array();
        while ($rows = mysqli_fetch_assoc($re)){
            if($rows['tinhtrangphim'] == 'sapchieu'){
            $phim = new phim($rows['id_phim'],$rows['tenphim'],$rows['hinhanh'],$rows['phanloai'],$rows['daodien'],$rows['dienvien'],$rows['theloai'],$rows['khoichieu'],$rows['thoiluong'],$rows['trailer'],$rows['tinhtrangphim']);
            array_push($data,$phim);
            }
        }
        giaiPhongBoNho($link,$re);
        return $data;
    }
    public function GetPhimDE($tenphim){
        $toanbo = $this -> GetListPhim();
        foreach($toanbo as $phim){
            if(trim($phim -> GetTenPhim()) == trim($tenphim)){
                return $phim;
            }           
        } 
        return null;

    }
    public function GetPhimByID($idphim){
        $toanbo = $this -> GetListPhim();
        foreach($toanbo as $phim){
            if(trim($phim -> GetIdPhim()) == trim($idphim)){
                return $phim;
            }           
        } 
        return null;

    }
}

?>