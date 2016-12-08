<?php
function player_get_all()
{
  $db = mysqli_connect(HOST, USER, PASS, DB);
  $players = array();
  if ($db) {
    $sql = "SELECT * FROM player";
    if ($result = mysqli_query($db, $sql)) {
      while($player = mysqli_fetch_array($result)) {
        //array_push($players, $player);
        // si problème d'encodage SQL
        array_push($players, utf8_encode_recursive($player));
      }
      return $players;
    } else {
      return null;
    }

  }
  mysqli_close($db);
}
?>
