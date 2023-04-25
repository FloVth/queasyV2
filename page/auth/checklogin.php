<?php
    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

// ordre de mission
$requete = $mysqlConnection->prepare('SELECT * FROM user INNER JOIN promotion where nom_user = :login and mdp_user=:password and user.fk_id_promotion=promotion.id_promotion');
//execution de la requete
$requete->execute( ["login"=>$_POST["Nom"],"password"=>$_POST["mot_de_passe"]]);
session_start();
$user = $requete->fetch();
$mysqlConnection = null;
$requete = null;
if ($user){

    $_SESSION["login"]=$_POST["Nom"];
    $_SESSION["prenom"]=$user["prenom_user"];
    $_SESSION["promo"]=$user["libelle_promotion"];
    $_SESSION["avatar"]=$user["avatar"]; //ajout pour avatar 
    if($user["is_admin"]==1){        
        $_SESSION["type"]=1;
        header("location:index_queasy.php?route=accueil_admin");
    }
    else{
        $_SESSION["type"]=0;
        header("location:index_queasy.php?route=accueil_eleve");

    }

    
  
    }
else
{
    $_SESSION["error"]="identifiant de connexion incorrect";
    header("location:index_queasy.php?route=login");

}

?>