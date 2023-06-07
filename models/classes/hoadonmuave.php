<?php
class hoadonmuave{
    private $id_hoadonmuave;
    private $id_user;
    private $id_phim;
    private $id_lichchieu;
    private $ngay_hd;
    private $soluong;  
    private $bap;
    private $nuoc;
    private $tongtien;
    private $so = 0;


    public function SetNgay_hd($ngay_hd){
        $this -> ngay_hd = $ngay_hd;
    }
    public function SetSoLuong($soluong){
        $this -> $soluong = $soluong;
    }
    public function SetBap($bap){
        $this -> bap = $bap;
    }
    public function SetNuoc($nuoc){
        $this -> nuoc = $nuoc;
    }
    public function SetEmail($email){
        $this -> email = $email;
    }
    public function SetTongTien($tongtien){
        $this -> tongtien = $tongtien;
    }
   
    
    public function GetNgay_hd(){
        return $this -> ngay_hd;
    }
    public function GetSoLuong(){
        return $this -> soluong;
    }
    public function GetBap(){
        return $this -> bap;
    }
    public function GetNuoc(){
        return $this -> nuoc;
    }
    public function GetTongTien(){
        return $this -> tongtien;
    }
    

   
    public function __construct($id_hoadonmuave, $id_user, $id_phim, $id_lichchieu, $ngay_hd, $soluong, $bap, $nuoc, $tongtien)
    {
        
        $this -> idid_hoadonmuave_user =$id_hoadonmuave;
        $this -> id_user = $id_user;
        $this -> id_phim = $id_phim;
        $this -> id_lichchieu= $id_lichchieu;
        $this -> ngay_hd = $ngay_hd;
        $this -> soluong = $soluong;
        $this -> $bap = $bap;
        $this -> $nuoc = $nuoc;
        $this -> $tongtien = $tongtien;
    }

}
?>