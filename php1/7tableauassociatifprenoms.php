<?php
/*
	remplir et afficher un tableau de prénoms grâce à un tableau associatif
*/

	$prenom["007"] = "adrien";
	$prenom["421"] = "janakan";
	$prenom["xxx"] = "mahery";
	$prenom["xy"] = "romain";
	$prenom["java"] = "erwann";
	$prenom["php"] = "thomas";
	$prenom["x"] = "antoine";


foreach($prenom as $key=>$value){
	print "Le nom de code $key correspond au prénom $value <BR>\n" ;
} 

?>
