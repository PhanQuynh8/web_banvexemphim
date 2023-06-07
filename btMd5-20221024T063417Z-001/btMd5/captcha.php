<?php
session_start();
//Tạo ảnh captcha và hiển thị lên trình duyệt:
    require_once("funcCap.php");
    setPNGHeader();
    $alphabet = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789";
    //makePNGCaptcha(makeCaptcha($alphabet, 8));
    $_SESSION['captcha'] = makeCaptcha($alphabet, 8);
    makePNGCaptcha($_SESSION['captcha']);
?>