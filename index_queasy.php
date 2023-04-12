<?php    session_start();?>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link href="assets/queasy.css" rel="stylesheet" >
      <link href="Polices/VisbyRoundCF-Heavy.otf" rel="stylesheet" type="text/css">
      <link rel="shortcut icon" href="assets/image/Logo-QUEASY.png"/>
    </head>
    <body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="responsive-image">
                <img src="assets/image/Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
        </div>
        
<?php
include("config/database.php");
if (isset($_SESSION["error"])){
  ?>
  <div class="alert alert-danger" role="alert">
    <?php 
      echo $_SESSION["error"];
      unset($_SESSION["error"]);
    ?>
  </div>

  <?php
}
if (isset($_SESSION["success"])){
    ?>
    <div class="alert alert-success" role="alert">
      <?php 
        echo $_SESSION["success"];
        unset($_SESSION["success"]);
      ?>
    </div>
    <?php
  }


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
            case "checklogin":
              include ("page/auth/checklogin.php");
              break;
            case "accueil_eleve":
              include ("page/eleve/accueil_eleve.php");
              break;
            case "accueil_admin":
              include("page/admin/accueil_admin.php");
              break; 
            case "Deconnexion":
              include("page/auth/Deconnexion.php");
              break;
            case "edit_password":
              include("page/auth/edit_password.php");
              break;
            case "correction_quizz":
              include ("page/eleve/Correction_QUEASY.php");
              break;
            case "gererqueasy":
              include ("page/admin/gerer_queasy.php");
              break;
                                                 
            default :
            if(isset($_SESSION["login"])){
            echo "quelle belle correction";
            }
          else{
            include("page/auth/login.php");
          }
        }
    }
    else{
      if(isset($_SESSION["login"])){
        echo "quelle belle correction";
      }else{
        include("page/auth/login.php");
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







