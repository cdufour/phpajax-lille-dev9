<?php
session_start(); // obligatoire pour accèder aux variables de session
echo $_SESSION['connected_user'];
echo '<p><a href="logout.php" alt="">Logout</a><p>';
?>
