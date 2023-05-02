<?php
include("config/database.php");

// Connexion à la base de données
$mysqlConnection = new PDO(
    'mysql:host=' . SERVER . ';dbname=' . DBNAME . ';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);

// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])) {
    
    // Récupérer les valeurs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $promotion = $_POST["promotion"];
    $code = $_POST["code"];
    
    // Préparer la requête d'insertion
    $requete = $mysqlConnection->prepare('INSERT INTO eleve(nom, prenom, promotion, code) VALUES (:nom, :prenom, :promotion, :code)');
    
    // Exécuter la requête d'insertion
    $requete->execute(["nom" => $nom, "prenom" => $prenom, "promotion" => $promotion, "code" => $code]);

    // Récupération de l'ID de l'élève inséré
    $id = $mysqlConnection->lastInsertId();

    // Rediriger l'utilisateur vers une autre page
    $_SESSION["success"] = "Le nouvel élève a bien été ajouté !";
    header("Location: index_queasy.php?route=creerqueasy.php?message=" . urlencode($messageleve));
    exit();
}

// Fermer la connexion à la base de données
$mysqlConnection = null;
$requete = null;
?>
