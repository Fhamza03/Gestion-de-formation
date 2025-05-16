# 📚 UDev - Application de Gestion des Formations

UDev est une application web complète développée avec **Laravel** permettant de gérer efficacement les employés, clients, fournisseurs, catégories, formations, dépenses, rôles et permissions d’un organisme de formation.

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

- **Backend** : Laravel 10+
- **Frontend** : Blade, Bootstrap / Tailwind CSS
- **Base de données** : MySQL
- **Authentification** : Laravel Breeze / Jetstream (optionnel)
- **Icons & Charts** : Font Awesome, Chart.js

## 📦 Installation

```bash
git clone https://github.com/Fhamza03/Gestion-de-formation.git
cd Gestion-de-formation
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

