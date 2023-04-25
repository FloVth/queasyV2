<title>QUEASY | Espace Admin | Voir les quizz</title>

    <body>
    <?php
  
    $mysqlConnection = new PDO(
    'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
  )
?>
 <!-- ajout de la zone de l'utilisateur -->
 <?php include 'page/header.php' ?>
    
        <div class="Votre_Espace">Vos Queasy déjà créés</div>

      <?php



   // Récupérer les titres et les IDs des quiz depuis la base de données
   $requete = $mysqlConnection->prepare('SELECT id_quizz, titre FROM quizz');
   //execution de la requete
   $requete->execute();
  
   $quizz = $requete->fetchAll();
   $mysqlConnection = null;
   $requete = null;
  
   ?>
 
 <div class="container">
     <div class="row justify-content-center">
         <?php foreach ($quizz as $ligne) { ?>
             <div class="col-md-4 mb-3">
                 <div class="card h-100 border border-dark">
                     <div class="card-body d-flex flex-column justify-content-between">
                         <h5 class="card-title"><?= $ligne["titre"] ?></h5>
                         <a href="index_queasy.php?route=afficher_quizz&id=<?= $ligne["id_quizz"] ?>" class="btn btn-primary align-self-end">Voir</a>


                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>
 </div>