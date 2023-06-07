<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href= "css/trangmuavemoicss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
   <?php
    
   ?>
      
        <div class ="row">
            <div class ="col-12 quytrinh">
                <ul class="cac-buoc">
                    <span class ="qt" style="background-color: green"> Chọn vé </span>
                    <span class ="qt"> Chọn ghế</span>
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
        <div class ="row chonghe">
            <div class ="col-12 sl-ve">

            <form action="xulychonve.php?idgc=<?php echo $_GET['idgc']?>&user=<?php echo $_GET['user']?>" method = "post">
                <table class ="table table-borderless bang-ve">
                    <thead>
                    <tr>
                        <th> Vé</th>
                        <th> Giá </th>
                        <th> Số lượng</th>
                        <th>Tổng</th>
                    </tr>
                    </thead>
                    <tr>
                        <td><img src="../picture/Screenshot 2022-11-15 010951.png" style="width: 50px"></td>
                        <td> 85000</td>
                        <td> 
                            
                                <input type ="button" class = "btn btn-success" style="float:left;" id= "cong-v" value = "+" onclick="congsl('sl-v','tongtien-v')">
                                <input type="text"   name = "sl-ve" class = " nhapdulieu" style="width:50px;" id ="sl-v" value="0">
                                <input type="button"  class = "btn btn-success" style="float:left;" id = "tru-v" value = " - " onclick="giamsl('sl-v','tongtien-v')">
                            
                        </td>
                        <td>
                            <input type="text" name ="tongtien-ve" id ="tongtien-v" value="0">
                        </td>
                    </tr>
                    <thead>
                        <tr>
                            <th> Bắp</th>
                            <th> Giá </th>
                            <th> Số lượng</th>
                            <th>Tổng</th>
                        </tr>
                    </thead>
                        <tr>
                            <td><img src="../picture/Screenshot 2022-11-15 011033.png" style="width: 50px"></td>
                            <td> 85000</td>
                            <td> 
                                
                                    <input type ="button" class = "btn btn-success" style="float:left;" id= "cong-b" value = "+" onclick="congsl('sl-b','tongtien-b')">
                                    <input type="text"  name = "sl-bap" class = " nhapdulieu" style="width:50px;" id ="sl-b" value="0">
                                    <input type="button"  class = "btn btn-success" style="float:left;" id = "tru-b" value = " - " onclick="giamsl('sl-b','tongtien-b')">
                                
                            </td>
                            <td>
                                <input type="text" name ="tongtien-bap" id ="tongtien-b" value="0">
                            </td>
                        </tr>
                        <thead>
                            <tr>
                                <th> Nước</th>
                                <th> Giá </th>
                                <th> Số lượng</th>
                                <th>Tổng</th>
                            </tr>
                            </thead>
                            <tr>
                                <td><img src="../picture/Screenshot 2022-11-15 011059.png" style="width: 50px"></td>
                                <td> 85000</td>
                                <td> 
                                   
                                        <input type ="button" class = "btn btn-success" style="float:left;" id= "cong-n" value = "+" onclick="congsl('sl-n','tongtien-n')">
                                        <input type="text"   name = "sl-nuoc" class = " nhapdulieu" style="width:50px;" id ="sl-n" value="0">
                                        <input type="button"  class = "btn btn-success" style="float:left;" id = "tru-n" value = " - " onclick="giamsl('sl-n','tongtien-n')">
                                  
                                </td>
                                <td>
                                    <input type="text" name ="tongtien-nuoc" id ="tongtien-n" value="0">
                                </td>
                            </tr>
                   
                </table>
                <div>
                <input type="submit" class ="btn btn-danger chon-ghe"  id  = "chuyen" onclick="dieukien()" value="Chọn Ghế">
                </div>
            </form>
            </div>
   
    <script>
        
        function congsl(sl,tien){
            var a = parseInt(document.getElementById(sl).value) + 1;
            document.getElementById(sl).value = a;       
            document.getElementById(tien).value = a * 85000;
            var ti =  a * 85000;
        }
        function giamsl(sl,tien){
            if(parseInt(document.getElementById(sl).value) > 0){
                var a = parseInt(document.getElementById(sl).value) - 1;
            document.getElementById(sl).value = a;
            document.getElementById(tien).value = a * 85000;
         }
        }
        function dieukien(){
            if(parseInt(document.getElementById('sl-t').value) == 0 || parseInt(document.getElementById('sl-v').value) == 0){
                alert("chưa có số lượng vé");
            }
            else{
                document.getElementById('chuyen').href = "hangghe.html";
            }
        }
        function addgiohang(){
            var html = '<div style="background:red; margin: 5px; padding:5px; color:#FFF">'+title+'</div>';
        document.getElementById('gh').insertAdjacentHTML('beforeend', html);
        }
    
    </script>

    
</body>
</html>