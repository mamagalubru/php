<?php
/*
	remplir, capitaliser et afficher un simple tableau de pr�nom
*/

	$prenom[0] = "adrien";
	$prenom[1] = "janakan";
	$prenom[2] = "mahery";
	$prenom[3] = "romain";
	$prenom[4] = "erwann";
	$prenom[5] = "thomas";
	$prenom[6] = "antoine";


for($i=0; $i<7; $i = $i + 1){
	echo "pr�nom initial : " . $prenom[$i] . " pr�nom poli : " . ucwords($prenom[$i]) . "<BR>" ;
} 

?>
