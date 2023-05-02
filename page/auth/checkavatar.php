
<?php
if(!empty($_POST))
    {
        extract($_POST);
        $valid = true;

        if(!isset($_POST['modifier']))
        {
            // si on a bien un nom on pourra faire quelque chose ! toujours mettre ['file'] devant
           if(isset($_FILES['file']) && !empty($_FILES['file']['name']))
           {
            // o va récuprer le nom tempraire
            $filename = $_FILES['file']['temporaire_name']; // cour instant
            $tailleMax = "5242880"; // taile max de 5 Mo

            //verifier si la taille est correct
            if($_FILES['file']['size'] <= $tailleMax)
            {
                //verifier les extensions valident
                $extensionValides = array ('jpg', 'png', 'jpeg', 'gif'); 
                //On récupère l'extension de notre fichier upload avec fonction sta,dars de PHP 
                $extensionUpload = strtolower(substr(strrchr($_FILES['file']['name'], '.'),1));  // 1 = de la premier occurence

                //Verifier l'esxtension par rapport à nos extension souhaitées
                if(in_array($extensionUpload, $extensionValides))// fonction in_array si on a ça on continue
                {
                    // recueper l'image de l'utilisateur en créant des sous dossiers dans pubnlic/avatars
                    $dossier = '/public/avatars/' . $_SESSION['id_user'] . '/'; //On creer un fichier au nom de l'id de l'utilisiateur

                    //Verifier que le dossier existe
                    if(!is_dir($dossier))
                    {
                        //Si existe pas on le créer
                        mkdir($dossier) ;
                    }
                    // on va renommer l'image au cas si l'user  à des data persnnel
                    $nom = md5(uniqid(rand(), true));  //uniqid permet de générer un nom unique à la photorand s'il y en plusieurs

                    //On ecrire le chemin 
                    $chemin = $dossier . $nom . '.' . $extensionUpload; 
                    //On va deplacer le fichier 
                    $resultat = $move_upload_file($_FILES['file']['temporaire_name'], $chemin); // fonction qui retourne vrai ou faux 

                    //Si ça marcher
                    if ($resultat)
                    {
                        //On va verifier qu'on puisse le lire 
                        if(is_readable($chemin))
                        {
                            //Mettre a jour le profile
                            $requete = $mysqlConnection->prepare("UPDATE user SET avatar = id WHERE id_user = id");
                             $requete->execute(["id"=>$_SESSION['id_user']]);
                            //On execute la requete
                            $requete->execute([($nom . '.' . $extensionUpload), $_SESSION['id_user']]);
                            //Si tout a marcher on redirige 
                            header ('Location:index_queasy.php?route=accueil_eleve');
                            exit;
                        }else{
                            $err_avatar = "Impossible d'optimiser votre fichier";
                        }
                    }else{
                        $err_avatar = "Impossible d'importer votre image"; 
                    }
                }else{
                    $err_avatar="L'extension de votre image n'est pas valide";
                }
            }else{
                $err_avatar ="Votre image dot faire 5 Mo ou moins";
            }
           }else{
             $err_avatar ="Ce fichier n'est pas valide";
           }
        }
    }
    ?>