# Countries app

Cette petite application permet de fournir des informations sur des pays.

Dans cette version, seuls les pays européens sont disponibles

Les données sont récupérées du site https://restcountries.eu.

## Stack

*  Framework backend PHP : [Laravel 8](https://laravel.com/).
*  Framework front JS :
   *  [VueJS 2.6.12](https://vuejs.org/).
   *  [VueRouter 3.5.2](https://vuejs.org/).
   *  [Vuex 3.6.2](https://vuex.vuejs.org/).
*  Framework front CSS : [Bulma 0.9.3](https://bulma.io/).

La gestion de la navigation se fait avec Vue Router, ainsi que le stockage des données locales via Vuex.

## Endpoints

### Backend

#### GET /api/countries

*  Cette route ne prend aucun paramètre.
*  Elle récupère simplement les pays européens dans la base de données.

#### GET /api/fetch-countries

*  Cette route ne prend aucun paramètre.
*  Elle met à jour ou ajoute les pays du site https://restcountries.eu dans la base de données.
*  Cette route est conçue pour une mise à jour via cron job. Retour de succès ou d'erreur en JSON.

### Frontend

#### <url>

*  Page d'accueil de l'application. On y trouve une liste des pays récupérés ainsi que leurs drapeaux.

*  Si la table 'countries' dans la base de données est vide, on lance la récupération et l'insertion en base avant d'arriver sur la page d'accueil.

#### <url>/country/:code

*  Page de présentation d'un pays. Le paramètre `code` dans la route permet via le code à 3 lettres du pays de récupérer le pays souhaité et d'afficher les détails.

## Installation

### Pré-requis

*  Installer PHP 7.4 minimum.
*  Installer NodeJS 12 minimum.

### Installer le projet en local

*  Clôner ce repo en local.
*  Se rendre dans le dossier nouvellement créé.
*  Lancer l'installation des modules NodeJs avec `npm i`
*  Lancer l'installation des vendors PHP avec `composer install`
*  Renommer le fichier `.env.example` en `.env`
*  Dans un terminal, lancer la commande `php artisan key:generate`

### Lancer le projet en local

*  Dans un terminal, lancer la commande `php artisan serve` et rendez-vous sur l'adresse indiquée.

### Développer la partie front

*  Dans un terminal, lancer la commande `npm run watch`. La compilation CSS et JS se fera automatiquement à chaque modification.
*  Quand tout est bon, lancer la commande `npm run production`. Cela aura pour effet de compiler le CSS et le JS.

## Idées d'améliorations futures

*  Internationaliser l'application.
*  Ajouter une pagination sur la page principale pour alléger le chargement.
*  Ajouter un champ "recherche" dans la barre de navigation.
*  Pouvoir filtrer par pays avec un système de filtre dans la barre de navigation.
*  Transformer la page qui présente le pays sous forme de dashboard interactif avec des données graphiques.
*  Ajouter des tests unitaires en front et côté back.
