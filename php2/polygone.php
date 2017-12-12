<?php

//création carré rouge
$image=imagecreate(500,500);
$colorPink=imagecolorallocate($image,0xFF,0xCC,0xCC);
$colorBlack=imagecolorallocate($image,0,0,0);
imagefill($image,0,0,$colorPink);

// trace un rectangle
imagerectangle($image, 10,10,90,90,$colorBlack) ;

// trace un polygone
//$points = array(50,10,10,90,90,90);
//imagerectangle($image, $points, 3 ,$colorBlack) ;

//envoi de l'image au navigateur
header("Content-type: image/png");
imagepng($image);
?>