<?php
setlocale(LC_CTYPE, 'fr_FR.UTF-8');
// afficher un calcul
CONST PI = '3.1416' ;
echo "Rayon : " ;
$rayon = fgets(STDIN) ;
$perimetre = 2 * $rayon * PI ;
$surface = $rayon * $rayon * PI ;
echo "Rayon : " . round($rayon,2) . "m Périmètre : " . round($perimetre,2) . "m Surface : " . round($surface,2) . "m²\n" ;
?>
