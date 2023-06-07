<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/csstam.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <?php
       if(isset($_GET['kq'])){
        if($_GET['kq'] == "tc"){
            echo "<script type='text/javascript'>alert('Thanh Toán Thành Công');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Thanh Toán Thất Bại');</script>";
        }
      }
    if(isset($_GET['tt']))
        echo "<div id = 'title-phimdangchieu'><h1>".$_GET['tt']."</h1></div>";
        else
        echo "<div id = 'title-phimdangchieu'><h1>Tất Cả Phim</h1></div>";
        foreach($phims as $phim){
            echo "
            <div class = 'row tatca' style ='float:left; padding-top:10px'>
                <div class = 'col-lg-12'>";
              echo"              <div class='card'>
                                    <div class='image-wrapper'>
                                    <img src='".$phim -> GetHinhAnh()."' alt='...'>
                                    </div>
                                    <div class='card-body' >
                                  
                                        <h5 class='card-title text-black' style='overflow: hidden;'>".$phim -> GetTenPhim()."</h5>                                 
                                        </div>
                                   <div class='card-body'>
                                        <h6 class='card-title text-black' >KHỞI CHIẾU: ".$phim -> GetKhoiChieu()."</h6> 
                                    </div>
                                    <div class='btn-card d-flex align-items-end justify-content-center'>
                                        <a href='maintam.php?tenphim=".$phim -> GetTenPhim()."&nd=phimchitiet&user= ".$_GET['user']."' class='btn btn-dark p-2 m-2 flex-grow-1'>MUA VÉ</a>
                                    </div>
                                </div>";
       echo"             </div>
            </div>    
            ";
        }
    ?>
</body>
</html>