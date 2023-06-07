<?php
class ve{
    private $id_ve;
    private $id_user;
    private $id_phim;
    private $id_lichchieu;
    private $ghe;
    private $soluongve;
    private $soluongbap;
    private $soluongnuoc;
    private $tongtien;
#SET
    public function SetGhe($ghe){
        $this -> ghe = $ghe;
    }
   
    #GET
    public function GetGhe(){
        return $this -> ghe;
    }
    public function GetIDVE(){
        return $this -> id_ve;
    }
    public function GetIDUS(){
        return $this -> id_user;
    }
    public function GetIDPHIM(){
        return $this -> id_phim;
    }
    public function GetIDLC(){
        return $this -> id_lichchieu;
    }
    public function GetBap(){
        return $this -> soluongbap;
    }
    public function GetNuoc(){
        return $this -> soluongnuoc;
    }
    public function GetVe(){
        return $this -> soluongve;
    }
    public function GetTT(){
        return $this -> tongtien;
    }
   
   
    public function __construct( $id_ve,$id_user,$id_phim,$id_lichchieu,$ghe, $ve,$bap,$nuoc,$tongtien)
    {
        $this -> id_ve = $id_ve;
        $this -> id_user = $id_user;
        $this -> id_phim = $id_phim;
        $this -> id_lichchieu = $id_lichchieu;
        $this -> $ghe = $ghe;
        $this -> ve = $ve;
        $this -> bap = $bap;
        $this -> nuoc = $nuoc;
        $this -> tongtien = $tongtien;
        
  
    }

}
?>