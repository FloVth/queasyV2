<title>QUEASY | Espace Admin | Voir les quizz</title>

    <body>
    <?php
    include("config/database.php");
    $mysqlConnection = new PDO(
    'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8',
    USER,
    PASSWORD,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
  )
?>
        <!--LOGO DU QUEASY-->
        <?php include 'page/utilisateur.php'; ?>
        
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


    
  </div>
  <div class="row">
    <div class="col">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
 
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($quizz as $ligne){
            ?>  
            <tr>
                <th scope="row"><?= $ligne["id_quizz"] ?></th>
                <td><?= $ligne["titre"]?></td>
   <td><a href='montrerquizz.php?id=<?= $ligne["id_quizz"] ?>'> Voir </a>
                <?php
        }
        ?>