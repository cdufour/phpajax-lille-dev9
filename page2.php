<?php
session_start(); // obligatoire pour accèder aux variables de session
echo $_SESSION['connected_user'];

  //print_r($_FILES);
  //print_r($_SERVER);

  // variables de config
  $maxSize = 100000;
  $allowedMimes = array(
    'image/png',
    'image/gif',
    'image/jpg',
    'image/jpeg',
    'application/pdf'
  );
  $uploadDir =
    $_SERVER['DOCUMENT_ROOT'] . '/formation-php-ajax/uploads';


  if (isset($_FILES['myfile'])) {
    $originalName = $_FILES['myfile']['name'];

    if ($_FILES['myfile']['size'] > $maxSize) {
      echo 'Fichier trop lourd !';
    } elseif (!in_array($_FILES['myfile']['type'], $allowedMimes)) {
      echo 'Type de fichier non autorisé !';
    } elseif (file_exists($uploadDir . '/' . $originalName)) {
      echo '<p>Le fichier existe déjà</p>';
    } else {
      $move = move_uploaded_file(
        $_FILES['myfile']['tmp_name'],
        $uploadDir . '/' . $originalName
      );
      if ($move) {
        echo '<p>Téléchargement réussi</p>';
      } else {
        echo '<p>Echec du téléchargement</p>';
      }

    }

  }

  if (isset($_POST['submit'])) {
    echo "Merci " . $_POST['pseudo'] . " pour ton formulaire";
  }
  //header('location:template.php'); redirection
?>
