<?php
require_once("models/model/PhimModel.php");
require_once("models/model/NgayModel.php");
require_once("models/model/ChinhNhanhModel.php");
require_once("models/model/LichChieuModel.php");
require_once("models/model/user_module.php");
require_once("models/model/VeModel.php");

class controller{
    public $modelphim;

    public function __construct()
    {
        $this -> modelphim = new PhimModel();
    }
    public function inra(){

    #timkiem
        if(isset($_POST['nuttimkiem'])){
            if(isset($_POST['ndtimkiem'])){
                if($_POST['ndtimkiem'] != ""){
                    $this -> hienchitietphim($_POST['ndtimkiem']);   
                }
                else{
                    $phims = $this -> modelphim -> GetListPhim();
                    include "view/viewtam.php";
                    header("Location: maintam.php");
                }
               
    }
}
    # lấy tất cả phim
        else if(!isset($_GET['nd'])){
        #$phims = $this -> modelphim -> GetListPhim();
        include "view/viewTrangChu.php";
        }
        else if($_GET['nd'] == "tc"){
            $phims = $this -> modelphim -> GetListPhim();
            include "view/viewtam.php";
        }
       #lấy phim đang chiếu
        else if($_GET['nd'] == 'dangchieu'){  
            $phims = $this -> modelphim -> GetListPhimDangChieu();
            include "view/viewtam.php";
        }
        #lấy phim sắp chiếu
        else if ($_GET['nd'] == 'sapchieu'){
            $phims = $this -> modelphim -> GetListPhimSapChieu();
            include "view/viewtam.php";
        }
        #hiện chi tiết phim khi bấm vào mua vé
        else if($_GET['nd'] == 'phimchitiet'){      
          $this -> hienchitietphim($_GET['tenphim']);
        
    }
    #xem thông tin người dùng
    else if($_GET['nd'] == 'xemttuser'){
        $user = GetUserTheoUserName($_GET['user']);
        include "view/XemTTUS.php";
    }
    else if($_GET['nd'] == "chonve"){
        $modelgiochieu = new LichChieuModel();
        $modelngay = new NgayModel();
        $modelchinhanh = new ChiNhanhModel();
        
        $lichchieu = $modelgiochieu -> GetLichChieuByID($_GET['idgc']);
        $chinhanh = $modelchinhanh -> GetChinhNhanhID($lichchieu -> GetIDCN());
        $phim = $this -> modelphim -> GetPhimByID($lichchieu -> GetIDPHIM());
        $ngay = $modelngay -> GetNgayTheoIDreal($lichchieu -> GetIDNGAY());
        include "view/chonve.php";
    }
    else if($_GET['nd'] == "chonghe"){
        $modelgiochieu = new LichChieuModel();
        $modelngay = new NgayModel();
        $modelchinhanh = new ChiNhanhModel();
        
        $lichchieu = $modelgiochieu -> GetLichChieuByID($_GET['idgc']);
        $chinhanh = $modelchinhanh -> GetChinhNhanhID($lichchieu -> GetIDCN());
        $phim = $this -> modelphim -> GetPhimByID($lichchieu -> GetIDPHIM());
        $ngay = $modelngay -> GetNgayTheoIDreal($lichchieu -> GetIDNGAY());
        include "view/chonghe.php";
    }
    else if($_GET['nd'] == "thanhtoan"){
        $modelgiochieu = new LichChieuModel();
        $modelngay = new NgayModel();
        $modelchinhanh = new ChiNhanhModel();
        
        $lichchieu = $modelgiochieu -> GetLichChieuByID($_GET['idgc']);
        $chinhanh = $modelchinhanh -> GetChinhNhanhID($lichchieu -> GetIDCN());
        $phim = $this -> modelphim -> GetPhimByID($lichchieu -> GetIDPHIM());
        $ngay = $modelngay -> GetNgayTheoIDreal($lichchieu -> GetIDNGAY());
        include "view/thanhtoan.php";
    }
    else if($_GET['nd'] == "xemlichsu"){
        $modelgiochieu = new LichChieuModel();
        $modelngay = new NgayModel();
        $modelchinhanh = new ChiNhanhModel();
       $ve = GetToanBoVeTheoIDUS(GetUserTheoUserName($_GET['user']) -> GetIDUS());
       # $ve = GetToanBoVe();
       
       include "view/lichsumuave.php";

    }
}
    
    public function inrafooter(){
        include "view/footer.php";
    }
    public function inranavbar(){
        include "view/navbar.php";
    }
    public static function hienchitietphim($nd){
        $phimtk = $nd;
            $modelngay = new NgayModel();
         #   $danhsachgiochieu = $modelgiochieu -> GetListLichChieuTheoNgay();\
            $phimmodel = new PhimModel();
            $danhsachngay = $modelngay -> GetListNgay();
             $phimdangtim = $phimmodel -> GetPhimDE($phimtk);
             include "view/viewphimdetail.php";
             include "view/thanhngay.php";
             if(isset($_GET['ng'])){
               
                $modelchinhanh = new ChiNhanhModel();
                $danhsachchinhanh = $modelchinhanh -> GetListChiNhanh();
                $modelgiochieu = new LichChieuModel();
                include "view/giochieu.php";    
             }
    }


}
?>
