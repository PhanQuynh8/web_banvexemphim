<?php
class phim{
    private $id_phim;
    private $tenphim;
    private $hinhanhphim;
    private $phanloai;
    private $daodien;
    private $dienvien;  
    private $theloai;
    private $khoichieu;
    private $thoiluong;
    private $trailer;
    private $tinhtrangphim;
    private $so = 0;


    public function SetTenPhim($tenphim){
        $this -> tenphim = $tenphim;
    }
    public function SetPhanLoai($phanloai){
        $this -> phanloai = $phanloai;
    }
    public function SetHinhAnh($hinhanhphim){
        $this -> hinhanhphim = $hinhanhphim;
    }
    public function SetDaoDien($daodien){
        $this -> daodien = $daodien;
    }
    public function SetDienVien($dienvien){
        $this -> dienvien = $dienvien;
    }
    public function SetTheLoai($tenphim){
        $this -> tenphim = $tenphim;
    }
    public function SetKhoiChieu($khoichieu){
        $this -> khoichieu = $khoichieu;
    }
    public function SetThoiLuong($thoiluong){
        $this -> thoiluong = $thoiluong;
    }
    public function SetTinhTrangPhim($tinhtrangphim){
        $this -> tinhtrangphim = $tinhtrangphim;
    }
    
    public function GetIdPhim(){
        return $this -> id_phim;
    }
    public function GetTenPhim(){
        return $this -> tenphim;
    }
    public function GetPhanLoai(){
        return $this -> phanloai;
    }
    public function GetHinhAnh(){
        return $this -> hinhanhphim;
    }
    public function GetDaoDien(){
        return $this -> daodien;
    }
    public function GetDienVien(){
        return $this -> dienvien;
    }
    public function GetTheLoai(){
        return $this -> theloai;
    }
    public function GetKhoiChieu(){
        return $this -> khoichieu;
    }
    public function GetThoiLuong(){
        return $this -> thoiluong;
    }
    public function GetTrailer(){
        return $this -> trailer;
    }
    public function GetTinhTrangPhim(){
        return $this -> tinhtrangphim;
    }


   
    public function __construct( $id_phim,$tenphim, $hinhanhphim,$phanloai,$daodien,$dienvien,$theloai,$khoichieu,$thoiluong, $trailer, $tinhtrangphim)
    {
        
        $this -> id_phim =$id_phim;
        $this -> tenphim = $tenphim;
        $this -> hinhanhphim = $hinhanhphim;
        $this -> phanloai = $phanloai;
        $this -> daodien = $daodien;
        $this -> dienvien = $dienvien;
        $this -> theloai = $theloai;
        $this -> khoichieu = $khoichieu;
        $this -> thoiluong = $thoiluong;
        $this -> trailer = $trailer;
        $this -> tinhtrangphim = $tinhtrangphim;

    }

}
?>