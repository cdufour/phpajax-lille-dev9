<?php
session_start(); // accées à la session pour pouvoir la détruire
session_destroy(); //destruction

header('Location:page2.php'); //redirection à la page 2 lors de la destruction de la session
?>
