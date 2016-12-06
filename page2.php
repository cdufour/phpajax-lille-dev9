<?php
session_start(); //obligatoire pour acceder aux variables de session
echo $_SESSION['connected_user'];

  //print_r($_FILES);
  //print_r($_SERVER);

  //variables config
  $maxSize = 100000;
  $allowedMimes = array(  //Les mimes fonctionnent categorie format
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/gif'
  );
  //Adresse de Telechargement
  $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/formation-php-ajax/uploads'; //le DOCUMENT_ROOT nous renvoie l'adresse de htdocs


  if(isset($_FILES['myfile'])){
    $originalName = $_FILES['myfile']['name'];

    if($_FILES['myfile']['size'] > $maxSize){
      echo 'Fichier trop lourd !';
    } elseif(!in_array($_FILES['myfile']['type'],$allowedMimes)){
      echo 'Type de fichier non autorsé! ';
    } elseif (file_exists( $uploadDir . '/' . $originalName )){
      echo'<p>Le fichier existe déjà </p>';
    } else {
        $move = move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadDir . '/' . $originalName ); //Pour deplacer les fichiers uploader
        if ($move){
        echo '<p>Telechargement réussi</p>';
      } else {
        echo '<p>Echec du Telechargement</p>';
      }
    }
  }
//  print_r($_POST); pour tester et debbuger
  if (isset($_POST['submit'])){ //s'il ya dans la page une  valuer submit
    echo "Merci  " . $_POST['pseudo']  . " pour ton formulaire";
  }

//header('location:template.php'); pour la redirection
 ?>
