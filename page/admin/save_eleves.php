<?php


 
$mysqlConnection = new PDO(
    'mysql:host=' . SERVER . ';dbname=' . DBNAME . ';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);

 
if(isset($_POST['submit'])) {
    
     
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $promotion = $_POST["promotion"];
    $code = $_POST["code"];
    
    
    $requete = $mysqlConnection->prepare('INSERT INTO eleve(nom, prenom, promotion, code) VALUES (nvnom, nvprenom, nvpromotion, nvcode)');
    
 
    $requete->execute(["nvnom" => $nom, "nvprenom" => $prenom, "nvpromotion" => $promotion, "nvcode" => $code]);

     
    $id = $mysqlConnection->lastInsertId();

    
    $_SESSION["success"] = "Le nouvel élève a bien été ajouté !";
    header("Location: index_queasy.php?route=creerqueasy.php?message=" . urlencode($messageleve));
    exit();
}

 
$mysqlConnection = null;
$requete = null;
?>
