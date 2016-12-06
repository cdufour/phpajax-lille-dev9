<?php
  if(isset($_GET['message'])){
    echo 'message bien reçu : ' . $_GET['message'];
  } else {
    echo 'pas de message';
  }


  $orderby = $_GET['orderby'];

  if($orderby == 'asc'){
    echo "on affiche les données dans l'ordre croissant";
  }elseif($orderby == 'desc') {
    echo "on affiche les données dans l'ordre décroissant";
  }else {
    echo "Order inconnu";
  }
?>
