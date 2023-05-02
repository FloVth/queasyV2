<?php
    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);


    
    
    
    $requete = $mysqlConnection->prepare('INSERT INTO eleve(nom, prenom, promotion, code, is_admin) VALUES (:nvnom, :nvprenom, :nvpromotion, :nvcode, :nvis_admin)');
    
 
    $requete->execute(["nvnom" => $_POST["nom"], "nvprenom" => $_POST["prenom"], "nvpromotion" => $_POST(["promotion"]), "nvcode" => $_POST(["code"]), "nvis_admin"=0]);

    
/*$_SESSION["success"] = "Le nouvel élève a bien été ajouté !";
    header("Location: index_queasy.php?route=creerqueasy.php?message=" . urlencode($messageleve));
    exit();*/


 
$mysqlConnection = null;
$requete = null;
?>
