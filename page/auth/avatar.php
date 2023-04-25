<?php
                    // EN CAS DE PROB AVEC LE LIEN DE LA BASE DE DONNE//
    //session_start(); // Pour récupèrer nos données dans les variables : $_SESSION   
    //include("config/database.php"); // Pour faire la connexion à notre base de données

    if(!empty($_POST)){
        extract($_POST); // On extrait toutes les informations
        $valid = true;

        if (isset($_POST['avatar']))   // On se positionne sur le bon formulaire
        {
            if (isset($_FILES['file']) and !empty($_FILES['file']['name']))//on verifie si on a bien positionner un fichier qui existe avec dedans nom du fichier avec le nom du fichier qu'on va récuprer
            {
                $filename = $_FILES['file']['tmp_name']; //toujours lire dans le fichier ou l'image est dans un fichier temporaire

                list($width_original, $height_original) = getimagesize($filename); //on récuper e la taille de l'image avec getimagesize de php
                if($width_original >= 500 && $height_original >= 500 && $width_original <= 6000 && $height_original <= 6000) // verification des dimension
                {
                    $ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif'); // Liste des exetension autorisées
                    $ListeExtensionIE = array('jpg' => 'image/pjpg', 'jpeg'=>'image/pjpeg'); //Liste des extension Internet Explorer à cause des ses complication
                    $tailleMax = 5242880;//taille maximum de 5 Mo 
                    // 2 Mo = 2097152
                    // 3 Mo = 3145728
                    // 4 Mo = 4194304
                    // 5 Mo = 5242880
                    // 7 Mo = 7340032
                    // 10 Mo = 10485760
                    // 12 Mo = 12582912
                    $extensionsValides = array('jpg','jpeg'); // Format accepte

                    if ($_FILES['file']['size'] <= $tailleMax)// Si le fichier et bien de la taille inférieur ou égal à 5Mo
                    {
                        $extensionUpload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1)); //prend l'exententiuon après le ., soit(jpg, jpeg, png)
                        if (in_array($extensionUpload, $extensionsValides)) //Verifie l'extension  est correct
                        {
                            $dossier = "public/avatars/" . $_SESSION['id_user'] . "/";//On se place dans le dossier de l'utilidateurt en question
                            
                            if (!is_dir($dossier)) //Si le dossier n'existe pas, on le créer
                            {
                                mkdir($dossier);
                            }else{
                                if(file_exists("public/avatars/". $_SESSION['id_user'] . "/" . $_SESSION['avatar']) && isset($_SESSION['avatar']))
                                {
                                    unlink("public/avatars/". $_SESSION['id_user'] . "/" . $_SESSION['avatar']);
                                }
                            }

                            $nom = md5(uniqid(rand(), true)); //permet de générerer un nom unique à la photo
                            $chemin = "public/avatars/" . $_SESSION['id_user'] . "/" . $nom . "." . $extensionUpload; // Le  chemin pour placer la photo
                            $resultatphoto = move_uploaded_file($_FILES['file']['tmp_name'], $chemin); // On termine par mettre la photo dabns le dossier

                            if ($resultatphoto) // SI nous avons le résultat on va compresser l'image
                            {
                                if (is_readable("public/avatars/" . $_SESSION['id_user'] . "/" .$nom . "." . $extensionUpload))
                                {
                                    $verif_extension = getimagesize("public/avatars/" . $_SESSION['id_user'] . "/" .$nom . "." . $extensionUpload);

                                    //Verification des extension avec la liste des extension autorises
                                    if($verif_extension['mime'] == $ListeExtension[$extensionUpload]  || $verif_extension['mime'] == $ListeExtensionIE[$extensionUpload])
                                    {
                                        //Enregistre le chemin de l'image dans filename
                                        $filename = "public/avatars/" . $_SESSION['id_user'] . "/" .$nom . "." . $extensionUpload;

                                        //Verification des extension qu'on souhgaite prendre
                                        if($extensionUpload == 'jpg' || $extensionUpload == 'jpeg' || $extensionUpload == "pjpg" || $extensionUpload == 'pjpeg')
                                        {      
                                            $image2 = imagecreatefromjpeg($filename); // On créer uneimage en jpeg ce qui nous donne une nvlle image
                                        }

                                        //definition des dimensions maxiùale de l'image
                                        $width2 = 500;
                                        $height2 = 500;

                                        list($width_original, $height_original) = getimagesize($filename); // on crérer une nvlle image

                                        //rendimensionnement
                                        $image_p2 = imagecreatetruecolor($width2, $height2);
                                        imagealphablending($image_p2, false); //paramètre
                                        imagesavealpha($image_p2, true); //paramètre
                                        
                                        //calcule des nouvelle dimensions
                                        $point2 = 0; 
                                        $ratio = null; 
                                        if($width_original <= $height_original)
                                        {
                                            $ratio = $width2 / $width_original;
                                        }else if($width_original > $height_original)
                                        {
                                            $ratio = $height2 / $height_original;
                                        }

                                        $width2 = ($width_original * $ratio) + 1;
                                        $height2 = ($height_original * $ratio) + 1; 

                                        imagecopyresampled($image_p2, $image2, 0, 0, $point2, 0, $width2, $height2, $width_original, $height_original);
                                        imagedestroy($image2); 

                                        if($extensionUpload == 'jpg' || $extensionUpload == 'jpeg' || $extensionUpload == "pjpg" || $extensionUpload == 'pjpeg')
                                        {
                                            //Content type
                                            header('Content-Type: image/jpeg'); // Tres important !
                                            $exif = exif_read_data($filename);
                                            if(!empty($exif['Orientation']))
                                            {
                                                switch($exif['Orientation'])
                                                {
                                                    case 8: 
                                                        $image_p2 = imagerotate($image_p2,90,0);
                                                    break; 
                                                    case 3:
                                                        $image_p2 = imagerotate($image_p2,180,0);
                                                    break; 
                                                    case 6:
                                                        $image_p2 = imagerotate($image_p2,-90,0);; 
                                                    break; 
                                                }
                                            }
                                            //Affichage
                                            imagejpeg($image_p2, "public/avatars/" . $_SESSION['id_user'] . "/" . $nom . "." . $extensionUpload, 75);
                                            imagedestroy($image_p2);
                                        }
                                        $DB->insert("UPDATE user SET avatar = ? WHERE  id_user = ?", array(($nom.".".$extensionUpload), $_SESSION['id_user']));
                                        $_SESSION['avatar'] = ($nom.".".$extensionUpload); //On met à jour l'avatar

                                        $_SESSION['flash']['success'] = "Nouvel avatar enregistré !";
                                        header('Location: index_queasy.php?route=acceuil_eleve'); // Pour la redirection
                                        exit;

                                        //Fin de comprésion de l'image//
                                        // GESTION Erreur
                                    }else{
                                        $_SESSION['flash']['warning'] = "Le type MIME de l'image n'est pas bon";
                                    }
                                }else{
                                    $_SESSION ['flash']['error'] = "Erreur lors de l'importation de votre image.";
                                }
                            }else 
                            $_SESSION ['flash']['warning'] = "Votre image doit être au format jpeg.";
                        }else 
                            $_SESSION ['flash']['warning'] = "Votre photo de profil ne doit pas dépasser 5 MO ! ";
                    }else
                        $_SESSION ['flash']['warning'] = "Erreur lors de l'importation de votre image.";
                } else
                    $_SESSION ['flash']['warning'] = "Dimension de l'image minimum 400*400 et maximum 6000*6000 ! ";
            }else
                $_SESSION ['flash']['warning'] = "Veuillez mettre une image !";
        }
    }

?>
<!DOCTYPE html>
    <head>
        <link rel="shortcut icon" href="Logo-QUEASY.png"/>
        <title>QUEASY | Avatar</title>
    </head>
    <body>
        <!--TEXT VOTRE ESPACE-->
        <div class="Votre_Espace">Modifiez votre photo de profil</div>
        <!--Zone espace-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
        <?php	
            if(file_exists("public/avatars/". $_SESSION['id_user'] . "/" . $_SESSION['avatar']) && isset($_SESSION['avatar'])){
        ?>
            <img src="<?= "public/avatars/". $_SESSION['id_user'] . "/" . $_SESSION['avatar']; ?>" width="120"/>
        <?php
            }else{
        ?>
            <img src="public/avatars/default/pictogramme_edit.png"/>
        <?php
            }
        ?>
        <div class="centre">
            <span class="image-upload">
                <form method="post" enctype="multipart/form-data">
                    <label for="file" style="margin-bottom: 0; margin-top: 5px; display: inline-flex"> <!--Acces au dossier-->
                        <input id="file" type="file" name="file" class="btn" required/>
                        <input type="submit"  class="btn" name="avatar" value="Envoyer">
                    </label>
                </form>
            </span>

            <div style="padding-top:20px">
                <form method="post">
                    <label><b>Supprimer l'avatar</b></label>
                    <input type="submit" class="btn" name="dltav" value="Supprimer"/>
                </form>
            </div>
            </div>
        </div>
    <!--Bouton-->
    <div class="box">
        <div class="button">
            <a href='index_queasy.php?route=accueil_eleve' class="btn">Menu ! <i class="fa-solid fa-house-chimney"></i> </a>
        </div>
    </div>

    <!--CSS CODE-->
    <style>
        .btn{
            margin:10px;
        }
        .centre{
            color:var(--white); 
            font-family: var(--police);
            text-align: center;
        }
        @media screen and (min-width: 601px) {
            .centre {
            font-size: 20px;
            }
        }
        @media screen and (max-width: 600px) {
            .centre {
            font-size: 15px;
            }
        }
    </style>
</body>
</html>