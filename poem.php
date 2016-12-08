<?php
require 'config.php';
  //print_r($_POST);

  if (isset($_POST['text']) && isset($_POST['saveTo'])) {
    if ($_POST['saveTo'] == 'file') {
      writeToFile();
    } elseif($_POST['saveTo'] == 'db') {
      writeToDatabase();
    } else {
      echo '<p>Cas non reconnu</p>';
    }
  }

  function writeToFile()
  {
    $text = $_POST['text'];
    $file = fopen("poems/poem1_".date('Ymd-His').".txt", "w") or die('erreur de le traitement du fichier');
    fwrite($file, $text);
    fclose($file);
  }

  function writeToDatabase()
  {
    $db = connect();
    if ($db) {
      // attention aux single quotes autour des valeurs
      $title = "'" . $_POST['title'] . "'";
      $text =  "'" . $_POST['text'] . "'";

      $sql = "INSERT INTO poem (title, text) VALUES ($title, $text)";

      //$sql = "SELECT * FROM user WHERE username = ".$u. " AND password=".$p."";

      $result = mysqli_query($db, $sql);

      //option: utiliser une requête préparée (prepared statement)

      if ($result) {
        echo 'requête réussie';
      } else {
        echo 'échec de la requête';
      }

      mysqli_close($db);
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Poem</title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="title" placeholder="Titre du poème">
      <br>
      <textarea name="text" rows="8" cols="80"></textarea>
      <br>
      Enregistrer dans:
      <input type="radio" name="saveTo" value="file">Fichier
      <input type="radio" name="saveTo" value="db">Base de données

      <input type="submit" name="submit" value="Envoyer">
    </form>
  </body>
</html>
