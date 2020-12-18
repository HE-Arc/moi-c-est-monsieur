# Moi c'est monsieur
## How to setup development environment

Firstly, clone the project using the method of your choice. Then, you need to copy .env.example to .env and modify it accordingly to your setup.

`cp .env.example .env`

Next, update the dependencies :
```
composer update
```

In order for the map to work, the publishment of a package is required. Please enter the following command :
```
php artisan vendor:publish --tag=public --force
```

Next step is to create the database. To do so, please type :
```
php artisan migrate
```

This step is optional but recommended, it allows to seed the tables with random values.
```
php artisan db:seed
```

You need then to install Passport, which will create clients for token generation
```
php artisan passport:install
```

At last serve the project
```
php artisan serve
```

Normally, you should be able to see your project at http://yourURL/public/

## Concept

**But du projet :**

Ce projet reprend l'idée du jeu de carte [moicestmadame](https://moicestmadame.fr/).
Ce jeu propose aux joueurs de tirer des cartes contenant des commentaires rabaissants, voire humiliants et de riposter en choisissant parmi des cartes "ripostes" qu'il a en main. 

Si la bonne riposte est choisie en réponse à l'attaque verbale, l'utilisateur remporte la joute. S'il ne choisit pas les bonnes ripostes, il sera redirigé sur une page l'invitant à s'éduquer sur le problème.

Le jeu de carte original ayant pour thème le féminisme, notre version propose une 
sensibilisation à la stigmatisation des ingénieurs, trop souvent mise sous silence.

**Objectifs :**

- Implémenter les règles du jeu de cartes "Moi c'est madame" avec nos propres cartes personnalisées
- Afficher des messages éducatifs lorsqu'une mauvaise réponse est donnée
- Rediriger le joueur sur une page de victoire/défaite en fonction de son score, interprété par rapport à une difficulté choisie

## More documentation

![Wiki](https://github.com/HE-Arc/moi-c-est-monsieur/wiki)
