<?php 
php lib/vendor/symfony/data/bin/symfony generate:project jobeet /*G�n�ration du projet*/
copy lib\vendor\symfony\data\bin\symfony.bat /*Copie du symfony.bat*/
symfony generate:app --escaping-strategy=on --csrf-secret=UniqueSecret frontend /*G�n�ration de l'application 'frontend'*/
php symfony configure:database --name=doctrine --class=sfDoctrineDatabase "mysql:host=localhost;dbname=jobeet" root /*Configurer la base de donn�es*/
php symfony plugin:publish-assets /*G�n�re images et feuilles de styles de l'ORM Doctrine*/
php symfony doctrine:build-model /*G�n�re les classes PHP pour le mod�le selon les informations d�finies dans le fichier "schema.yml"*/
php symfony doctrine:build-sql /*G�n�re le code SQL pour cr�er les tables d�crites � partir de "config/schema.yml", dans le fichier "myproject/data/sql/lib.model.schema.sql" */
php symfony doctrine:insert-sql /*Ins�re le code SQL � partir de "myproject/data/sql/lib.model.schema.sql" dans la base de donn�es*/
php symfony cache:clear /*Vide le cache*/
php symfony doctrine:build-form /*G�n�re des formulaires  pour les mod�les*/
php symfony doctrine:build-filters /*G�n�re des filtres  pour les mod�les*/
php symfony doctrine:generate-module --with-show --non-verbose-templates frontend auteur Auteur /*G�n�ration de module 'Auteur'*/
(php symfony doctrine:generate-module --with-show --non-verbose-templates frontend module Model)
 
php symfony doctrine:build-schema /*G�n�re le "schema.xml" de la repr�sentation de la base exsitante MySql. Pour la g�n�ration en xml utiliser l�option [xml]*/
php symfony -T /*Liste Compl�te des commandes en ligne*/
php symfony -V /*Version du package symfony*/
symfony generate:module backend main /*G�n�re un module 'main'*/
php symfony doctrine:build --all --and-load --no-confirmation /*Mettre � jour les tables de la base de donn�e et recharger les donn�es avec vos jeux de test*/
php symfony doctrine:generate-admin backend JobeetJob --module=job /*G�n�ration du module 'job' pour le module admin et pour le mod�le "JobeetJob"*/
php symfony app:routes frontend /*Voir toutes les routes du frontend*/
?>
