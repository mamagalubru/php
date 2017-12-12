<?php
// afficher un calcul
echo "Nombre entier : " ;
$nombre = fgets(STDIN) ;
$reste = $nombre % 35 ;
if ($reste == 0) {
	echo "Le nombre : $nombre est divisible par 5 et par 7 \n" ;
} else {
	echo "Le nombre : $nombre n'est pas divisible par 5 et par 7 \n" ;
}
?>
