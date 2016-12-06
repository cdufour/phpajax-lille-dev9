<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php

  echo '<p>texte renvoyé par <strong>PHP</strong></p>';

  //variables simple (primitives) (préfixés par un $)
  $message = "formation PHP"; //string
  $year    = 2016; //integer
  $isActive = true; //boolean
  $price = 450.20; //double
  $config = null; // NULL

  //variables complexes
  $colors = [$message, $year , 18];

  //tableau associatif
  $client = array(
    'id' => 18,
    'firstname' => 'Blaise',
    'lastname' => 'Pascal',
    'categories' => ['philosophie','Sciences','Histoire']
  );

  echo gettype($message);
  echo gettype($year);
  echo gettype($isActive);
  echo gettype($price);
  echo gettype($config);

  echo gettype($colors);
  echo gettype($client);


  print_r($colors);

  echo '<p> Le client ' . $client["firstname"] . ' ' . $client["lastname"] . ' '. 'est mort en' . $colors[1] . '</p>';

  //constantes
  define('AUTHOR','Fabien Potencier');
  define('APP_VERSION', '1.0');

  echo '<p>Version actuelle '. APP_VERSION .'</p>';

  //APP_VERSION = '1.2' ; INTERDIT

  //accés à un tableau imbriqué
  echo $client['categories'][2] . '<br>';
  $client['categories'][2] = 'Géographie';
  echo $client['categories'][2] . '<br>';

  //Opérateurs
  $operation = (10*5) %2; //Le modulo 2  nous envoie le reste d'une division
  echo $operation . '<br>';

  $text = " Bonjour";
  $text  .= " et au revoir ";
  echo $text . '<br>';


  $operation2 = 14;
  $operation2 += 16;
  echo $operation2. '<br>';

  //incrémentation et décrementation
  echo ++$operation2 ; //Pour que l'incrementation soit prise en compte avant le echo , sinon le echo va afficher la valeur avant l'incrementation
  echo  '<br>' . --$operation2;

  //opérateurs logiques

  if ($isActive) echo '<p>Le client est actif </p>';

  $isActive  = !$isActive ; //operateur de negation de isActive
  if($isActive) {
    echo '<p>Le client est actif </p>';
  } else {
    echo '<p>Le client est inactif </p>';
  }

//avec l'operateur ternaire ( ? si et : sinon)
 echo ($isActive === true) ? '<p> Actif </p>' : '<p> Inactif </p>';


 //structure de controle
 //boucle
 //for
  for ($i=0; $i<10 ; $i++) {
      echo "<p>Passage n° $i, l'amour est dans le pré</p>";  //autre syntaxe de la concaténation quand on utilise les doubles cotes
  }

  //while
  $j=0;
  while ($j<10){
    echo '<p>Passage n° $j, l\'amour est dans le pré</p>';
    $j++;
  }

  //foreach
  $fruits = array ('Pêche', 'Pomme', 'Poire');
  foreach($fruits as $fruit){
    echo "<p>$fruit</p>";
  }
  //foreach avec tableau associatif
  $legumes = array('item1' => 'Choux', 'item2' => 'Navet' , 'item3' => 'Carotte');
  foreach($legumes as $key => $legume){ //on souhaite exploité les 2 cotés de lassociation
    echo "<p> <strong>$key</strong> : $legume </p>";
  }

  // Structure conditionnelle (if, switch)
  $password = 1234;
  switch ($password){
    case 0000 :
        echo "Faux !";
        break ;
    case 9999 :
        echo "Faux !";
        break ;
    case 1234 :
        echo "Vrai !";
        break ;
    default :
        echo "Je ne sais pas";
  }

  //Fonctions
  function add($a, $b)
  {
      return $a + $b ;
  }

  $resultat  = add(8,7); //un retour d'une fonction au sein d'une variable
  echo "<p>$resultat</p>";


//  echo "<p>add(15,15)</p>"; ça ne marche pas avec les fann_get_cascade_activation_functions
  echo "<p>" . add($resultat,$resultat) . "</p>" ; //On a rajouter la concaténation




 ?>
