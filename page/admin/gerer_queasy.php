<!DOCTYPE html>
<html>
    <head>
        <title>QUEASY | Espace Admin | Gérer les quizz</title>
    </head>
    <body>
         <!-- ajout de la zone de l'utilisateur -->
        <?php include 'page/header.php' ?>

        <!--TEXT VOTRE ESPACE-->
        <div class="Votre_Espace">Votre espace</div>
        <!--Zone espace-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
        <!--ZONE DU PROFIL-->
        <div class="container">
            <div class="profil">

            </div>
        </div>
        <!--ZONE GERER LES QUIZZ-->
        <div class="wrapper">
            <div class="content">
                <div class="box">
                    <img src="assets/image/plus.png">
                    <h2>Consulter les quizz</h2>
                    <p>Consultez vos quizz et consultez les questions déjà existantes !</p>
                    <a href='index_queasy.php?route=voirlesquizz' class="btn"> Ajouter ! <i class="fa-solid fa-user-plus"></i>

                    </a>
                </div>
            <!--ZONE DE NOUVEAU QUIZZ-->
            <div class="box">
                <img src="assets/image/plus.png">
                <h2>Gérer les Queasy</h2>
                <p>Gérez maintenant et ici tous vos Queasy.</p>
                <a href='index_queasy.php?route=creerqueasy' class="btn"> Gérer mes QUEASY ! <i class="fa-sharp fa-solid fa-circle-plus"></i></a>
            </div>
        </div>
    </body>
</html>