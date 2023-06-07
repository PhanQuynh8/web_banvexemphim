<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/thanhngaycss.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<h3 style="text-align:center;" id="vl">VUI LÒNG CHỌN THÔNG TIN VÉ  </h3>
<hr class="my-4">
<div class ="flex-row khungthoigianngay">
    <div class = "col-12 cacngay">
        <div id="carouselExampleControls" class="carousel slide d-none d-md-block" data-ride="carousel">
        
                <div class="carousel-inner">
                  
                    
                    <?php
                        for($i = 0; $i <= count($danhsachngay); $i+=5){
                            if($i == 0){
                        echo"    
                        <div class='carousel-item active'>
                                             
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i]->GetThu()." <br> ".$danhsachngay[$i] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i +1 ] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i + 1]->GetThu()." <br> ".$danhsachngay[$i + 1] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i + 2] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i + 2]->GetThu()." <br> ".$danhsachngay[$i + 2] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i  +3] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i  + 3]->GetThu()." <br> ".$danhsachngay[$i  +3] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i + 4] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i + 4]->GetThu()." <br> ".$danhsachngay[$i  +4] -> GetNgay()." </a>

                        </div>";
                            }
                                else if($i == count($danhsachngay)){
                                break;
                            }
                            echo"    
                                <div class='carousel-item'>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i +1 ] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i + 1]->GetThu()." <br> ".$danhsachngay[$i + 1] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i + 2] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i + 2]->GetThu()." <br> ".$danhsachngay[$i + 2] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i  +3] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i  + 3]->GetThu()." <br> ".$danhsachngay[$i  +3] -> GetNgay()." </a>
                                <a class ='btn btn-dark' href='maintam.php?nd=phimchitiet&ng=".$danhsachngay[$i + 4] -> GetNgay()."&tenphim=".$phimdangtim -> GetTenPhim()."&user=".$_GET['user']."' >".$danhsachngay[$i + 4]->GetThu()." <br> ".$danhsachngay[$i  +4] -> GetNgay()." </a>
                                
    
                                </div>";
                        }
                    ?>
                
                   
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</div>
<br style ="clear:both;">
    <script>
    </script>
</body>
</html>