<?php
/*
	remplir et afficher un simple tableau de caractères
*/

for($i=0; $i<26; $i = $i + 1){
	$numero = 65 + $i ;
	$caractere = chr($numero);
	$alphabet[$i]=$caractere;
} 

for($i=0; $i<26; $i = $i + 1){
	echo "Lettre : " . $alphabet[$i] . " code ascii : " . ord($alphabet[$i]) . "<BR>" ;
} 

?>
