<?php
class lichchieu{
    private $id_lichchieu;
    private $id_ngay;
    private $giochieu;
    private $id_phim;
    private $rap;
    private $id_chinhanh;


    public function SetNgayChieu($ngaychieu){
        $this -> ngaychieu = $ngaychieu;
    }
    public function SetGioChieu($giochieu){
        $this -> giochieu = $giochieu;
    }
    public function SetRap($rap){
        $this -> rap = $rap;
    }
    
    
    public function GetNgayChieu(){
        return $this -> ngaychieu;
    }
    public function GetGioChieu(){
        return $this -> giochieu;
    }
    public function GetRap(){
        return $this -> rap;
    }
    public function GetIDLC(){
        return $this -> id_lichchieu;
    }
    public function GetIDCN(){
        return $this -> id_chinhanh;
    }
    public function GetIDPHIM(){
        return $this -> id_phim;
    }
    public function GetIDNGAY(){
        return $this -> id_ngay;
    }
   
   

   
    public function __construct($id_lichchieu, $id_ngay,$giochieu, $id_phim, $rap,$id_chinhanh)
    {
        
        $this -> id_lichchieu =$id_lichchieu;
        $this -> id_ngay = $id_ngay;
        $this -> giochieu = $giochieu;
        $this -> id_phim = $id_phim;
        $this -> rap = $rap;
        $this -> id_chinhanh = $id_chinhanh;
    }

}
?>