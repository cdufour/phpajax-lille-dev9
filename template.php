<?php
session_start();
?>
<?php include 'includes/datasource.inc.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Template</title>
  </head>
  <body>
    <h1>Template</h1>
    <?php include 'includes/html/menu.inc.html' ?>
    <p>Envoi de données à page2.php</p>
    <form action="page2.php"
        method="POST" enctype="multipart/form-data">
      Pseudo <input type="text" name="pseudo"><br>
      Fichier <input type="file" name="myfile">
      <input type="submit" name="submit" value="Envoi">
    </form>
    <ul>
      <?php foreach($clients as $client): ?>
        <li class="<?php if($client['isMember']) echo 'member'?>">
          <a href="#"><?php echo $client['name'] ?></a>
          <?php if($client['name'] == 'Mounir'): ?>
            <em>(célèbre mathématicien)</em>
            <div style="display:none">
                <p>Texte caché</p>
            </div>
          <?php endif ?>
        </li>
      <?php endforeach ?>
    </ul>
    <?php include 'includes/html/images.inc.html' ?>
  </body>
</html>
