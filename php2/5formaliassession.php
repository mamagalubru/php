<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Saisie d'alias sur formulaire avec passage POST</title>
    </head>
    <body>
        <p>Veuillez entrer votre alias pour obtenir 
		les codes d'accès au serveur central ISCIO :</p>
        <form action="5phpaliassession.php" method="post">
            <p>
            <input type="text" name="alias" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée aux étudiants ISCIO. 
		Si vous n'en n'êtes pas un, inutile d'insister
		vous n'aurez jamais de session ! ;-)</p>
    </body>
</html>