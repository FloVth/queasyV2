<!DOCTYPE html>
<html>
    <head>
        
        <title>QUEASY | Espace Admin</title>
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
            <div class="profil"></div>
        </div>
        <!--ZONE GERER ELEVE-->
        <div class="wrapper">
            <div class="content">
                <div class="box">
                    <img src="assets/image/adduser.png">
                    <h2>Gérer des élèves</h2>
                    <p>Gérez un groupe de personnes ainsi que leurs promotions, afin de leur envoyer rapidement.</p>
                    <a href='index_queasy.php?route=gerereleve' class="btn"> Ajouter ! <i class="fa-solid fa-user-plus"></i></a>
                </div>

        <!--ZONE DE RESULTAT-->
                <div class="box">
                    <img src="assets/image/Trophy.png">
                    <h2>Résultat</h2>
                    <p>Avec cette fonctionnalité, vous pourrez désormais voir le score des personnes ayant effectué votre quizz.</p>
                    <a href='/QUEASY/https---github.com-FloVth-Queasy/classement.php' class="btn">voir les résultats ! <i class="fa-solid fa-trophy"></i> </a>
                </div>
        <!--ZONE DE NOUVEAU QUIZZ-->
                <div class="box">
                    <img src="assets/image/plus.png">
                    <h2>Gérer les Queasy</h2>
                    <p>Gérez maintenant et ici tous vos Queasy.</p>
                    <a href='index_queasy.php?route=gererqueasy' class="btn"> Gérer mes QUEASY ! <i class="fa-sharp fa-solid fa-circle-plus"></i></a>
                </div>
            </div>
        </div>
    </body>
</html>