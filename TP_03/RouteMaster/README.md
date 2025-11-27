# 🚀 Laravel Routes & Middlewares - TP

## 📋 Description

Projet Laravel avancé sur la gestion des routes et middlewares, réalisé
dans le cadre de la formation **DEVOWFS** à l'**ISTA Quarzazate**
(OFPPT).

## 🎯 Objectifs Pédagogiques

-   Maîtriser le système de routing Laravel
-   Implémenter des middlewares personnalisés
-   Comprendre les contraintes de routes et paramètres
-   Gérer les groupes de routes et préfixes

## 🛠️ Technologies Utilisées

-   **Laravel** 12.37.0
-   **PHP** 8.2+
-   **Composer** 2.5+
-   **Git** & GitHub

## 📁 Structure du Projet

TP_03/laravel-routes-tp/ ├── app/Http/Middleware/ \# Middlewares
personnalisés │ ├── CheckIpLocal.php │ ├── BlockEmptyRequest.php │ ├──
CheckCountry.php │ ├── MinLength.php │ └── CheckTime.php ├── routes/ │
└── web.php \# Définition des routes ├── resources/views/ │ ├──
welcome.blade.php \# Page d'accueil avec navbar │ ├── contact.blade.php
│ └── info.blade.php └── bootstrap/app.php \# Enregistrement des
middlewares

## 🔧 Middlewares Implémentés

### 1. 🔒 CheckIpLocal

-   **Route :** `/check-ip`
-   **Fonction :** Autorise uniquement l'IP locale (`127.0.0.1`)
-   **Usage :** Sécurité d'accès local

### 2. 🚫 BlockEmptyRequest

-   **Route :** `/block-empty`
-   **Fonction :** Bloque les requêtes sans paramètres
-   **Usage :** Validation des données d'entrée

### 3. 🌍 CheckCountry

-   **Route :** `/check-country`
-   **Fonction :** Restreint l'accès par pays avec paramètre
-   **Usage :** Géolocalisation et restrictions régionales

### 4. 📏 MinLength

-   **Route :** `/min-length`
-   **Fonction :** Vérifie la longueur minimale d'un champ
-   **Usage :** Validation de données texte

### 5. ⏰ CheckTime

-   **Route :** `/check-time`
-   **Fonction :** Vérifie les heures de travail (9h-18h)
-   **Usage :** Restriction horaire d'accès

## 🚀 Installation

``` bash
# Cloner le projet
git clone https://github.com/votre-username/Backend-Development.git
cd Backend-Development/TP_03/laravel-routes-tp

# Installer les dépendances
composer install

# Configurer l'environnement
cp .env.example .env
php artisan key:generate

# Démarrer le serveur
php artisan serve
```
