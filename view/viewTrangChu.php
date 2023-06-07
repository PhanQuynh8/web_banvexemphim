<!DOCTYPE html>
<html>
    <head>
		  <title>Cinema</title>
		  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <link rel="stylesheet"  href="css/nhap.css">
      
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <script src = "controllers/phim.js"></script>
    </head>
    <body>
        <!--Navbar-->
      
    <div class="container-fluid homepage">
       <!--Carousel-->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="picture/299614501_812596529762107_3749616072788447706_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="picture/299149074_802216360788905_9091497898001775499_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="picture/299695531_1052476085409712_4727943714664206513_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="picture/300844746_801850224330906_5931835788619245836_n.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="picture/301028422_1133034403959509_2038379074128884062_n.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      <hr class="my-4">
      </div>
        <div class=" container-fluid product-portfolio px-5">
        <div class="container-fluid padding">
      <div id="myBtnContainer" class="text-center">
        <button class="btnc active" onclick="filterSelection('dangchieu')"> PHIM ĐANG CHIẾU</button>
        <button class="btnc" onclick="filterSelection('sapchieu')">PHIM SẮP CHIẾU</button>
      </div>

<!-- Portfolio Gallery Grid -->
      <div class="">
        <div class="column dangchieu">
          <div class="content">  
            <div class="row p-5">
                <div class="card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/danchoikhongsoconroi.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">DÂN CHƠI KHÔNG SỢ CON RƠI</h5>
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/dragonball.png" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">DRAGONBALL</h5>
                            
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/duyenma.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">DUYÊN MA</h5>
                            
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/hacanhkhancap.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">HẠ CÁNH KHẨN CẤP</h5>
                            
                        </div>
                    </a>
                </div>
                <div class="card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/hasan.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">HASAN</h5>
                            
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/monphaivomeo.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">MÔN PHÁI VÕ MÈO</h5>
                            
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/nope.png" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">NOPE</h5>
                            
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="picture/vodiensatnhan.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">VÔ DIỆN SÁT NHÂN</h5>
                            
                        </div>
                    </a>
                </div>
            </div>
          </div>
        </div>
        <div class="column sapchieu">
          <div class="content">  
            <div class="row p-5">
                <div class="card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002542?referenceScheme=HeadOffice&allowPlaceHolder=true&hei" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">BẤT DIỆT</h5>
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002551?referenceScheme=HeadOffice&allowPlaceHolder=true&hei" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">SĂN LÙNG</h5>
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002546?referenceScheme=HeadOffice&allowPlaceHolder=true&hei" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">AROUND THE WORLD IN 80 DAYS</h5>
                            
                        </div>
                    </a>
                </div>
                <div class=" card col-6 col-sm-3">
                    <a href="">
                        <div class="item-img">
                            <img src="http://booking.bhdstar.vn/CDN/media/entity/get/FilmPosterGraphic/HO00002484?referenceScheme=HeadOffice&allowPlaceHolder=true&hei" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">FEARLESS LOVE</h5>
                        </div>
                    </a>
                </div>
             </div>
          </div>
          </div>
        </div>
        </div>
      </div>    
        </div>
    </div>
  
    </body>
</html>