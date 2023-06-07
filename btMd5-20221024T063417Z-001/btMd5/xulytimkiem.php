<?php
    require_once("../../ketnoidulieu/db_module.php");
    require_once ("../../models/model/PhimModel.php");
    
    $phimmodel = new PhimModel();
    $phim = $phimmodel -> GetPhimDE($_POST['ndtimkiem']);
    $user = $_POST['user'];
    header("Location: maintam.php?user=".$user."&phim=".$phim -> GetTenPhim()."&nd=phimchitiet");
?>