<?php
// afficher un simple message avec des variables système 
foreach ($_SERVER as $envkey => $envvalue) {
    echo '<p>' . $envkey . ' : ' . $envvalue . '</p>';
}
?>

