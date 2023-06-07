<?php
class ngay{
    private $id_ngay;
    private $ngay;
    private $thu;

    public function SetNgay($ngay){
        $this -> ngay = $ngay;
    }
    public function SetThu($thu){
        $this -> thu = $thu;
    }
  
    public function GetIdNgay(){
        return $this -> id_ngay;
    }
    public function GetNgay(){
        return $this -> ngay;
    }
    public function GetThu(){
        return $this -> thu;
    }
   
    public function __construct($id_ngay, $ngay,$thu)
    {
        
        $this -> id_ngay =$id_ngay;
        $this -> ngay = $ngay;
        $this -> thu = $thu;

    }

}
?>