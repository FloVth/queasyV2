<?php

// Vérifier si le formulaire a été soumis avec un fichier
if (isset($_POST['submit'])) {
  
    include("config/database.php");
    $mysqlConnection = new PDO(
       'mysql:host=' .SERVER.';dbname='.DBNAME.';charset=utf8',
       USER,
       PASSWORD,
       [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
   

  // Vérifier si un fichier a été téléchargé
  if (!empty($_FILES['image']['name'])) {

    // Définir les paramètres de l'image
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $extensions = array("jpeg", "jpg", "png", "gif");

    // Vérifier si l'extension du fichier est valide
    if (in_array($file_ext, $extensions) === false) {
      echo "Extension non prise en charge, veuillez choisir un fichier JPEG, JPG, PNG ou GIF.";
    }

    // Vérifier si la taille du fichier est inférieure à 1 Mo
    elseif ($file_size > 1048576) {
      echo "Le fichier doit être inférieur à 1 Mo.";
    }

    else {

      // Générer un nom unique pour l'image
      $new_filename = uniqid('', true) . '.' . $file_ext;

      // Définir le chemin d'accès du dossier d'images
      $target_dir = "images/";

      // Définir le chemin d'accès complet de l'image
      $target_file = $target_dir . $new_filename;

      // Déplacer le fichier téléchargé vers le dossier d'images
      if (move_uploaded_file($file_tmp, $target_file)) {

        // Insérer le chemin d'accès de l'image dans la base de données
        $sql = "INSERT INTO images (image_path) VALUES ('$target_file')";

        if ($conn->query($sql) === TRUE) {
          echo "Le fichier a été téléchargé avec succès.";
        } else {
          echo "Erreur lors de l'insertion dans la base de données : " . $conn->error;
        }
      } else {
        echo "Erreur lors du téléchargement du fichier.";
      }
    }
  } else {
    echo "Veuillez choisir un fichier à télécharger.";
  }

  // Fermer la connexion
  $conn->close();
}
?>