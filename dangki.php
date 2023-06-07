<html>
    <head>
        <meta http-equiv="Content-Type" content = "text/html; charset=utf-8" />
        <title>Regist</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="css/dangki.css">

    </head>
    <body>
        <?php //include_once "index.php";
        /*if(isset($_GET['msg']))
        {
            if($_GET['msg']=="done")
            echo "<div style='color:navy; background-color:cyan; padding:5px;'>Dang ki thanh cong</div><br/>";
            else
            echo "<div style='color:navy; background-color:pink; padding:5px;'>Dang ki that bai</div>";
        }*/
        ?>
        <!--<img src="BangMau.png" width="250"> -->
        <div class = "card">
            <div class = "card-body">
            <div class = "title"> <h3>Đăng Ký</h3></div>
        <form method="post" action="btMd5-20221024T063417Z-001/btMd5/xulydangki.php">
        
            <br style="clear:both;">
                <div class="form-outline mb-4">
                    <input type="text" id="form2Example1" name="username" class="form-control" value="<?php echo isset($_GET['username'])?$_GET['username']:"";?>" />
                    <label class="form-label" for="form2Example1">Tài Khoản</label>
                </div> 
                <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" name="hoten" class="form-control" />
                        <label class="form-label" for="form2Example1"> Họ Tên</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="form2Example1" name="password" class="form-control" />
                    <label class="form-label" for="form2Example1">Mật Khẩu</label>
                </div>
                <div class="form-outline mb-4">
                        <input type="password" id="form2Example1" name="repass" class="form-control" />
                        <label class="form-label" for="form2Example1"> Nhập Lại Mật Khẩu</label>
                </div>
                <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" name="sdt" class="form-control" />
                        <label class="form-label" for="form2Example1"> Số Điện Thoại</label>
                </div>
                <div class="form-outline mb-4">
                        <input type="email" id="form2Example1" name="email" class="form-control" value="<?php echo isset($_GET['email'])?$_GET['email']:"";?>"/>
                        <label class="form-label" for="form2Example1"> Email</label>
                </div>
            <div class="img_row">
                <input type="submit" class="btn btn-dark btn-block mb-4" value="Đăng Ký">
                <input type="reset" class="btn btn-primary btn-block mb-4" value="Reset"/>
                
            </div><br style="clear:both;"/>

            <!--<label for="username">Ten dang nhap</label>
            <input type="text" name="username"><br/>
            <label for="pwd">Mat khau</label>
            <input type="text" name="pwd"><br/>
            <input type="submit" value="Dang ki">-->
        </form>
        </div>
        </div>
        <?php include_once "msg.php"; ?>
    </body>
</html>