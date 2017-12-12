    <?php
    // On d�marre la session (ceci est indispensable dans toutes les pages)
    session_start ();
    // On r�cup�re nos variables de session
    if (isset($_SESSION['alias'])) {
    	// On teste pour voir si nos variables ont bien �t� enregistr�es
    	echo '<html>';
    	echo '<head>';
    	echo '<title>Page menu de notre session</title>';
    	echo '</head>';
    	echo '<body>';
    	echo 'Votre login est '.$_SESSION['alias'].' et votre code de session est '.session_id().'.';
    	echo '<br />';

    	// On affiche un lien pour fermer notre session
    	echo '<a href="./5logoutaliassession.php">D�connexion</a>';
    }
    else {
    	echo 'Vous ne poss�dez pas de session.';
    }
    ?>