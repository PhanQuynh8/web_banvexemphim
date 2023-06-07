<?php
class user{
    private $id_user;
    private $tenuser;
    private $taikhoan;
    private $matkhau;
    private $sdt;
    private $email;  


    public function SetTenUS($tenuser){
        $this -> tenuser = $tenuser;
    }
    public function SetTaiKhoan($taikhoan){
        $this -> taikhoan = $taikhoan;
    }
    public function SetMatKhau($matkhau){
        $this -> matkhau = $matkhau;
    }
    public function SetSDT($sdt){
        $this -> sdt = $sdt;
    }
    public function SetEmail($email){
        $this -> email = $email;
    }
    
    public function GetIDUS(){
        return $this -> id_user;
    }
    public function GetTenUS(){
        return $this -> tenuser;
    }
    public function GetTaiKhoan(){
        return $this -> taikhoan;
    }
    public function GetMatKhau(){
        return $this -> matkhau;
    }
    public function GetSDT(){
        return $this -> sdt;
    }
    public function GetEmail(){
        return $this -> email;
    }
    
    

   
    public function __construct($id_user,$tenuser, $taikhoan, $matkhau, $sdt, $email)
    {
        
        $this -> id_user =$id_user;
        $this -> tenuser = $tenuser;
        $this -> taikhoan = $taikhoan;
        $this -> matkhau= $matkhau;
        $this -> sdt = $sdt;
        $this -> email = $email;
       
    }

}
?>