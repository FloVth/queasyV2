<?php    session_start();?>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link href="assets/queasy.css" rel="stylesheet" >
      <link href="Polices/VisbyRoundCF-Heavy.otf" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" href="Logo-QUEASY.png"/>
    </head>
    <body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="responsive-image">
                <img src="assets/image/Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
        </div>
        
<?php
        

  ?>
<div class="container">
  <div class="row">
    <div class="col center">
      <?php
      
    if(isset($_GET["route"])){

              
          switch ($_GET["route"]){
            case "login":
              include("page/auth/login.php");
              break;
                                                 
            default : 

          }
        }
        else{
          if(isset($_SESSION["login"])){
            echo "quelle belle correction";
          }
        }
      ?>
    </div>
  </div>
</div>
       
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html> 







