<?php
// afficher un simple message avec des variables syst�me 
foreach ($_SERVER as $envkey => $envvalue) {
    echo '<p>' . $envkey . ' : ' . $envvalue . '</p>';
}
?>

