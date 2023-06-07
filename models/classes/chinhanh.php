<?php
class chinhanh{
    private $id_chinhanh;
    private $tenchinhanh;
    private $diachi;
    private $linkdiachi;
    private $so = 0;


    public function SetTenChiNhanh($tenchinhanh){
        $this -> tenchinhanh = $tenchinhanh;
    }
    public function SetDiaChi($diachi){
        $this -> diachi = $diachi;
    }
  
    public function GetIdChiNhanh(){
        return $this -> id_chinhanh;
    }
    public function GetTenChiNhanh(){
        return $this -> tenchinhanh;
    }
    public function GetDiaChi(){
        return $this -> diachi;
    }
    public function GetLinkDiaChi(){
        return $this -> linkdiachi;
    }
   
   

   
    public function __construct($id_chinhanh, $tenchinhanh, $diachi, $linkdiachi)
    {
        
        $this -> id_chinhanh =$id_chinhanh;
        $this -> tenchinhanh = $tenchinhanh;
        $this -> diachi = $diachi;
        $this -> linkdiachi = $linkdiachi;

    }

}
?>