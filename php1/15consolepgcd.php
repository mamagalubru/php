<?php
// la saisie d'une ou plusieurs valeurs
echo "Saisir un nombre : ";
$n1 = fgets(STDIN);
echo "Saisir un autre nombre : ";
$n2 = fgets(STDIN);
// l'algorithme du PGCD
if ($n1 < $n2) {
	$bascule = $n2;
	$n2 = $n1;
	$n1 = $bascule ;
} 
$reste = 1 ;
while ($reste > 0) {
	$reste = $n1 % $n2 ;
	echo "$n1 $n2 $reste \n";
	$n1 = $n2 ;
	$n2 = $reste ;
	}
echo "Le PGCD est $n1 \n";
?>