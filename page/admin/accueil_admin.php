<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <linK rel="stylesheet" href="espace_eleve.css"> 
        <link href="Polices/VisbyRoundCF-Heavy.otf" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>QUEASY | Espace Admin</title>
    </head>
    <body>
         <!-- ajout de la zone de l'utilisateur -->
        <?php include 'headerutilisateur.php'; ?>
            
 
        <!-- logo du queasy -->
        <div class="Logo-QUEASY">
            <img src="Logo-QUEASY.png" alt="Logo du QUEASY" class="responsive-image" width="250" height="250">
        </div>
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
        <!--ZONE GERER ELEVE-->
        <div class="wrapper">
            <div class="content">
                <div class="box">
                    <img src="adduser.png">
                    <h2>Gérer des élèves</h2>
                    <p>Gérer un groupe de personnes ainsi que leurs promotions, afin de leur envoyer rapidement.</p>
                    <a href='gerereleve.php' class="btn"> Ajouter ! <i class="fa-solid fa-user-plus"></i>

                    </a>
                </div>
        <!--ZONE DE RESULTAT-->
                <div class="box">
                    <img src="Trophy.png">
                    <h2>Résultat</h2>
                    <p>Avec cette fonctionnalité, vous pourrez désormais voir le score des personnes ayant effectué votre quizz.</p>
                    <a href='/QUEASY/https---github.com-FloVth-Queasy/classement.php' class="btn">voir les résultats ! <i class="fa-solid fa-trophy"></i> </a>
                </div>
                 <!--ZONE DE NOUVEAU QUIZZ-->
                <div class="box">
                    <img src="plus.png">
                    <h2>Gérer un nouveau Quizz</h2>
                    <p>Gérer maintenant votre propre quizz 20 questions à créer vous attend.</p>
                    <a href='creerqueasy.php' class="btn"> Créer mon QUEASY ! <i class="fa-sharp fa-solid fa-circle-plus"></i></a>
                </div>
            </div>
        </div>
    </body>
</html>