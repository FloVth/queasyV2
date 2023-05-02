<?php
include("config/database.php");
 $mysqlConnection = new PDO(
    'mysql:host=' .SERVER.';dbname='.DBNAME.';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
 );


 if(isset($_POST['submit'])) {

    $requete = $mysqlConnection->prepare('INSERT INTO quizz(titre) values(:quiz_name)');
    $requete->execute( ["quiz_name"=>$_POST["quiz_name"]]);

    $id = $mysqlConnection->lastInsertId();

    // Récupération des questions et des réponses

    for($i = 1; $i <= 20; $i++) {

        // ordre de mission
        $requete = $mysqlConnection->prepare('INSERT INTO question(libelle_question,fk_id_quizz) values(:question,:fk_quizz)');

        //execution de la requete
        $requete->execute( ["question"=>$_POST['question'.$i],"fk_quizz"=>$id]);

    }
    $quiz_name = $_POST['quiz_name'];


$mysqlConnection = null;
$requete = null;

 }
?>