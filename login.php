<?php
session_start();
  $user = array('username' =>'Gooduser' ,'pass' =>1234 );

  if (isset($_POST['submit'])){
    echo 'submit ok';
    $username=$_POST['username'];
    $password=$_POST['password'];


    if($username == $user['username'] && $password == $user['pass']){
        $_SESSION['connected_user'] = $username;
        header('Location:template.php');
    } else {
      echo "Echec de l'identification";
    }
  }
?>
<h2>Identification</h2>
<form action="" method="POST">
      <input type="text" name="username" placeholder="Nom d'utilisateur">
      <input type="text" name="password" placeholder="Mot de passe">
      <input type="submit" name ="submit" >
</form>
