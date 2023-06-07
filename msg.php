<style>
        body{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 13px;}
        .msg {
            width: 450px;
            margin: 0px auto;
            padding: 5px;
            text-align: center;
        }
        form{width: 300px; margin:0px auto;}
        .cls_caption{width: 150px; float:left; font-weight: bold; text-align: left !important;}
        .cls_input{width:150px; float:left;}
        .img_row{text-align: center; padding:5px auto;}
        .frm_row{margin-top: 5px;}
        #menu{margin-bottom: 100px; text-align: right;}
    </style>
<?php
if(isset($_GET['msg'])){
    switch ($_GET['msg']){
        case "done": echo "<div class='msg' style='background-color:green; color:white;'>
        Success registing </div>"; break;
        case "unvalid-data": echo"<div class='msg' style='background-color:red; color:white;'>
        Wrong input form </div>"; break;
        case "duplicate": echo"<div class='msg' style='background-color:yellow; color:white;'>
        Please choose other name </div>"; break;
        case "login-fail": echo"<div class='msg' style='background-color:orange; color:white;'>
        Please check again :) </div>"; break;
    }
}
?>
