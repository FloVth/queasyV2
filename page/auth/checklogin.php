<?php
    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

// ordre de mission
$requete = $mysqlConnection->prepare('SELECT * FROM user where id_user = :login and mdp_user=:password');
//execution de la requete
$requete->execute( ["login"=>$_POST["Nom"],"password"=>$_POST["mot_de_passe"]]);
session_start();
$user = $requete->fetch();
if ($user){
  
    $_SESSION["login"]=$_POST["login"];
    header("location:index.php");
    echo 'good';
  
}
else
{
    $_SESSION["error"]="identifiant de connexion incorrect";
    header("location:index.php?route=accueil-eleve");
   
}

?>