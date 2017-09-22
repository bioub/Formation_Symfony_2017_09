Installation d'un serveur

Important, toujours mettre à jour apt avec :

	apt-get update
	
Rechercher sur apt

	apt-cache search php
	
Obtenir des infos sur un paquet apt

	apt-cache show php7.0-cli
	
Installer apache + php + postgresql + postgis

	apt-get install apache2 php7.0 php7.0-intl php7.0-pgsql php7.0-xml php7.0-zip libapache2-mod-php7.0 postgresql postgis composer

Afficher la liste des programmes écoutants sur des ports

	netstat -ntlp

Penser à modifier le fichier de conf postgre pour limiter l'accès au serveur à des ip internes

	nano /etc/postgresql/x.x/main/pg_hba.conf 

Arreter, démarer ou rédémarrer apache ou postgre

	/etc/init.d/postgresql restart
	/etc/init.d/postgresql stop
	/etc/init.d/postgresql start
	/etc/init.d/apache2 restart
	/etc/init.d/apache2 stop
	/etc/init.d/apache2 start

Copier les fichiers Source de l'application Symfony avec WinSCP

Vérifier avec `ls -l` que bin/console et bin/symfony_requirements ou les droits d'exécution `x`

Si non lancer
	chmod +x bin/console
	chmod +x bin/symfony_requirements



TODO :
* configure un accès extérieur pour postgres
* Demander la création d'un domaine
* Créer un virtual host
* créer un user postgres pour l'appli symfony
* éditer le fichier `app/config/parameters.yml` avec ce user

