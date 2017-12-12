<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Saisie de nom sur formulaire avec passage GET</title>
    </head>
    <body>
        <p>Veuillez entrer votre nom pour obtenir 
		les codes d'accès au serveur central ISCIO :</p>
        <form action="3phpnomget.php" method="get">
            <p>
            <input type="text" name="nom" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée aux étudiants ISCIO. 
		Si vous n'en n'êtes pas un, inutile d'insister
		vous n'aurez jamais les codes ! ;-)</p>
    </body>
</html>