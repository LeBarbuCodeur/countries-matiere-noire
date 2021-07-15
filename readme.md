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

*  Cette route ne prend aucun paramètre. Elle récupère simplement les pays sur le site https://restcountries.eu.

### Frontend

#### <url>

*  Page d'accueil de l'application. On y trouve une liste des pays récupérés ainsi que leurs drapeaux.

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
*  Lancer l'installation des vendors PHP avec `composer i`

### Lancer le projet en local

*  Dans un terminal, lancer la commande `php artisan serve` et rendez-vous sur l'adresse indiquée.

## Idées d'améliorations futures

*  Internationaliser l'application.
*  Pouvoir filtrer par pays avec un système de filtre dans la barre de navigation.
*  Transformer la page qui présente le pays sous forme de dashboard interactif avec des données graphiques.
*  Ajouter des tests unitaires en front et côté back.
