<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/viewphimdetailcss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <?php
    $title = array();
    array_push($title,"ID","Tên Phim","HA","Phân Loại","Đạo Diễn","Diễn Viên","Thể Loại","Khởi Chiếu","Thời lượng");
    $titlephim = array();
    array_push($titlephim,
    $phimdangtim->GetIdPhim(),
    $phimdangtim->GetTenPhim(),
    $phimdangtim->GetHinhAnh(),
    $phimdangtim->GetPhanLoai(),
    $phimdangtim->GetDaoDien(),
    $phimdangtim->GetDienVien(),
    $phimdangtim->GetTheLoai(),
    $phimdangtim->GetKhoiChieu(),
    $phimdangtim->GetThoiLuong()." Phút");
    echo  "<div class = 'row'>";
        echo "      
            <div class ='col-4'>
                <img src = '".$phimdangtim -> GetHinhAnh()."' alt= '...'>                
            </div>                    
            <div class = 'col-8'> 
            <h1>".$phimdangtim -> GetTenPhim()."</h1>
            <ul class ='phim-detail'>
            ";  
        for($i = 0; $i < 9; $i++){
            if($i == 0 ||$i == 2){
                continue;
            }
            else{
                echo "<li>
                <span class ='col-left'>".$title[$i].":</span>
                <span class ='col-right phan-loai'>".$titlephim[$i]."</span>
            </li>";
            }          
        }
        echo "
        <div class ='button--teal'>                    
        <a class = 'btn btn-dark trailer' href='".$phimdangtim->GetTrailer()."' target = '_blank'> Xem Trailer</a>
        <a class = 'btn btn-dark mua-ve'  href='#vl'> Mua Vé</a>
        </div> 
        ";
              
    echo "      </ul>
            </div>  
        </div>";
    ?>
    
</body>
</html>