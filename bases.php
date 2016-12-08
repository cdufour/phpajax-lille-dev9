<!-- texte html statique renvoyé par le serveur -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php
  echo '<p>texte renvoyé par <strong>PHP</strong></p>';

  // variables simples (primitives)
  $message  = "Formation PHP"; // string
  $year     = 2016; // integer
  $isActive = true; // boolean
  $price    = 450.20; // double
  $config   = null; // NULL

  // variables complexes
  $colors = [$message, $year, 18];

  // tableau associatif
  $client = array(
    'id' => 18,
    'firstname' => 'Blaise',
    'lastname' => 'Pascal',
    'categories' => ['philosophie', 'sciences', 'histoire']
  );

  echo gettype($message);
  echo gettype($year);
  echo gettype($isActive);
  echo gettype($price);
  echo gettype($config);
  echo gettype($colors);
  echo gettype($client);

  print_r($colors);

  echo '<p>Le client ' . $client["firstname"] . ' ' . $client["lastname"] . ' est mort en ' . $colors[1] . '</p>';

  // constantes
  define('AUTHOR', 'Fabien Potencier');
  define('APP_VERSION', '1.0');
  echo '<p>Version actuelle '. APP_VERSION .'<p>';
  //APP_VERSION = '1.2'; INTERDIT !

  // accès lecture/écriture à un tableau imbriqué
  echo $client['categories'][2] . '<br>';
  $client['categories'][2] = 'Géographie';
  echo $client['categories'][2] . '<br>';

  // opérateurs
  $operation = (10*5) % 2; // modulo (reste de la division)
  echo $operation . '<br>';

  $text = "Bonjour";
  $text .= " et au revoir";
  echo $text . '<br>';

  $operation2 = 14;
  $operation2 += 16;
  echo $operation2 . '<br>';

  // incrémentation et décrémentation
  echo ++$operation2; // echo $operation2++ affiche avant d'incrémenter
  echo '<br>' . --$operation2;

  // opérateurs logiques
  if ($isActive) echo '<p>Le client est actif<p>';

  $isActive = !$isActive;   // opération de négation
  if ($isActive) {
    echo '<p>Le client est actif<p>';
  } else {
    echo '<p>Le client est inactif<p>';
  }

  // avec l'opérateur ternaire
  echo ($isActive === true) ? '<p>Actif</p>' : '<p>Inactif</p>';


  // structures de contrôle
  //  structures itératives (boucles)
  //    for
  for($i=0; $i<10; $i++) {
    echo "<p>Passage n° $i, l'amour est dans le pré</p>";
  }

  //    while
  $j = 0;
  while($j<10) {
    echo '<p>Passage n° $j, l\'amour est dans le pré</p>';
    $j++;
  }

  //    foreach
  $fruits = array('Pêche', 'Pomme', 'Poire');
  foreach($fruits as $fruit) {
    echo "<p>$fruit</p>";
  }

  $legumes = array('item1'=>'Choux', 'item2'=>'Navet', 'item3'=>'Carotte');
  foreach($legumes as $key => $legume) {
    echo "<p><strong>$key</strong> : $legume</p>";
  }

  //  Structure conditionnelle (if, switch)
  $password = 5555;
  switch ($password) {
    case 0000:
      echo "Faux !";
      break;
    case 9999:
      echo "Faux !";
      break;
    case 1234:
      echo "Juste !";
      break;
    default:
      echo "je ne sais pas";
  }

  // Fonctions
  function add($a, $b)
  {
    return $a + $b;
  }

  $result = add(8,7);
  echo "<p>$result</p>";
  echo "<p>" . add($result, $result) ."</p>"


?>
