Application de Signalisation d'Alerte et de Visualisation des Graphes Statistiques de Criminalité.


Description
Cette application permet de signaler des alertes en temps réel et de visualiser des graphiques statistiques sur la criminalité. Elle offre une interface conviviale pour les utilisateurs afin de rapporter des incidents, de consulter des données en temps réel, et d'analyser les tendances criminelles à l'aide de graphiques interactifs.


Fonctionnalités
Signalement des alertes : Les utilisateurs peuvent signaler des incidents criminels en temps réel.
Visualisation des données : Affichage de graphiques statistiques interactifs pour analyser les tendances de la criminalité.
Notifications en temps réel : Alertes instantanées pour informer les utilisateurs des incidents récents dans leur zone.
Filtrage et recherche : Fonctionnalités avancées pour filtrer les données par type de crime, localisation, date, etc.
Interface utilisateur intuitive : Conçue pour être facilement utilisable par le grand public.




Prérequis
PHP 7.4+ (ou supérieur)
Composer
Node.js et npm
Base de données : MySQL/PostgreSQL ou autre
Laravel 8+
Chart.js pour les graphiques
Installation
Cloner le dépôt

bash
Copier le code
git clone https://github.com/BriceGyb/SecuAlert
cd votre-repo
Installer les dépendances PHP

bash
Copier le code
composer install
Installer les dépendances JavaScript

bash
Copier le code
npm install
npm run dev
Configurer l'environnement

Copiez le fichier .env.example en .env :
bash
Copier le code
cp .env.example .env
Configurez les informations de connexion à la base de données et autres paramètres dans le fichier .env.
Générer la clé de l'application

bash
Copier le code
php artisan key:generate
Migrer et remplir la base de données

bash
Copier le code
php artisan migrate --seed
Démarrer le serveur de développement

bash
Copier le code
php artisan serve
Utilisation
Signaler une alerte

Accédez à la section "Signaler une alerte" de l'application.
Remplissez le formulaire avec les détails de l'incident.
Soumettez le formulaire pour envoyer l'alerte.
Visualiser les graphiques

Accédez à la section "Visualisation des données" de l'application.
Utilisez les filtres pour personnaliser les graphiques selon vos besoins.
Consultez les graphiques interactifs pour analyser les tendances.
Contribuer
Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez suivre ces étapes :

Fork le dépôt
Créer une branche de fonctionnalité
bash
Copier le code
git checkout -b nouvelle-fonctionnalité
Commit vos modifications
bash
Copier le code
git commit -m "Ajouter une nouvelle fonctionnalité"
Push vers la branche
bash
Copier le code
git push origin nouvelle-fonctionnalité




Auteurs
Gyebre Brice
