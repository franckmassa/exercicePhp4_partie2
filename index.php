<?php
//Déclaration de la variable
$magnitude = 6;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice4</title>
</head>
<body>
  <p>
    <?php
    switch ($magnitude)
    {
      case 1: // dans le cas où la magnitude égale 1
      echo '1: Micro-séisme impossible à ressentir.';
      break;

      case 2: // dans le cas où la magnitude égale 2
      echo '2: Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
      break;

      case 3: // dans le cas où la magnitude égale 3
      echo '3: Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
      break;

      case 4: // dans le cas où la magnitude égale 4
      echo '4: Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
      break;

      case 5:// dans le cas où la magnitude égale 5
      echo '5: Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
      break;

      case 6:// dans le cas où la magnitude égale 6
      echo '6: Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
      break;

      case 7:// dans le cas où la magnitude égale 7
      echo '7: Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
      break;

      case 8:// dans le cas où la magnitude égale 8
      echo '8: Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
      break;

      case 9:// dans le cas où la magnitude égale 9
      echo '9: Séisme capable de tout détruire sur une très vaste zone.';
      break;

      default:
      echo 'En attente de valeur de la magnitude.';
    }
    ?>
  </p>
</body>
</html>
