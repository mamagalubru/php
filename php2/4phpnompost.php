<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Autentification ISCIO avec POST</title>
    </head>
    <body>
    <?php
    if (isset($_POST['nom']))
    { // si nom saisi on affiche un message de succès en HTML
        echo '<p>Bonjour ' . $_POST['nom'] . '</p>';
        echo '<p>Bonsoir ' . htmlspecialchars($_POST['nom']) . '</p>';
        echo '<p>Bonne nuit ' . strip_tags($_POST['nom']) . '</p>';
		if (strip_tags($_POST['nom']) ==  "kangourou")
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