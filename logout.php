<?php
session_start(); // accès à la session pour pouvoir la détruire
session_destroy(); // destruction
header('Location:page2.php'); // redirection
?>
