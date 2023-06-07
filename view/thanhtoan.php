<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/thanhtoan.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div class ="row">
            <div class ="col-12 quytrinh">
                <ul class="cac-buoc">
                    <span class ="qt" > Chọn vé </span>
                    <span class ="qt" > Chọn ghế</span>
                    <span class ="qt" style="background-color: green"> Thanh Toán</span>
                </ul>
            </div>
        </div>
            <form action="xulythanhtoan.php?idgc=<?php echo $_GET['idgc']?>&user=<?php echo $_GET['user']?>" method="post">
            <div class="row thanhtoan">
                <div class="col-12 giohang ">
                   
                        <h4>Thông Tin Mua Vé</h4>
                        <hr color="white">
                        Tên Phim: <input type="text" name ="tenphim" class = "form-control" value="<?php echo $phim -> GetTenPhim() ?>">
                        Rạp/Cinema: <input type="text" name ="rap" class = "form-control" value="<?php echo $lichchieu -> GetRap() ?>">
                        Ngày/Date: <input type="text" name ="ngay" class = "form-control" value="<?php echo $ngay -> GetNgay() ?>">
                        Suất/Seat: <input type="text" name ="ghe" class = "form-control" value="<?php echo $_GET['mg'] ?>">
                       
                        Số Lượng Vé: <input type="text" name ="soluongve" class = "form-control" value="<?php echo $_GET['slv'] ?>">
                        Số Lượng Nước: <input type="text" name ="soluongnuoc" class = "form-control" value="<?php echo $_GET['sln'] ?>">
                        Số Lượng Bắp: <input type="text" name ="soluongbap" class = "form-control" value="<?php echo $_GET['slb'] ?>">
                        Thành Tiền:<input type="text" name ="thanhtien" class = "form-control" value="<?php    $tongtien = ($_GET['slv'] + $_GET['slb'] + $_GET['sln']) * 85000; echo $tongtien;?>">
                    </div>
                <br/>
                <div class="col-12 thanhtoantien">
                    <div class="col-6" >
                    <table class=" col-6 table table-borderless bangtt">
                        <h5>THANH TOAN</h5>
                        <div><input class="col-1 " type="radio" id="momo" name="drone" value="Momo" checked>MoMo</div> 
                        <div><input class="col-1" type="radio" id="the" name="drone" value="thetindung"  checked>Thẻ tín dụng<div>          
                    </table>
                 </div>
                </div>                
             </div>
             <div class="col-12 btn right">
                <input type="submit" class ="btn btn-danger" id="thanhtoan" value="Thanh Toán">
             </div>
             </form>
        </div>
    </body>
</html>