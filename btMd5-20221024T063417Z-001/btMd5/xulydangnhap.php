<?php
    require_once ("db_module.php");
    require_once ("../../models/model/user_module.php");
    
    if(isset($_POST['username']) && isset($_POST['password'])){
            $link =NULL;
            taoKetNoi($link);
            if(dangNhap($link, $_POST['username'], $_POST['password'])){
                giaiPhongBoNho($link, true);
                header("Location: ../../maintam.php?&user=".$_POST['username'].""); //Phan biet khach or ad
            } else {
                giaiPhongBoNho($link, true);
                header("Location: dangnhap.php?msg=login-fail");
            }
        } else {giaiPhongBoNho($link, true);
        header("Location: dangnhap.php");}
        
        /*$result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) FROM tbl_user WHERE
        username = '".$_POST['username']."' AND password = '".md5 ($_POST['pwd']) ."'");
        giaiPhongBoNho($link, NULL);
        if(mysqli_fetch_row($result)[0] > 0)
            header("Location: dangnhap.php?msg=done");
        else    header("Location: dangnhap.php?msg=error");
    }
    else header("Location: dangnhap.php");*/
?>