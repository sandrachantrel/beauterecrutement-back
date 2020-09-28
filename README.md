# Beauté Recrutement

Le projet Beauté Recrutement est un logiciel SaaS permettant de gérer ses process de recrutement à travers le back office.

## Organisation du projet

Nous allons suivre la méthodologie Agile Scrum.

Le Product Owner a déjà fait tout le travail de préparation et nous a mis à disposition [le product backlog sur Trello](https://trello.com/b/1aj2xnpD/beaut%C3%A9-recrutement-9-24-2020).

## Choix techniques

### Frontend

Le front-end sera développé à l'aide du framework Vue.js. Tout le front-end sera imaginé et développé dans le dossier Projet-beaute-recrutement-front sur un repository GitHub à part.

### Backend

WordPress est la solution qui a été sélectionnée pour la partie backend du projet :

- Le backoffice permettra aux utlisateurs de gérer les différents contenus.
- Une API REST devra être mise à disposition à l'application front-end, ce que WordPress peut générer très "rapidement".

#### Base de données

Tous les documents de conception liés à la base de données sont à disposition dans le dossier `conception`.