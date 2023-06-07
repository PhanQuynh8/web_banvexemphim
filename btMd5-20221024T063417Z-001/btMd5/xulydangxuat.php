<?php
session_start();

require_once "db_module.php";
require_once "../../models/model/user_module.php";

$link = NULL;
taoKetNoi($link);

if(dangXuat()){
    giaiPhongBoNho($link, true);
    header ("Location: ../../dangnhap.php");//Tuy TH
} else{
    giaiPhongBoNho($link, true);
    header("Content-type: text/html; charset=utf8");
    echo "You did not login!";
}
?>