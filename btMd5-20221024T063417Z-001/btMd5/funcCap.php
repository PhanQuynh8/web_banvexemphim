<?php
//1. Tạo bảng lưu ký tự: $alphabet;
//2. Lấy ngẫu nhiên một lượng ký tự từ $alphabet bằng hàm: makeCaptcha($source, $len) = $captch
//3. Lưu $captcha vào session hoặc database để kiểm tra
//4. Vẽ xâu thành ảnh, hiển thị bằng hàm makeCaptcha($captcha); trước đó cần thiết lập đặt chuẩn cho tệp PNG bằng hàm setPNGHeader()
//5. Đối chiếu xâu input và $captch đã lưu

function setPNGHeader(){
    header("Content-Type: image/png");
    header("Expires: -1");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");
}
function makeCaptcha($source, $len){
    $c = "";
    for($i=0; $i<$len; $i++)
        $c.=substr($source, rand(0, strlen($source)-1), 1);
    return $c;
}
function makePNGCaptcha($captcha){
    $img = imagecreate(100,50);
    //$img = imagecreatefrompng("Schedule.png");
    imagecolorallocate($img, 255, 255, 0);
    $color = imagecolorallocate($img, 0, 0, 0);
    //imagestring($img, 4, 40, 15, $captcha, $color);
    imagettftext($img, 18, 10, 8, 40, $color, 'MervaleScript.ttf', $captcha);
    imagepng($img);
    imagedestroy($img);
}
?>