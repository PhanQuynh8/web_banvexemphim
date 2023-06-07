<html>
    <head>
        <meta http-equiv="Content-Type" content = "text/html; charset=utf-8" />
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
     <?php
       // require_once "index.php";
        /*if(isset($_GET['msg']))
        {
            if($_GET['msg']=="done")
                echo "<div style='color:navy; background-color:cyan; padding:5px;'>Dang nhap thanh cong</div>";
            else
            echo "<div style='color:navy; background-color:pink; padding:5px;'>Dang nhap that bai</div>";
        }*/
        ?>
        <div class = "card">
            <div class ="card-body">
                <div class = "title"> <h3>Login</h3></div>
        <form method="post" action="btMd5-20221024T063417Z-001/btMd5/xulydangnhap.php">
            <br style="clear:both;">
             <div class="form-outline mb-4">
                <input type="text" id="form2Example1" name="username" class="form-control" />
                <label class="form-label" for="form2Example1">Tài Khoản</label>
            </div> 

            <div class="frm_row">
                <input type="password" id="form2Example1" name="password" class="form-control" />
                <label class="form-label" for="form2Example1">Mật Khẩu</label>
            </div><br style="clear:both;"/> 
         
            <div class="img_row">
                <input type="submit" class="btn btn-dark btn-block mb-4" value="Đăng Nhập">
                <input type="reset" class="btn btn-primary btn-block mb-4" value="Reset"/>
                <a class ="btn btn-primary btn-block mb-4" href= "dangki.php">Regist</a>
            </div><br style="clear:both;"/>
        
            <!--<label for="username">Ten dang nhap</label>
            <input type="text" name="username"><br/>
            <label for="pwd">Mat khau</label>
            <input type="text" name="pwd"><br/>
            <input type="submit" value="Dang nhap">-->
        </form>
        </div>
        </div>
        <?php require_once "msg.php";?>
    </body>
</html>