    <!DOCTYPE html>
<html>
    <head>

        <title>QUEASY | Espace Admin</title>
    </head>
    <body>
        <!--LOGO DU QUEASY-->
        <?php include 'page/header.php'; ?>
        
       
        <!--TEXT VOTRE ESPACE-->
        <div class="Votre_Espace">Gestion des élèves</div>

        <style>
  .center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .form-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #03224C;
  }

  .form-label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
    font-size: 2em;
  }

  .form-input {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .form-submit {
    background-color: #22427C;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 2em;
  }

  .form-submit:hover {
    background-color: #0069d9;
  }

  table {
    font-size: 16px;
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
  }
  
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    background-color: #0E4BEF;
  }
  
  tr:hover {
    background-color: #0E4BEF;
  }     

  .fondlist
  {
    background-color: #0E4BEF;
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
  }
</style>

<div class="center">
 




     

        <div class="form-container">
  <form method="POST">
    <label class="form-label" for="nom">Nom :</label>
    <input class="form-input" type="text" name="nom" id="nom" placeholder="Entrez le nom de l'élève">

    <label class="form-label" for="prenom">Prénom :</label>
    <input class="form-input" type="text" name="prenom" id="prenom" placeholder="Entrez le prénom de l'élève">

    <label class="form-label" for="promotion">Promotion :</label>
    <input class="form-input" type="text" name="promotion" id="promotion" placeholder="Entrez la promotion de l'élève">

    <label class="form-label" for="code">Code :</label>
    <input class="form-input" type="text" name="code" id="code" placeholder="Entrez le code de l'élève">

    <button class="form-submit" type="submit">Ajouter l'élève</button>
</form>
</div>


<?php
    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

 
  $requete = $mysqlConnection->query("SELECT nom, prenom, promotion, code FROM eleve");
  $eleves = $requete->fetchAll();
 
  

?>  
<div class="row justify-content-center">
  <div class="col-8">
      <table class="table text-center">
          <thead>
              <tr>
                  <th scope="col">Prénom</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Promotion</th>
                  <th scope="col">Code</th>
              </tr>
          </thead>
          <tbody>
          <?php foreach ($eleves as $ligne) { ?>
    <tr>
        <td><?= $ligne["prenom"] ?></td>
        <td><?= $ligne["nom"] ?></td>
        <td><?= $ligne["promotion"] ?></td>
        <td><?= $ligne["code"] ?></td>
    </tr>
<?php } ?>

          </tbody>
      </table>
  </div>
</div>


 
<?php

 


?>




</div>
</div>
    </body>
</html>