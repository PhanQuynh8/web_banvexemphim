<?php
#session_start();
    require_once ("db_module.php");
    require_once ("validate_module.php");
    require_once ("../../models/model/user_module.php");

    $link =NULL;
    taoKetNoi($link);
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repass'])){
        $valid = ($_POST['password'] == $_POST['repass']);
        $valid = $valid && validateLenUp($_POST['username']) && validateLenUp($_POST['repass']);
        $valid = $valid && validateEmail($_POST['email']);
        
     #   $valid = $valid && ($_SESSION['captcha'] == $_POST['captcha']);
        if($valid){
            if(existName($link, $_POST['username'])){
                giaiPhongBoNho($link, true);
                header("Location: ../../dangki.php?msg=duplicate&username=".$_POST['username']."&email=".$_POST['email']);
            } else {
                $va = count(GetListUser()) + 1;
                $ff = str_pad($va, 3, '0', STR_PAD_LEFT);
                $idve = "KH".$ff;
                $kq = dangKi($link,$idve,$_POST['hoten'],$_POST['sdt'] ,$_POST['username'], $_POST['password'], $_POST['email']);
                giaiPhongBoNho($link, true);
                if($kq){
                    header("Location: ../../dangki.php?msg=done");
                }
                else{
                    header("Location: ../../dangki.php");
                }
                
            }
        } else {
            giaiPhongBoNho($link, true);
            header("Location: ../../dangki.php?msg=unvalid-data&username=".$_POST['username']."&email=".$_POST['email']);   
        }
    }
    /*{
        //$resultCo = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_user WHERE
        //username = '".$_POST['username']."'");

        $result = chayTruyVanKhongTraVeDL($link, 
            "INSERT INTO tbl_user VALUES 
            (NULL, '".mysqli_real_escape_string($link, $_POST['username'])."', '".md5($_POST['pwd'])."')");
        giaiPhongBoNho($link, NULL);
        if($result)
            {header("Location: dangki.php?msg=done");
                
                echo"<div>Password cua ban duoc luu la: '".md5($_POST['pwd'])."'</div>";}
        else    header("Location: dangki.php?msg=error");
    }
    else header("Location: dangki.php");*/
?>