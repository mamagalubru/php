<?php
/*
	remplir et afficher un simple tableau  
*/

for($i=0; $i<13; $i = $i + 1){
	$x = 3.14 * $i / 6;
	$cosx = cos($x);
	$angle[$i]=round($x,2);
	$cosinus[$i]=round($cosx,3);
} 

for($i=0; $i<13; $i = $i + 1){
	echo "Angle en radians : " . $angle[$i] . " Cosinus : " . $cosinus[$i] . "<BR>" ;
} 

?>
