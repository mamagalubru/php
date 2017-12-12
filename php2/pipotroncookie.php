<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PIPOTRON COOKIE</title>
    </head>
    <body>
	<H1>Le Pipotron</H1>
	<H2>Cette fois, on dirait une phrase sortie d'une teuf de centraliens, eh, eh je vous piste ...</H2>
    <?php
    if (isset($_COOKIE['phrase']))
    { // si 1er mot saisi on affiche la phrase entière
        echo '<p>'.$_COOKIE['phrase'].'</p>';
    }
    else
    { // Sinon, on affiche un message d'absence en PHP
        echo '<p>Pas de cookie</p>';
    }
    ?>
    </body>
</html>