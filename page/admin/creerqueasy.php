<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <linK rel="stylesheet" href="espace_eleve.css"> 
        <link href="Polices/VisbyRoundCF-Heavy.otf" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--favicon-->
        <title>QUEASY | Espace Admin</title>







    </head>
    <body>
    <?php
    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

?>
        <!--LOGO DU QUEASY-->
        <?php include 'page/header.php'; ?>
        
        <div class="Votre_Espace">Créer votre QUEASY</div>

        <style>
  .form-group {
     
    text-align: center;
    margin: auto;
    max-width: 500px;
  }
  .form-group label {
    margin-top: 20px;
    font-size: 30px;
  }
  .form-control {
    font-size: 30px;
  }
  .btn-primary {
    margin-left: 870px;
    font-size: 20px;
    padding: 10px 20px;
  
     
    max-width: 500px;
  }
</style>

        <form method="post" action="index_queasy.php?route=save_questions">
  <div class="form-group">
    <label for="quiz_name">Nom du quizz :</label>
    <input type="text" class="form-control" id="quiz_name" name="quiz_name">
  </div>
  <?php for ($i = 1; $i <= 20; $i++) { ?>
    <div class="form-group">
      <label for="question<?php echo $i; ?>">Question <?php echo $i; ?> :</label>
      <input type="text" class="form-control" id="question<?php echo $i; ?>" name="question<?php echo $i; ?>">
    </div>
  <?php } ?>
  <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
</form>

<?php
// Récupérer le message de confirmation s'il y en a un
$message = "";
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}
?>

<!-- Afficher le message de confirmation si nécessaire -->
<?php if (!empty($message)): ?>
    <div style="text-align:center; font-size: 100px; color: #9FE855;">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<!-- Le reste de votre code pour la création de quizz -->

</body>
</html>