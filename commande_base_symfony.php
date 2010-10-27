<?php 
php lib/vendor/symfony/data/bin/symfony generate:project jobeet /*Génération du projet*/
copy lib\vendor\symfony\data\bin\symfony.bat /*Copie du symfony.bat*/
symfony generate:app --escaping-strategy=on --csrf-secret=UniqueSecret frontend /*Génération de l'application 'frontend'*/
php symfony configure:database --name=doctrine --class=sfDoctrineDatabase "mysql:host=localhost;dbname=jobeet" root /*Configurer la base de données*/
php symfony plugin:publish-assets /*Génére images et feuilles de styles de l'ORM Doctrine*/
php symfony doctrine:build-model /*Génére les classes PHP pour le modèle selon les informations définies dans le fichier "schema.yml"*/
php symfony doctrine:build-sql /*Génére le code SQL pour créer les tables décrites à partir de "config/schema.yml", dans le fichier "myproject/data/sql/lib.model.schema.sql" */
php symfony doctrine:insert-sql /*Insère le code SQL à partir de "myproject/data/sql/lib.model.schema.sql" dans la base de données*/
php symfony cache:clear /*Vide le cache*/
php symfony doctrine:build-form /*Génére des formulaires  pour les modèles*/
php symfony doctrine:build-filters /*Génére des filtres  pour les modèles*/
php symfony doctrine:generate-module --with-show --non-verbose-templates frontend auteur Auteur /*Génération de module 'Auteur'*/
(php symfony doctrine:generate-module --with-show --non-verbose-templates frontend module Model)
 
php symfony doctrine:build-schema /*Génére le "schema.xml" de la représentation de la base exsitante MySql. Pour la génération en xml utiliser l’option [xml]*/
php symfony -T /*Liste Complète des commandes en ligne*/
php symfony -V /*Version du package symfony*/
symfony generate:module backend main /*Génére un module 'main'*/
php symfony doctrine:build --all --and-load --no-confirmation /*Mettre à jour les tables de la base de donnée et recharger les données avec vos jeux de test*/
php symfony doctrine:generate-admin backend JobeetJob --module=job /*Génération du module 'job' pour le module admin et pour le modèle "JobeetJob"*/
php symfony app:routes frontend /*Voir toutes les routes du frontend*/
?>
