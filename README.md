# YogaZen-Academy

YogaZen REST API
Ce projet est une API REST développée avec Laravel, pour gérer les ressources suivantes : Course, Student, Teacher et Subscription.
Il permet la gestion complète (CRUD) de ces entités via des requêtes HTTP.

Fonctionnalités
Gestion des cours (Courses)

Gestion des étudiants (Students)

Gestion des enseignants (Teachers)

Gestion des abonnements (Subscriptions)


URL de l’API
Voici quelques endpoints disponibles (l’API tourne en local à l’adresse par défaut) :

Liste des cours : http://127.0.0.1:8000/api/courses

Liste des étudiants : http://127.0.0.1:8000/api/students

Liste des enseignants : http://127.0.0.1:8000/api/teachers

Liste des abonnements : http://127.0.0.1:8000/api/subscriptions

Prérequis
PHP >= 8.0

Composer

Laravel installé (via composer)

Base de données MySQL ou autre compatible

Installation et exécution
Cloner le dépôt

bash
Copier
Modifier
git clone <URL-du-dépôt>
cd YogaZen/backend
Installer les dépendances

bash
Copier
Modifier
composer install
Configurer l’environnement

Copie le fichier .env.example en .env :

bash
Copier
Modifier
cp .env.example .env
Puis configure la connexion à ta base de données dans .env :

env
Copier
Modifier
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_ta_base
DB_USERNAME=ton_utilisateur
DB_PASSWORD=ton_mot_de_passe
Générer la clé d’application

bash
Copier
Modifier
php artisan key:generate
Exécuter les migrations

bash
Copier
Modifier
php artisan migrate
(Optionnel) Seeder la base de données

bash
Copier
Modifier
php artisan db:seed
Lancer le serveur local

bash
Copier
Modifier
php artisan serve
L’API sera accessible par défaut sur http://127.0.0.1:8000.

Utilisation
Tu peux maintenant tester les endpoints avec un outil comme Postman, Insomnia, ou directement via le navigateur (pour les GET).
