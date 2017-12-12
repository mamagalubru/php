<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Autentification avec mise en session</title>
    </head>
    <body>
    <?php
    if (isset($_POST['alias']))
    { // si nom saisi on affiche un message de succès en HTML
        echo '<p>Bonjour '. $_POST['alias'] . ' Félicitations vous voilà sessionnifié</p>';		
		session_start (); // dans ce cas, tout est ok, on peut démarrer notre session		
		$_SESSION['alias'] = $_POST['alias']; // on enregistre l'alias comme variable de session		
		header ('location: 5menualiassession.php'); // on redirige notre visiteur vers un menu				
    }
    else // Sinon, on affiche un message d'erreur en PHP
    {
        echo '<p>Veuillez saisir un alias SVP</p>';
    }
    ?>
    </body>
</html>