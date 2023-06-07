<?php
    //Kiem tra tinh hop le ve do dai(<=50)
    function validateLenUp($up){
        return strlen($up)<=50;
    }

    //Kiem tra tinh hop le mail
    function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL)!=false?true:false;
    }

    //Kiem tra ten dang ki
    function existName($link, $name){
        $result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) 
        FROM tbl_user WHERE taikhoan = '".$name."'");
        $row = mysqli_fetch_row($result);
        mysqli_free_result($result);
        return $row[0]>0;
    }
    
?>