<?php

  if(isset($_POST['poem']) && isset($_POST['saveTo'])){
  if($_POST['saveTo'] == 'file'){
    writeToFile();
  } elseif($_POST['saveTo']=='db') {
    writeToDatabase();
  } else {
    echo '<p>Cas non reconnu</p>'
  }

  }

  function writeToFile(){
    $text = $_POST['poem'];
    $file = fopen("poem/poem1".date(Ymd-His).".txt","w") or die("erreur dans le traitement");
    fwrite($file, $text);
    fclose($file);
    // attention aux failles XSS
    // echo '<p>'.$_POST['poem'].'</p>';
    // echo '<p>'.htmlspecialchars($_POST['poem'])
  }

  function writeToDatabase(){

  }
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Poème</title>
    </head>
    <body>
      <form action="" method="POST">
        <textarea name="poem" rows="8" cols="80"></textarea>
        Enregistrer dans:
        <input type="radio" name="saveTo" value="file">Fichier
        <input type="radio" name="saveTo" value="db">Base de données
        <input type="submit" name="submit" value="Envoyer">

      </form>
    </body>
</html>
