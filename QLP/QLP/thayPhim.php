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
<?php
require_once("phim.php");
require_once("PhimModel.php");
//require_once ("validate_module.php");
//require_once ("user_module.php");

if(isset($_GET['idPhim'])){
    $phim = GetPhim($_GET['idPhim']);
    {
        echo "<body data-spy='scroll' data-target='.navbar' data=offfset='50'>
        <div class='container'>

        <form method='post' action ='xulySuaPhim.php'>
        <div class='row'>
            <input type='hidden' name='idPhim' value='".$_GET['idPhim']."'>
            <nav class='navbar navbar-expand-sm bg-green navbar-dark fixed-top'>
                <ul class='navbar-nav'>
                    <li><a href='#ten'>Tên và hình ảnh</a></li>
                    <li><a href='#sanxuat'>Sản xuất</a></li>
                    <li><a href='#noidung'>Nội dung chi tiết</a></li>
                    <li><a href='#trinhchieu'>Trình chiếu</a></li>
                    <li><input type='submit' value='Luu thay doi phim'></li>
                </ul>
            </nav></div>
            <!--Section-->
            <div class='row'>
            <div id='ten'>
                <h2>Tên và hình ảnh</h2>
                <p>
                    <label for='tenphim'>Tên phim:</label>
                    <input type='text' name='tenphim' value='".$phim->GetTenPhim()."'><br/>
                    <label for='hinhanhphim'>Ảnh phim:</label>
                    <input type='text' name='hinhanhphim' value='".$phim->GetHinhAnh()."'><br/>
                </p>
            </div>
            </div>
    
            <div class='row'>
            <div id='sanxuat'>
                <h2>Sản xuất</h2>
                <p>
                <label for='daodien'>Đạo diễn:</label>
                <input type='text' name='daodien' value='".$phim->GetDaoDien()."'><br/>
            <label for='dienvien'>Diễn viên:</label>
            <input type='text' name='dienvien' value='".$phim->GetDienVien()."'><br/>
                </p>
            </div>
            </div>
    
            <div class='row'>
            <div id='noidung'>
                <h2>Nội dung</h2>
                <p>
                    <label for='phanloai'>Phân loại:</label>
                    <input type='text' name='phanloai' value='".$phim->GetPhanLoai()."'><br/>
                    <label for='theloai'>Thể loại:</label>
                    <input type='text' name='theloai' value='".$phim->GetTheLoai()."'><br/>
                    <label for='trailer'>Trailer:</label>
                    <input type='text' name='trailer' value='".$phim->GetTrailer()."'><br/>
                </p>
            </div>
            </div>
    
            <div class='row'>
            <div id='trinhchieu'>
                <h2>Trình chiếu</h2>
                <p>
                    <label for='khoichieu'>Khởi chiếu:</label>
                    <input type='date' name='khoichieu' value='".$phim->GetKhoiChieu()."'><br/>
                    <label for='thoiluong'>Thời lượng (phút):</label>
                    <input type='number' name='thoiluong' min='50' max='200' value='".$phim->GetThoiLuong()."'><br/>
    
                    <label for='tinhtrangphim'>Trạng thái:</label><br/>
                    <select name='tinhtrangphim' value='".$phim->GetTinhTrangPhim()."'>
                        <option value='dachieu'>Đã chiếu</option>
                        <option value='dangchieu'>Đang chiếu</option>
                        <option value='sapchieu'>Sắp chiếu</option>
                    </select>
                </p>
            </div>   
            </div>   
            
        </form>
        </div>
    </body>";
    }
}
?>
</body>