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
 




        <!-- Vider la table est trop compliquer en CSV, avec les autres outils ce sera surement plus simple -->

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


<div class="fondlist">
<?php
// Vérifie que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupère les valeurs soumises par l'utilisateur
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $promotion = $_POST["promotion"];
  $code = $_POST["code"];

  // Ouverture du fichier CSV en mode ajout
  $fichier = fopen("eleves.csv", "a");

  // Vérifie si l'élève n'existe pas déjà dans le fichier
  $eleveExiste = false;
  if (($handle = fopen("eleves.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle)) !== FALSE) {
      if ($data[0] == $nom && $data[1] == $prenom && $data[2] == $promotion && $data[3] == $code) {
        $eleveExiste = true;
        break;
      }
    }
    fclose($handle);
  }

  // Ajoute l'élève seulement s'il n'existe pas déjà dans le fichier
  if (!$eleveExiste) {
    // Écriture des données de l'élève dans le fichier CSV
    fputcsv($fichier, array($nom, $prenom, $promotion, $code));

    // Fermeture du fichier CSV
    fclose($fichier);
  }
}

// Ouverture du fichier CSV en mode lecture
$fichier = fopen("eleves.csv", "r");

// Vérifie que le fichier a été ouvert avec succès
if ($fichier !== false) {
  // Début de la table HTML
  echo "<table>";
}
while (($data = fgetcsv($fichier)) !== false) {
  // Vérification du nombre d'éléments dans la ligne
  if (count($data) === 4) {
    // Affichage des données dans la table HTML
    echo "<tr>";
    echo "<td>" . $data[0] . "</td>";
    echo "<td>" . $data[1] . "</td>";
    echo "<td>" . $data[2] . "</td>";
    echo "<td>" . $data[3] . "</td>";
    echo "</tr>";
  }
}
?>
</div>
</div>
    </body>
</html>