    <?php
    // On d�marre la session
    session_start ();
    echo 'Votre session est '.session_id().' va �tre d�truite.';
    // On d�truit les variables de notre session
    session_unset ();
    // On d�truit notre session
    session_destroy ();
    // On redirige le visiteur vers la page de d�part
    header ('location: 5formaliassession.php');
    ?>