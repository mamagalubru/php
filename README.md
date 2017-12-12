# php
# mes essais et démonstrations php
# compte github : mamagalubru
# repository github : https://github.com/mamagalubru/php.git
# utiliser avec git


# récupérer une première fois un dossier github
# =============================================
# lancer git en local
# créer le dossier de réception locale (exemple : G:\github\mamagalubru\php)
# se positionner sur ce dossier
# git init pour initialiser un nouveau dépôt local
# effectuer un git clone du dépôt externe (exemple : git clone https://github.com/mamagalubru/php)

# pousser (push) une modification locale vers github
# ==================================================
# modifier le ou les fichiers
# lancer git en local
# se postionner sur répertoire local G:\github\mamagalubru\php
# vérifier le remote : 
	git remote -v 
	ou git remote show origin
	ou git config remote.origin.url
# git status (pour vérifier si des modifications ont été effectuées)
# git add fileschanged ou git commit -a (pour valider la modification locale)
# git push pour valider 

# récupérer (pull) une modification sur github vers le local
# ==========================================================
# tout repositionner comme ci-dessus
# git pull

exemples de programmes php
chargement des outils consoles
chargement des outils formulaires
