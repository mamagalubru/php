<?php
// la saisie d'une phrase
echo "Saisir une phrase : ";
$phrase = fgets(STDIN);

// l'algorithme du unpack 

$mots = split(' ',$phrase) ;
foreach ($mots as $value) {
	echo "$value\n";
	}
?>