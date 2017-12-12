<?php
$phrase = $_POST['pipo2'].' '.$_POST['pipo5'].' '.$_POST['pipo7'];
setcookie('phrase', $phrase, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PIPOTRON CIBLE</title>
    </head>
    <body>
	<H1>Le Pipotron</H1>
	<H2>Vraiment n'importe quoi, on dirait une phrase sortie de polytechnique ...</H2>
    <?php
    if (isset($_POST['pipo1']))
    { // si 1er mot saisi on affiche la phrase entière
        echo '<p>'.$_POST['pipo1'].' '.$_POST['pipo2'];
		echo ' '.$_POST['pipo3'].' '.$_POST['pipo4'];
		echo ' '.$_POST['pipo5'].' '.$_POST['pipo6'];
		echo ' '.$_POST['pipo7'].' '.$_POST['pipo8'].'</p>';
    }
    else
    { // Sinon, on affiche un message d'erreur en PHP
        echo '<p>Veuillez saisir une phrase nom SVP</p>';
    }
    ?>
    </body>
</html>