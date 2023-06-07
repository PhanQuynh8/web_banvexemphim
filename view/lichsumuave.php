<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href= "css/lichsumuave.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="lichsu">
        <div class="lichsu_top">
            <h3 class="text-center">Lịch sử mua vé</h3>
        </div>
        <div class="lichsu_text">
        <?php
         foreach($ve as $v){
        $lichchieu = $modelgiochieu -> GetLichChieuByID($v -> GetIDLC());
        $chinhanh = $modelchinhanh -> GetChinhNhanhID($lichchieu -> GetIDCN());
        $phim = $this -> modelphim -> GetPhimByID($v -> GetIDPHIM());
        $ngay = $modelngay -> GetNgayTheoIDreal($lichchieu -> GetIDNGAY());
            echo "
            <div class='row'>
                <div class='col-3 text_left'>
                <img class ='rounded hinh-anh-phim' src ='".$phim -> GetHinhAnh()."' alt='phim' style='width: 240px;height: 300px;'>
                </div>
                <div class='col-9 text_right'>
                    <ul>
                    <li><h4>TÊN PHIM:".$phim -> GetTenPhim()." </h4></li>
                    <li><h4>GIỜ CHIẾU: ".$lichchieu -> GetGioChieu()." </h4></li>
                    <li><h4>NGÀY CHIẾU: ".$ngay -> GetNgay()."</h4></li>
                    <li><h4> RẠP: ".$chinhanh -> GetTenChiNhanh()."-".$lichchieu -> GetRap()."</h4></li>
                    <li><h4>GHẾ:".$v -> GetGhe()." </h4></li>
                    <li><h4>SỐ LƯỢNG VÉ:".$v -> GetVe()." </h4></li>
                    <li><h4> SỐ LƯỢNG NƯỚC:".$v -> GetBap()." </h4></li>
                    <li><h4>SỐ LƯỢNG BẮP: ".$v -> GetNuoc()."</h4></li>
                    <li><h4>Tổng Tiền: ".$v -> GetTT()."</h4></li>                  
                    </ul>
                </div>
            </div>
        , <hr>
";
         }   



        ?>
        </div>
    </div>
</body>
</html>

