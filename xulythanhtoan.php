<?php
require_once("models/model/user_module.php");
require_once("models/model/LichChieuModel.php");
require_once("models/model/PhimModel.php");
require_once("models/model/VeModel.php");
$va = count(GetToanBoVe()) + 1;
$ff = str_pad($va, 3, '0', STR_PAD_LEFT);
$idve = "VE".$ff;
$lichchieumodel = new LichChieuModel();
$phimmodel = new PhimModel();

$iduser = GetUserTheoUserName($_GET['user']) -> GetIDUS();
$idlc = $_GET['idgc'];
$idphim = $phimmodel -> GetPhimDE($_POST['tenphim']) -> GetIdPhim();
$ghes = $_POST['ghe'];
$slve = $_POST['soluongve'];
$slnuoc = $_POST['soluongnuoc'];
$slbap = $_POST['soluongbap'];
$thanhtien = $_POST['thanhtien'];

#$ve = new ve($idve,$iduser,$idphim,$idlc,$ghes,$slve,$slbap,$slnuoc,$thanhtien);
$kq = AddNewVe($idve,$iduser,$idphim,$idlc,$ghes,$slve,$slbap,$slnuoc,$thanhtien);
if($kq){
    echo "<script type='text/javascript'>alert('Thanh Toán Thành Công');</script>";
    header("Location: maintam.php?nd=tc&user=".$_GET['user']."&kq=tc");

}
else{
    echo "<script type='text/javascript'>alert('Thanh Toán Thất bại');</script>";
    header("Location: maintam.php?nd=tc&user=".$_GET['user']."&kq=tb");
}
?>