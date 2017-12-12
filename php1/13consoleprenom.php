<?php
// la saisie d'une ou plusieurs valeurs
echo "Saisir votre prenom : ";
$prenom = fgets(STDIN);
echo "Saisir votre sexe (Femme ou Homme) : ";
$sexe = fgets(STDIN);
echo "Saisir votre age (0 à 130) : ";
$age = fgets(STDIN);
// l'utilisation de la valeur saisie
if ($age < 18) {
	if (strcmp($sexe,"Femme\n") == 0) {
		echo "Bienvenue $sexe demoiselle $prenom !!!";
		} else {
		echo "Bienvenue $sexe damoiseau $prenom !!!";
		}
} else {
	if (strcmp($sexe,"Femme\n") == 0) {
		echo "Bienvenue $sexe dame $prenom !!!";
		} else {
		echo "Bienvenue $sexe sieur $prenom !!!";
		}
}
?>