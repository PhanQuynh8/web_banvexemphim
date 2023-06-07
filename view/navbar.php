<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<body>
  <style>
    * { box-sizing: border-box; }
body {
  font: 16px Arial;
}
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}
input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
}
  </style>
  <?php 
  include_once("models/model/PhimModel.php");
  include_once("models/classes/phim.php");
  include_once("models/model/user_module.php");
  ?>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-sm-start fixed-top">
      
          
          <div>
            <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="#">UEHSTAR</a>
            <button class="navbar-toggler align-self-start" type="button" >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          
         
            <div class="tenuser" style="margin-left:8px;"> 
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                      <?php $ten = GetUserTheoUserName($_GET['user']) -> GetTenUS();
                        echo "$ten";
                      ?>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="maintam.php?user=<?php echo $_GET['user']?>&nd=xemttuser">Xem Thông Tin</a>
                      <a class="dropdown-item" href="maintam.php?user=<?php echo $_GET['user']?>&nd=xemlichsu">Lịch Sử Mua Vé</a>
                      <a class="dropdown-item" href="btMd5-20221024T063417Z-001/btMd5/xulydangxuat.php">Đăng Xuất </a>
                    </div>
            </div>
            
      
            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark p-3 p-lg-0 mt-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
              <ul class="navbar-nav align-self-stretch">
                <li class="nav-item active">
                  <li class="nav-item dropdown">                    
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Lịch chiếu phim
                      </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="maintam.php?nd=dangchieu&tt=Phim Đang Chiếu&user=<?php echo $_GET['user']?>">Phim đang chiếu</a>
                      <a class="dropdown-item" href="maintam.php?nd=sapchieu&tt=Phim Sắp Chiếu&user=<?php echo $_GET['user']?>">Phim sắp chiếu</a>
                    </div>
                  </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="maintam.php?nd=tc&user=<?php echo $_GET['user']?>">Tất Cả Phim</a>                 
                </li>
                
              </ul>
              <form   class="form-inline my-2 my-lg-0" method="post" >
                <input  class="form-control mr-sm-2" type="text" id = "auto" name="ndtimkiem" placeholder="Search" aria-label="Search">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="nuttimkiem" value="Search">
              </form> 


            </div>
          </nav>
       
        
              <script type="text/javascript" >
             $(document).ready(function() {
              var fixHeight = function(){
                $(".navbar-nav").css("max-height", document.documentElement.clientHeight-150);
              }
              fixHeight();
              $(window).resize(function(){
                fixHeight();
              })
              $(".navbar .navbar-toggle").on("click", function(){
                fixHeight();
              })
                $ (".navbar-toggler, .overlay").on("click", function() {
                $ (".mobileMenu, .overlay").toggleClass("open");
                Console.log("clicked");
              });
            });

          </script>


</body>
</html>