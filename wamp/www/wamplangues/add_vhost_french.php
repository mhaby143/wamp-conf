<?php
$langues = array(
	'langue' => 'Français',
	'locale' => 'french',
	'addVirtual' => 'Ajouter un VirtualHost',
	'backHome' => 'Retour à l\'accueil',
	'VirtualSubMenuOn' => 'L\'item <code>Sous-menu VirtualHost</code> doit être validé dans le menu Clic-Droit <code>Paramètres Wamp</code><br>Validez cet item puis rechargez cette page',
	'UncommentInclude' => 'Décommenter <small>(Supprimer #)</small> la ligne <code>#Include conf/extra/httpd-vhosts.conf</code><br>dans le fichier %s',
	'FileNotExists' => 'Le fichier <code>%s</code> n\'existe pas',
	'FileNotWritable' => 'Le fichier <code>%s</code> est protégé en écriture.',
	'DirNotExists' => '<code>%s</code> n\'existe pas ou n\'est pas un dossier',
	'NotCleaned' => 'Le fichier <code>%s</code> n\'a pas été nettoyé.<br>Il reste des exemples de VirtualHost comme : dummy-host.example.com',
	'NoVirtualHost' => 'Aucun VirtualHost n\'est défini dans <code>%s</code><br>Il doit y avoir au moins un VirtualHost pour localhost.',
	'NoFirst' => 'Le premier VirtualHost doit être <code>localhost</code> dans le fichier <code>%s</code>',
	'ServerNameInvalid' => 'Le nom du ServerName <code>%s</code> n\'est pas valide.',
	'VirtualHostName' => 'Nom du <code>Virtual Host</code> Pas de caractères diacritiques (éçëñ) - Pas d\'espace - Pas de tiret bas (_)',
	'VirtualHostFolder' => '<code>Chemin</code> complet absolu du <code>dossier</code> VirtualHost - <i>Exemples : C:/wamp/www/projet/ ou E:/www/site1/</i>',
	'VirtualAlreadyExist' => 'Le ServerName <code>%s</code> existe déjà',
	'VirtualHostExists' => 'VirtualHost déjà définis :',
	'Start' => 'Démarrer la création du VirtualHost (Peut prendre un certain temps)',
	'GreenErrors' => 'Les erreurs encadrées en vert peuvent être corrigées automatiquement"',
	'Correct' => 'Démarrer la correction automatique des erreurs notées dans le cadre à bordures vertes',
	'NoModify' => 'Impossible de modifier les fichiers <code>httpd-vhosts.conf</code> ou <code>hosts</code>',
	'VirtualCreated' => 'Les fichiers ont été modifiés, le virtual host <code>%s</code> a été créé',
	'CommandMessage' => 'Messages de la console pour actualisation des DNS :',
	'However' => 'Vous pouvez ajouter un autre VirtualHost en validant "Ajouter un VirtualHost"<br>Cependant, pour que ces nouveaux VirtualHost soient pris en compte par Apache, vous devez lancer l\'item<br><code>Redémarrage DNS</code><br>du menu Outils par Clic-Droit sur l\'icône Wampmanager. <i>(Ceci ne peut, hélas, pas être fait automatiquement)</i>'
);
?>