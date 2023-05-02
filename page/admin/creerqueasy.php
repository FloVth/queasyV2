<!DOCTYPE html>
<html>
    <head>

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
$messagequizz = "";
if (isset($_GET['message'])) {
    $messagequizz = $_GET['message'];
}
?>

 
 
</body>
</html>