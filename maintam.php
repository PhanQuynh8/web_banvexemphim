<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>
<body>
    <?php
    session_start();
    require_once("controllers/controllers.php");
  //  require_once("models/model/PhimModel.php");
    //require_once("models/classes/phim.php");
        $contrl = new controller();    
    ?>
    <div class = "container" >
        <?php 
       
           if(!isset($_GET['nd'])){
            echo"
            <div class  = 'row'>
            <div class = 'col-12'>
                <div class = 'header'>
                                  
                        ".$contrl -> inranavbar()."
                    
                </div>
            </div>
        </div>
            ";
           }
           else{
            if($_GET['nd'] != "chonve" && $_GET['nd'] != "chonghe" && $_GET['nd'] != "thanhtoan" ){
                echo"
                <div class  = 'row'>
                <div class = 'col-12'>
                    <div class = 'header'>
                                      
                            ".$contrl -> inranavbar()."
                        
                    </div>
                </div>
            </div>
                ";
            }
           }
          
        ?>
        <div class = "row">
            <div class="col-12">
                <div class = "content">
                    <?php               
                    $contrl -> inra();
                    ?>
                </div>
            </div>
        </div>
        
      <?php 
        
            if(!isset($_GET['nd'])){
                echo"
                <div class  = 'row text-center padding' >
                <div class = 'col-12'>
                    <div class ='footer' >
                       
                         ".$contrl -> inrafooter()."
                       
                    </div>
                </div>
            </div>
            <br style='clear:both;'>
            </div>
                ";
            }
            else{
                if($_GET['nd'] != "chonve" && $_GET['nd'] != "chonghe" && $_GET['nd'] != "thanhtoan"){
                    echo"
                    <div class  = 'row text-center padding' >
                    <div class = 'col-12'>
                        <div class ='footer' >
                           
                             ".$contrl -> inrafooter()."
                           
                        </div>
                    </div>
                </div>
                <br style='clear:both;'>
                </div>
                    ";
                }
            }
        
      ?>
    
</body>
</html>