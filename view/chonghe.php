<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/hangghemoi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class ="container">
        <div class ="row">
            <div class ="col-12 quytrinh">
                <ul class="cac-buoc">
                    <span class ="qt" > Chọn vé </span>
                    <span class ="qt" style="background-color: green"> Chọn ghế</span>
                    <span class ="qt"> Thanh Toán</span>
                </ul>
            </div>
        </div>
        <div class ="row thongtin-giohang">
            <div class="col-8 info-phim">
                    <div style="width: 140px;height: 200px;float: left;"  >
                        <img class ="rounded hinh-anh-phim" src ="<?php echo $phim -> GetHinhAnh() ?>" alt="phim" style="width: 140px;height: 200px;">

                    </div>                      
                    <div class ="thong-tin-ve-phim">
                        <h4 id = "ten-phim"><?php echo $phim -> GetTenPhim() ?></h4>  
                        <p>
                        <?php echo $ngay -> GetNgay()." ".($lichchieu -> GetGioChieu()) ?> <br> 
                            
                        <?php echo $chinhanh -> GetTenChiNhanh()."- Screen".$lichchieu -> GetRap() ?>
                        </p>    
                    </div>

                </div>
        </div>
        <div class ="row phancach">
        </div>
        <div class ="row ">
            <div class ="col-12">
                <h3 id = "title"> CHỌN GHẾ </h3>
                <br/>
                <div class ="legend-s">
                    <div class ="legend">  
                        <div class = "ghe-dang-chon"></div>
                        <p>Ghế Đã Bán</p>
                        </div>
                    </div>
                    <div class ="legend">
                        <div class = "ghe-trong"></div>
                        <p>GHẾ TRỐNG</p>
                    </div>
                    <div class ="legend">
                        <div class = "ghe-da-ban"></div>
                        <p>Ghế Đang Chọn</p>
                    </div> 
                </div>

                <div class ="khong-gian-ghe">
                    <div class ="screen">
                        SCREEN
                    </div>
                    <br/>
                    <div class ="cho-co-ghe">                   
                        <div class = "hang-ghe-container">
                            <table class="hang-ghe">
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "A-1" class = "so-ghe">A1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "A-2" class = "so-ghe">A2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="A-3" class = "so-ghe">A3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="A-4" class = "so-ghe">A4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "A-5" class = "so-ghe">A5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "A-6" class = "so-ghe">A6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "A-7" class = "so-ghe">A7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "A-8" class = "so-ghe">A8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "A-9" class = "so-ghe">A9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "A-10" class = "so-ghe">A10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "B-1" class = "so-ghe">B1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-2" class = "so-ghe">B2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-3" class = "so-ghe">B3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-4" class = "so-ghe">B4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-5" class = "so-ghe">B5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-6" class = "so-ghe">B6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-7" class = "so-ghe">B7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-8" class = "so-ghe">B8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-9" class = "so-ghe">B9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "B-10" class = "so-ghe">B10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "C-1" class = "so-ghe">C1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p ID = "C-2" class = "so-ghe">C2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="C-3" class = "so-ghe">C3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="C-4" class = "so-ghe">C4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "C-5" class = "so-ghe">C5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "C-6" class = "so-ghe">C6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "C-7" class = "so-ghe">C7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "C-8" class = "so-ghe">C8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "C-9" class = "so-ghe">C9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "C-10" class = "so-ghe">C10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "D-1" class = "so-ghe">D1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p ID = "D-2" class = "so-ghe">D2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="D-3" class = "so-ghe">D3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="D-4" class = "so-ghe">D4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "D-5" class = "so-ghe">D5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "D-6" class = "so-ghe">D6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "D-7" class = "so-ghe">D7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "D-8" class = "so-ghe">D8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "D-9" class = "so-ghe">D9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "D-10" class = "so-ghe">D10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "E-1" class = "so-ghe">E1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p ID = "E-2" class = "so-ghe">E2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="E-3" class = "so-ghe">E3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="E-4" class = "so-ghe">E4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "E-5" class = "so-ghe">E5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "E-6" class = "so-ghe">E6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "E-7" class = "so-ghe">E7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "E-8" class = "so-ghe">E8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "E-9" class = "so-ghe">E9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "E-10" class = "so-ghe">E10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "F-1" class = "so-ghe">F1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p ID = "F-2" class = "so-ghe">F2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="F-3" class = "so-ghe">F3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="F-4" class = "so-ghe">F4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "F-5" class = "so-ghe">F5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "F-6" class = "so-ghe">F6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "F-7" class = "so-ghe">F7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "F-8" class = "so-ghe">F8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "F-9" class = "so-ghe">F9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "F-10" class = "so-ghe">F10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "G-1" class = "so-ghe">G1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p ID = "G-2" class = "so-ghe">G2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="G-3" class = "so-ghe">G3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="G-4" class = "so-ghe">G4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "G-5" class = "so-ghe">G5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "G-6" class = "so-ghe">G6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "G-7" class = "so-ghe">G7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "G-8" class = "so-ghe">G8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "G-9" class = "so-ghe">G9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "G-10" class = "so-ghe">G10</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr style ="width: 25px;line-height:25px;">
                                    <td>
                                    <div class = "ghe">
                                        <p id = "H-1" class = "so-ghe">H1</p>
                                    </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "H-2" class = "so-ghe">H2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id ="H-3" class = "so-ghe">H3</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id="H-4" class = "so-ghe">H4</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "H-5" class = "so-ghe">H5</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "H-6" class = "so-ghe">H6</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id= "H-7" class = "so-ghe">H7</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "H-8" class = "so-ghe">H8</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "H-9" class = "so-ghe">H9</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class = "ghe">
                                            <p id = "H-10" class = "so-ghe">H10</p>
                                        </div>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                    <br/>
                    <form action="xulychonghe.php?idgc=<?php echo $_GET['idgc']?>&user=<?php echo $_GET['user']?>&sln=<?php echo $_GET['sln']?>&slb=<?php echo $_GET['slb']?>&slv=<?php echo $_GET['slv']?>" method="post">
                    <div class = "col-xs-2">
                        <input type="text" id ="ttmaghe" name = "maghe" class="form-control" value ="" >
                    </div>
                    <div class ="nut-ghe">
                        <input type = "button" class = "btn btn-danger nut-dat-xn" onclick="ChonLai()" value="Chọn Lại">
                        <input type = "button" class = "btn btn-danger nut-dat-xn"onclick="XacNhanChon()" value="Xác Nhận Chọn">
                        <input type = "submit" class = "btn btn-danger nut-dat-ghe" value="Đặt Ghế">                        
                    </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
    <script>
     var ghe = Array.from(document.getElementsByClassName('so-ghe'));
     var mau ="none";
     for(let i = 0 ;i < ghe.length; i++){
        ghe[i].addEventListener('click', function(){
            var divcha = ghe[i].parentElement;

            if(mau == "none"){
                divcha.style.backgroundColor = "red";
                mau = "red";

                
            }
            else{
                divcha.style.backgroundColor = "gray";
                mau = "none";
            }
            
        })
     }
     function ChonLai(){
        for(let i = 0; i < ghe.length; i++){
           if( ghe[i].parentElement.style.backgroundColor == "red"){
            ghe[i].parentElement.style.backgroundColor = "gray"
           }
        }
        document.getElementById('ttmaghe').value = "";
     }
     function XacNhanChon(){
        var t  = "";
        for(let i = 0; i < ghe.length; i++){
           if( ghe[i].parentElement.style.backgroundColor == "red"){
                t += ghe[i].getAttribute('id') + "/";
           }
        }

        document.getElementById('ttmaghe').value = t.substring(0,t.length - 1)
     }

     
    
    </script>
</body>
</html>
</body>
</html>