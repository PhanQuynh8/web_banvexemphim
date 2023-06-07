<?php
require_once("db_module.php");
require_once("phim.php");

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

}

    //QLP
    function GetPhim($idPhim){
        $link = null;
        taoKetNoi($link);
        $re = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_movie 
        WHERE id_phim='".mysqli_real_escape_string($link,$idPhim)."'");

        while ($rows = mysqli_fetch_assoc($re))
            $phim = new phim($rows['id_phim'],$rows['tenphim'],$rows['hinhanh'],$rows['phanloai'],
            $rows['daodien'],$rows['dienvien'],$rows['theloai'],$rows['khoichieu'],
            $rows['thoiluong'],$rows['trailer'],$rows['tinhtrangphim']);
        giaiPhongBoNho($link,$re);
        return $phim;
    }
    function Add($link, $tenphim, $hinhanhphim, $phanloai, $daodien,
    $dienvien, $theloai, $khoichieu, $thoiluong, $trailer, $tinhtrangphim)
    {
        $result = mysqli_fetch_row(chayTruyVanTraVeDL($link, "SELECT count(*) from tbl_movie"));
        $idSinh = "00".($result[0]+1);// trinh bay id??
        $id = "MV".substr($idSinh,strlen($idSinh)-3,3) ;// bo vo xu ly

        $result = chayTruyVanKhongTraVeDL($link,"INSERT INTO tbl_movie Values('$id', 
        '".mysqli_real_escape_string($link,$tenphim)."','".mysqli_real_escape_string($link,$hinhanhphim)."',
        '".mysqli_real_escape_string($link,$phanloai)."','".mysqli_real_escape_string($link,$daodien)."',
        '".mysqli_real_escape_string($link,$dienvien)."','".mysqli_real_escape_string($link,$theloai)."',
        '".mysqli_real_escape_string($link,$khoichieu)."','".mysqli_real_escape_string($link,$thoiluong)."',
        '".mysqli_real_escape_string($link,$trailer)."','".mysqli_real_escape_string($link,$tinhtrangphim)."')");
    }

    function Update($link, $idPhim, $tenphim, $hinhanhphim, $phanloai, $daodien,
    $dienvien, $theloai, $khoichieu, $thoiluong, $trailer, $tinhtrangphim){
        $result = chayTruyVanKhongTraVeDL($link,"UPDATE tbl_movie SET tenphim='".mysqli_real_escape_string($link,$tenphim)."',
        hinhanh='".mysqli_real_escape_string($link,$hinhanhphim)."', phanloai='".mysqli_real_escape_string($link,$phanloai)."',
        daodien='".mysqli_real_escape_string($link,$daodien)."', dienvien='".mysqli_real_escape_string($link,$dienvien)."',
        theloai='".mysqli_real_escape_string($link,$theloai)."', khoichieu='".mysqli_real_escape_string($link,$khoichieu)."',
        thoiluong='".mysqli_real_escape_string($link,$thoiluong)."',trailer='".mysqli_real_escape_string($link,$trailer)."',
        tinhtrangphim='".mysqli_real_escape_string($link,$tinhtrangphim)."' WHERE id_phim='".$idPhim."'");
    }
    


?>