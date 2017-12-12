    <?php
    // On démarre la session (ceci est indispensable dans toutes les pages)
    session_start ();
    // On récupère nos variables de session
    if (isset($_SESSION['alias'])) {
    	// On teste pour voir si nos variables ont bien été enregistrées
    	echo '<html>';
    	echo '<head>';
    	echo '<title>Page menu de notre session</title>';
    	echo '</head>';
    	echo '<body>';
    	echo 'Votre login est '.$_SESSION['alias'].' et votre code de session est '.session_id().'.';
    	echo '<br />';

    	// On affiche un lien pour fermer notre session
    	echo '<a href="./5logoutaliassession.php">Déconnexion</a>';
    }
    else {
    	echo 'Vous ne possédez pas de session.';
    }
    ?>