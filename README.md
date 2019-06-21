# Symfony

## Installation

```shell
composer create-project symfony/skeleton symfony
```

OU

```shell
composer create-project symfony/website-skeleton symfony
```

Activer le plugin Symfony dans PHPStorm

### Vérifier les pré-requis

```shell
composer require requirements-checker
```

Vérifier si tout est OK sur l'URL public/check.php

```shell
composer remove requirements-checker
```

### Installer le serveur interne de PHP

Optionnel, pour ne pas utiliser Apache et avoir des URLs plus courtes.

```shell
composer require symfony/web-server-bundle --dev
```

Pour démarrer le serveur

```shell
php bin/console server:run
```

OU

```shell
php bin/console server:start
php bin/console server:stop
```

### Installer Maker Bundle

```shell
composer require maker --dev
```

## Doctrine

```shell
composer require orm
```

Créer un fichier .env.local et ajouter une ligne pour la variable d'environemment `DATABASE_URL`