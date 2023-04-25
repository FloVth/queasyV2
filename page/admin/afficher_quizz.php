<!DOCTYPE html>
<html>
    <head>

        <link rel="shortcut icon" href="Logo-QUEASY.png"/>
        <title>QUEASY | Espace Admin</title>







    </head>
    <body>
 <!-- ajout de la zone de l'utilisateur -->
 <?php include 'page/header.php' ?>

        <div class="Votre_Espace">Vos Queasy déjà créés</div>
    <?php

    $mysqlConnection = new PDO(
    'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );

       ?>

<div class="row justify-content-center">
    <div class="col-8 text-center">
        <h1><?php echo $_GET["id"]; ?></h1>
    </div>
</div>


<?php


// Récupérer les titres et les IDs des quiz depuis la base de données
$requete = $mysqlConnection->prepare ('SELECT * FROM question q INNER JOIN quizz qu on q.fk_id_quizz=qu.id_quizz WHERE id_quizz=:id');
//execution de la requete
$requete->execute(["id"=>$_GET["id"]]);

$questions = $requete->fetchAll();
$mysqlConnection = null;
$requete = null;

?>





<div class="row justify-content-center">
    <div class="col-8">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Question</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $ligne) { ?>
                    <tr>
                        <td><?= $ligne["id_question"] ?></td>
                        <td><?= $ligne["libelle_question"]?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    table {
        margin: auto;
    }
</style>

</body>
</html>

