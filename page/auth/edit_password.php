 <?php
    require_once();

    if(!isset($_SESSION['id_user']))
    {
        header('Location:/;');
        exit;
    }
    
    $requete = $mysqlConnection->prepare("SELECT*FROM user WHERE id_user=?");
    $requete_user =$requete->fetch();

    if(!empty($_POST))
    {
        extract($_POST);
        $valid = true;

        if(!isset($_POST['form1']))
        {
            //on recupère la variable ancien mot de passe
            $oldpsd = (String) trim($oldpsd); //trim pour enlever les espaces avant et après
            //on récupère la variable du nouveau mot de passe 
            $psd = (String) trim($psd); 
            //on récupère les valeur pour la confirmartion du mot de passe 
            $confpsd = (String) trim($confpsd);

            //on verifie qu'il y a bien des informations dans oldpsd
            if (isset($oldpsd))
            {
                $valid = false; // s'il y a pas
                $err_paasword ="Ce champ ne peut pas être vide"; //commentaire de l'erreur
            }else{
                //on verifie que le mot de pass est correct (avec mdp correct)
                $requete = $mysqlConnection->prepare('SELECT * FROM user  WHERE nom_user = :login and mdp_user=:password');
                $requete->execute( ["login"=>$_POST["Nom"],"password"=>$_POST["mot_de_passe"]]);

                if(isset($requete['password']))
                {
                    if(!password_verify($oldpsd,$requete['password']))
                    {
                        $valid = false; 
                        $err_paasword ="L'ancien mot de passe est incorrect"; // Si erreur signaler erreur
                    }
                }else{
                    $valid=false;
                    $err_paasword ="l'ancien mot de passe est incorrect"; 
                }
            }

            //verifier si le new pwd correspond à la conf                                                          
            if($valid)
            {
                if(empty($psd))
                {
                    $valid = false; 
                    $err_paasword = "CE champ ne peut pas être vide";
                }elseif ($psd <> $confpsd) //Test la conf ave le new mot de passe 
                {
                    $valid=false; 
                    $err_paasword = "Le mot de passe est différent de la confirmation":
                }elseif($psd == $oldpsd)
                {
                    $valid=false; 
                    $err_paasword = "Le nouveau mot de passe doit être différeny de l'ancien";
                }
                 
            }


            //Si tout est OK 
            if($valid)
            {
                //Pour crypter le new mot de passe 
                $crypt_password = password_hash($psd, PASSWORD_ARGON2ID);

                $requete = $mysqlConnection->prepare('UPDATE user SET mdp_user=:password');
                $requete->execute( [$crypt_password,"password"=>$_POST["mot_de_passe"]]);

                header('Location:index_queasy.php?route=edit_password');
            }
        }

    }

?>
 <!--LABEL ANCIEN MOT DE PASSE-->
        <div class="wrappper">
            <div class="content">
                <div class="box">
                    <label for="ancien_mot_de_passe">Ancien mot de passe :</label>
                </div>
            </div>
            <!--INPUT ANCIEN MOT DE PASSE-->
            <div class="box">
                <input type="text" class="myinput" name="ancien_mot_de_passe" placeholder="Entrez votre nom"/>
            </div>

            <!--ZONE ESPACE-->
            <div class="zone-espace">
                <div class="spacing"></div>
                <div class="spacing"></div>
            </div>


            <!--LABEL NOUVEAU MOT DE PASSE-->
            <div class="box">
                <label for="nouveau_mot_de_passe">Nouveau mot de passe :</label>
            </div>
            <!--INPUT NOUVEAU MOT DE PASSE-->
            <div class="box">
                <input type="password" class="myinput" name="nouveau_mot_de_passe" placeholder="Nouveau mot de passe"/>
            </div>

            <!--ZONE ESPACE-->
            <div class="zone-espace">
                <div class="spacing"></div>
                <div class="spacing"></div>
            </div>

            <!--LABEL CONFIRMATION MOT DE PASSE-->
            <div class="box">
                <label for="confirmation_mot_de_passe">confirmation du nouveau mot de passe :</label>
            </div>
            <!--INPUT CONFIRMATION MOT DE PASSE-->
            <div class="box">
                <input type="password" class="myinput" name="confirmation_mot_de_passe" placeholder="Confirmation du mot de passe"/>
            </div>

            <!--ZONE ESPACE-->
                <div class="zone-espace">
                <div class="spacing"></div>
                <div class="spacing"></div>
            </div>

            <!--Bouton-->
            <div class="box">
                <div class="button">
                <a href='index_queasy.php?route=accueil_eleve' class="btn">Changer de mot de passe </a>
                <a href='index_queasy.php?route=accueil_eleve' class="btn">Menu ! <i class="fa-solid fa-house-chimney"></i> </a>
                </div>
                
            </div>
        </div>
    </form>



    <!--TEST-->
    <div class="Votre_Espace">Modifiez votre mot de passe</div>

    <form method="post">
        <?php if(isset($err_paasword)){echo . $err_paasword;}?>
        <input type="password" name="oldpsd" value="" placeholder="Votre mt de passe actuel"/>
        <br>
        <input type="password" name="psd" value="" placeholder="Votre mt de passe actuel"/>
        <br>
        <input type="password" name="confpsd" value="" placeholder="Votre mt de passe actuel"/>
        <br>
        <input type="submit" name="form1" value="Modifier"/>
    </form>
