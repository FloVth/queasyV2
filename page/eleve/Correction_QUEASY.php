<!DOCTYPE html>
<html>
    <head>  
        <!--favicon-->
        <link rel="shortcut icon" href="assets/image/Logo-QUEASY.png"/>
        <title>QUEASY | Correction</title>
    </head>
    <body>
        <!--ZONE TITRE-->
        <div class="Votre_Espace">Correction des QUEASY</div>

        <!--ZONE ESPACE-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>

        <!--TEXT SOUS-TITRE-->
        <div class="Titre_annonce">Regarder désormais la correction de vos QUEASY que vous avez réalisé ! </div>

        <!--ZONE ESPACE-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
        <!--NOM DU QUEASY-->
        <div class="petit-titre">Nom du QUEASY</div>
        <?php
            include("databass.php");
            $mysqlConnection = new PDO (
                'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
                USER, 
                PASSWORD, 
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXECEPTION], 
            )
            //Recup des id+ titre des quizz 
            $requete = $mysqlConnection->prepare('SELECT id_quizz, titre FROM quizz');
            // execute la requête
            $requete->execute(); 

            $quizz = $requete->fetchall();
            $mysqlConnection = null; 
            $requete = null; 
            ?>
            <p class="Affichage_Quizz"><?= $ligne["titre"] ?></p>
            <a href ="montrerquizz.php?id=<?=$ligne["id_quizz"] ?>"></a>

        <!--BOUTON HOME-->
        <a href='index_queasy.php?route=accueil_eleve' class="btn">Menu ! <i class="fa-solid fa-house-chimney"></i> </a>
    </body>
</html>