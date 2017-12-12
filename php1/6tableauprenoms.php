<?php
/*
	remplir, capitaliser et afficher un simple tableau de prénom
*/

	$prenom[0] = "adrien";
	$prenom[1] = "janakan";
	$prenom[2] = "mahery";
	$prenom[3] = "romain";
	$prenom[4] = "erwann";
	$prenom[5] = "thomas";
	$prenom[6] = "antoine";


for($i=0; $i<7; $i = $i + 1){
	echo "prénom initial : " . $prenom[$i] . " prénom poli : " . ucwords($prenom[$i]) . "<BR>" ;
} 

?>
