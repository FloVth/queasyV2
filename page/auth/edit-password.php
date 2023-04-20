<?php 
session_start(); 

if(isset($_SESSION['id_user'])&& isset($_SESSION['nom_user'])){
    include "database.php";

    if(isset($_POST['ancien_mot_de_passe'])&& isset($_POST['nouveau_mot_de_passe'])&& isset($_POST['confirmation_mot_de_passe'])) {
        function valider($donnee){
            $donnee= trim($donnee); //Supprimez les caractères des deux côtés d'une chaîne exemple("He" dans "Hello" et "d!" dans "World")
            $donnee= stripslashes($donnee); //stripslashes supprime les antislashs d'une chaîne
            $donnee=htmlspecialchars($donnee);
            return $donnee ; 
        }

        $ancien_mot_de_passe = valider($_POST['ancien_mot_de_passe']);
        $nouveau_mot_de_passe = valider($_POST['nouveau_mot_de_passe']); 
        $confirmation_mot_de_passe = valider($_POST['confirmation_mot_de_passe']); 

    //Si erreur 
    if(empty($ancien_mot_de_passe)){
        header("location:edit_password?error=Votre ancien mot de passe est nécessaire"); 
        exit();
    }else if(empty($nouveau_mot_de_passe)){
        header("location:edit_password?error=Nouveau mot de passe est nécessaire");  
        exit();  
    }else if ($nouveau_mot_de_passe !== $confirmation_mot_de_passe){
        header("location:edit_password?error=La confirmation de votre nouveau mot de passe est erroné");
        exit();
    
    }else{
        //hachage avec la fonction md5 ->La fonction md5() calcule le hachage MD5 d'une chaîne.
        $ancien_mot_de_passe = md5($ancien_mot_de_passe);
        $nouveau_mot_de_passe = md5($nouveau_mot_de_passe);
        $id_user = $_SESSION['id_user'];

        $sql = "SELECT mdp_user FROM user WHERE id='$id' AND mdp_user='$ancien_mot_de_passe'"; 
        $result = mysqli_query($mysqlConnection, $sql);
        if (mysqli_num_rows($result)==1){

            $sql2 = "UPDATE user SET mdp_user='$nouveau_mot_de_passe' WHERE=id='$id'";
            mysqli_query($mysqlConnection, $sql2);
            header("location:edit_password?succes = Votre mot de passe a bien été changé");
            exit(); 
        }else{
            header("location:edit_password?error=Mot de passe incorrect")
            exit();
        }
    }
    }else{
        header("location:index_queasy.php?route=edit_password")
        exit();
    }
}else{
    header("location:index_queasy.php?route=login")
    exit();
}
        





