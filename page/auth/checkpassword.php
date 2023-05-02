 <?php

    $mysqlConnection = new PDO(
        'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
        USER,
        PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
    
    $requete = $mysqlConnection->prepare("SELECT * FROM user WHERE id_user=:id");
    $requete->execute(["id"=>$_SESSION['id_user']]);
    $requete_user =$requete->fetch();

    if(!empty($_POST))
    {
    
        extract($_POST);
        $valid = true;

      //  if(!isset($_POST['form1']))
      //  {    
            //on recupère la variable ancien mot de passe
            $oldpsd = (String) trim($oldpsd); //trim pour enlever les espaces avant et après
            //on récupère la variable du nouveau mot de passe 
            $psd = (String) trim($psd); 
            //on récupère les valeur pour la confirmartion du mot de passe 
            $confpsd = (String) trim($confpsd);
             //on verifie qu'il y a bien des informations dans oldpsd
            if (!isset($oldpsd))
            {
                $valid = false; // s'il y a pas
                $err_paasword ="Ce champ ne peut pas être vide"; //commentaire de l'erreur
            }else{
                //on verifie que le mot de pass est correct (avec mdp correct)
                $requete = $mysqlConnection->prepare('SELECT * FROM user  WHERE nom_user = :login and mdp_user=:password');
                $requete->execute( ["login"=> $_SESSION["login"],"password"=>$oldpsd]);
                $res=$requete->fetch();
             if($res)
                {
                    if(!$oldpsd==$res['mdp_user'])
                    {
                        $valid = false; 
                        $err_paasword ="L'ancien mot de passe est incorrect"; // Si erreur signaler erreur
                    }
                }else{
                    $valid=false;
                    $err_paasword ="l'ancien mot de passe est incorrect"; 
                }
            }

            //verifier si le nouveau mot de passe correspond à la confirmation du nouveau mot de passe                                                   
            if($valid)
            {    
                if(empty($psd))
                {
                    $valid = false; 
                    $err_paasword = "Ce champ ne peut pas être vide";
                }elseif ($psd <> $confpsd) //Test la conf ave le new mot de passe on compare
                {
                    $valid=false; 
                    $err_paasword = "Le mot de passe est différent de la confirmation";
                }elseif($psd == $oldpsd)
                {
                    $valid=false; 
                    $err_paasword = "Le nouveau mot de passe doit être différent de l'ancien";
                }
                 
            }


            //Si tout est OK 
            if($valid)
            { 
                //Pour crypter le new mot de passe 
                $requete = $mysqlConnection->prepare('UPDATE user SET mdp_user=:password WHERE id_user=:id_user');
                $requete->execute( ["password"=>$psd, "id_user"=>$_SESSION['id_user']]);

                header('Location:index_queasy.php?route=edit_password');
            }
            else{
                header('Location:index_queasy.php?route=edit_password&error='.$err_paasword);
            }
       // }

    }
?>