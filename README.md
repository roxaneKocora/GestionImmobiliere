Test technique Stage InnovQube
Auteur : Roxane KOCORA

Description du projet

Ce projet est une application de gestion immobilière développée avec le framework Laravel. Il intègre plusieurs composants clés de Laravel :
Breeze pour l'authentification
Livewire pour les composants dynamiques
Filament pour la gestion des interfaces d'administration
Tailwind CSS et Blade pour la partie front-end
Ce projet a été une opportunité d'approfondir notre maîtrise de Laravel et d'explorer ses composants essentiels pour le développement d'applications web modernes et performantes.

🛠️ Prérequis
Avant d'installer et d'exécuter ce projet, assurez-vous d'avoir les éléments suivants :
- PHP (>= 8.1)
- Composer
- MySQL
- Node.js & npm (pour le front-end)
- Git

🔧 Installation

1️⃣ Cloner le projet
git clone https://github.com/ton-utilisateur/Test_InnovQube.git
cd Test_InnovQube
2️⃣ Installer les dépendances PHP
composer install
3️⃣ Copier le fichier d’environnement
cp .env.example .env
(Sous Windows, utilisez copy au lieu de cp : copy .env.example .env)
4️⃣ Générer la clé d'application
php artisan key:generate
5️⃣ Configurer la base de données
Ouvrez le fichier .env
Modifiez ces lignes avec vos informations :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=utilisateur
DB_PASSWORD=mot_de_passe

6️⃣ Exécuter les migrations et seeders
php artisan migrate --seed
7️⃣ Installer les dépendances front-end
npm install && npm run build
8️⃣ Lancer le serveur Laravel
php artisan serve
L'application sera accessible sur http://127.0.0.1:8000.

