<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/giochieu.css">
</head>
<body>
    <br>    
               <?php 
                $ng = $modelngay -> GetNgayTheoID($_GET['ng']); 
                echo "
                <div style='border:5px solid black;text-align:center;border-radius:10px;'>
                <h3>".$ng -> GetThu()." | ".$ng -> GetNgay()."</h3>
                </div>
               " ?>
<ul class = "list-time-cinema">
    <?php
  #  $listgiochieu = $modelgiochieu -> ;
foreach($danhsachchinhanh as $cn){
    echo "
    <li class ='date-cinema' style = 'list-style:none;'>
    <div class = 'row lichchieuchinhanh' style ='float:left;'>
        <div class = 'col-md-4' style = ''>";
      echo"              <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title text-black' style='overflow: hidden;'>".$cn -> GetTenChiNhanh()."</h5>       
                               <p>".$cn -> GetDiaChi() ."</p>
                           </div>
                           
                            <div class='btn-card d-flex align-items-end justify-content-center'>
                                <a href='".$cn -> GetLinkDiaChi()."' class='btn btn-dark p-2 m-2 flex-grow-1' target ='_blank'>Địa Chỉ</a>
                            </div>
                        </div>
        </div> 
       <div class = 'col-md-8'>
            <div class='card phangio'>   
                <div class='card-body'>
                    <ul class ='item-phim-gio'>";
                    $ngay = $_GET['ng'];
                    $tphim = $_GET['tenphim'];
                    $phim = $phimmodel -> GetPhimDE($tphim);
                    $idngay = $modelngay -> GetNgayTheoID($ngay);
                    $listgiochieucn = $modelgiochieu -> GetListLichChieuTheoNgayCN($idngay ->GetIdNgay(),$cn -> GetIdChiNhanh(),$phim -> GetIdPhim()) ;
            foreach($listgiochieucn as $gc){
    
            echo"         <li>
                            <a href='maintam.php?nd=chonve&idgc=".$gc -> GetIDLC()."&user=".$_GET['user']."' class ='btn btn-dark gio-chieu'>".$gc -> GetGioChieu()."</a>
                        </li>";
            }     
    echo"
                    </ul>
                </div>
                </div>
            </div>
       
    </div>
    </li>    
    ";
}
 
    ?>
</ul>
    
</body>
</html>