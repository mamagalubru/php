<?php
/*
	afficher un simple message en utilisant un
	paramètre passé sur la ligne de commande
*/
if (isset($argv[1])) echo "Bonjour $argv[1] !\n";
if (isset($argv[2])) echo "Bonjour $argv[2] !\n";
if (isset($argv[3])) echo "Bonjour $argv[3] !\n";
?>
