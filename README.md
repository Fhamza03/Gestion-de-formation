# 📚 UDev - Application de Gestion des Formations

UDev est une application web complète développée avec **Laravel** permettant de gérer efficacement les employés, clients, fournisseurs, catégories, formations, dépenses, rôles et permissions d’un organisme de formation.

🔗 **Accès à l'application** : [https://gestionformation.infinityfreeapp.com/](https://gestionformation.infinityfreeapp.com/)

## 🚀 Fonctionnalités principales

- ✅ **Gestion des employés** : Ajouter, modifier, supprimer et visualiser les employés.
- 👥 **Gestion des clients** : Suivi des clients inscrits aux formations.
- 🏢 **Gestion des fournisseurs** : Référencement des fournisseurs.
- 🗂 **Gestion des catégories** : Organisation des données par catégorie.
- 🎓 **Gestion des formations** : Création et suivi des formations proposées.
- 💵 **Gestion des dépenses** : Statistiques journalières, mensuelles et annuelles.
- 🔐 **Gestion des rôles et permissions** : Définition des droits d’accès selon les utilisateurs.
- ⚙️ **Administration** : Paramétrage global de l'application.

## 🖥️ Dashboard

Le tableau de bord permet une vue synthétique des éléments clés :
- Total des employés, clients, fournisseurs, formations.
- Suivi des dépenses avec des indicateurs visuels.
- Navigation intuitive via une sidebar moderne.


## 🛠️ Technologies utilisées

- ⚙️ **Backend** : ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white) Laravel 10+
- 🎨 **Frontend** :
  - ![Blade](https://img.shields.io/badge/Blade-E34F26?logo=blade&logoColor=white) Blade
  - ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=white) / 
    ![Tailwind](https://img.shields.io/badge/Tailwind_CSS-06B6D4?logo=tailwind-css&logoColor=white)
- 🗄️ **Base de données** : ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
- 🔐 **Authentification** : ![Laravel Breeze](https://img.shields.io/badge/Breeze-FF2D20?logo=laravel&logoColor=white) / Jetstream (optionnel)
- 📊 **Icônes et Graphiques** :
  - ![Font Awesome](https://img.shields.io/badge/Font_Awesome-339AF0?logo=font-awesome&logoColor=white)
  - ![Chart.js](https://img.shields.io/badge/Chart.js-FF6384?logo=chartdotjs&logoColor=white)

## 📦 Installation

```bash
git clone https://github.com/Fhamza03/Gestion-de-formation.git
cd Gestion-de-formation
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
