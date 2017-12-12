    <?php
    // On démarre la session
    session_start ();
    echo 'Votre session est '.session_id().' va être détruite.';
    // On détruit les variables de notre session
    session_unset ();
    // On détruit notre session
    session_destroy ();
    // On redirige le visiteur vers la page de départ
    header ('location: 5formaliassession.php');
    ?>