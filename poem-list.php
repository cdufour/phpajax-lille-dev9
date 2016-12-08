<?php
require 'config.php';
$db = connect();
if ($db) {
  $poems = array(); // tableau à renvoyer au format json
  $sql = "SELECT * FROM poem";
  $result = mysqli_query($db, $sql);
  // Afficher les lignes // fetch
  // conversion des rows sql en tableaux associatifs php
  while($poem = mysqli_fetch_array($result)) {
    array_push($poems, $poem);
  };
  echo json_encode($poems);
  mysqli_close($db);
}
?>
