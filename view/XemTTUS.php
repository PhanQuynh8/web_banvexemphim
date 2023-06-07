<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <?php 
      if(isset($_GET['kq'])){
        if($_GET['kq'] == "tc"){
            echo "<script type='text/javascript'>alert('Đổi Thông Tin Thành Công');</script>";
        }
        else{
            echo "<script type='text/javascript'>alert('Đổi Thông Tin Thất Bại');</script>";
        }
      }
    ?>
        <div class = "row"> 
            <div class = "col-12">
                <div class = "card thongtinus">
                    <div class ="card-body">
                         <div class = "title"> <h3>Thông Tin User</h3></div>
                       <!--  btMd5-20221024T063417Z-001/btMd5/xulydoithongtin.php -->
        <form method="post" action="btMd5-20221024T063417Z-001/btMd5/xulydoithongtin.php">
            <br style="clear:both;">
             <div class="form-outline mb-4">
                <input type="text" id="HoTen" name="hoten" class="form-control" value="<?php echo $user -> GetTenUS() ?>" readonly  />
                <?php $user -> GetTenUS() ?>
                <label class="form-label" for="HoTen">Họ Tên</label>
            </div> 

            <div class="form-outline mb-4">
                <input type="text" id="TaiKhoan" name="taikhoan" class="form-control" value="<?php echo $user -> GetTaiKhoan() ?>"readonly />
                <label class="form-label" for="TaiKhoan">Tài Khoản</label>
            </div>
         
            <div class="form-outline mb-4">
                <input type="text" id="sodienthoai" name="sdt" class="form-control" value="<?php echo $user -> GetSDT() ?>"readonly />
                <label class="form-label" for="sodienthoai">Số Điện Thoại</label>
            </div>

            <div class="form-outline mb-4">
                <input type="email" id="Email" name="email" class="form-control" value="<?php echo $user -> GetEmail() ?>" readonly/>
                <label class="form-label" for="Email">Email</label>
            </div>

            <div class="img_row">
                <input type="submit" class="btn btn-dark btn-block mb-4" value="Xác Nhận">
                <input type="button" href="" id="SuaTT" class="btn btn-primary btn-block mb-4" onclick="khoathongtin()" value="Sửa Thông Tin">
            </div><br style="clear:both;"/>
            
           
        </form>
                    </div>  
                </div>
            </div>
        </div>
        <script>
            function khoathongtin(){
                var a = document.getElementsByClassName('form-control');
                    for(i = 0; i < a.length; i++){
                        if(a[i].getAttribute('name') == "taikhoan"){
                            continue;
                        }
                        else{
                            a[i].removeAttribute('readonly');
                        }
                      
                    }
            }
            
        </script>
</body>
</html>