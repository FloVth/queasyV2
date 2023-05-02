<?php
include("config/database.php");
 $mysqlConnection = new PDO(
    'mysql:host=' .SERVER.';dbname='.DBNAME.';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
 );


    
if(isset($_POST['submit'])) {    
    
    $requete = $mysqlConnection->prepare('INSERT INTO eleve(nom, prenom, promotion, code, is_admin) VALUES (:nvnom, :nvprenom, :nvpromotion, :nvcode, :nvis_admin)');
    
 
    $requete->execute(["nvnom" => $_POST["nom"], "nvprenom" => $_POST["prenom"], "nvpromotion" => $_POST["promotion"], "nvcode" => $_POST["code"], "nvis_admin" => 0]);



 
$mysqlConnection = null;
$requete = null;
}
?>
