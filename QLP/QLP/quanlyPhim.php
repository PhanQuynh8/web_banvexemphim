<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/csstam.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    
<?php
    session_start();
    include_once('msg.php')

?>
    <div class='card col-12 col-sm-6 col-md-4 col-lg-3' style='height:200px'>
        <a href='themPhim.php' class='btn btn-primary'>Thêm phim</a>
    </div>
    <?php
    require_once('PhimModel.php');
    require_once('thayPhim.php');
    $a = new PhimModel();
    $data=$a -> GetListPhim();//??????
    echo "<div class='row'>";
    foreach($data as $phim){
        echo 
        "<div class='card col-12 col-sm-6 col-md-4 col-lg-3' >
        <img class='card-img-top' src='".$phim->GetHinhAnh()."' alt=''  style=''>
        <div class='card-body'>
            <h4 class='card-title'>".$phim->GetTenPhim()."</h4>
            <p class='card-text'>
                Đạo diễn: ".$phim->GetDaoDien()."<br/>
                Thể loại: ".$phim->GetTheLoai()."<br/>
                Thời lượng: ".$phim->GetThoiLuong()."<br/>
                Tình trạng: ".$phim->GetTinhTrangPhim()."
            </p>
            <a href='thayPhim.php?idPhim=".$phim->GetIdPhim()."' class='btn btn-primary' >Sửa</a>
            </div>
        </div>";
    }echo "</div>";        
    ?>
    <div>
        <a href='../btMd5-20221024T063417Z-001/btMd5/xulydangxuat.php'>LOG OUT!</a>
    </div>
</div>
</body>
</html>