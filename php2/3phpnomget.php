<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Autentification ISCIO avec GET</title>
    </head>
    <body>
    <?php
    if (isset($_GET['nom']))
    { // si nom saisi on affiche un message de succès en HTML
        echo '<p>Bonjour '; echo $_GET['nom'];echo '</p>';
		if ($_GET['nom'] ==  "kangourou")
			{ // si bon mot de passe alors on affiche les codes d'accès
			?> 
			<h2>Félicitations voici les codes d'accès :</h2>
			<p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>           
    <?php
			}
    }
    else // Sinon, on affiche un message d'erreur en PHP
    {
        echo '<p>Veuillez saisir un nom SVP</p>';
    }
    ?>
    </body>
</html>