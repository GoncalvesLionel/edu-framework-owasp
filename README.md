![separe](https://github.com/studoo-app/.github/blob/main/profile/studoo-banner-logo.png)
# Edu Framework OWASP
[![Version](https://img.shields.io/badge/Version-1.0.0-blue)]()

## Description
Ce projet propose une implémentation des principales failles OWASP pour le framework Edu.

## Installation
- Cloner le projet
- Se placer dans le dossier `/app` et lancer la commande `composer edu:init` afin de créer le fichier `.env`
- Lancer la commande `composer install` afin d'installer les dépendances
- `docker-compose up -d` pour lancer les containers

Ce projet propose :
- l'application web disponible à l'adresse `http://localhost:8000`
- le serveur web contenant les scripts js malveillants à l'adresse `http://localhost:9002`
- Une machine Ubuntu contentant les outils `ifconfig` `nmap` et `netcat` à l'adresse `http://localhost:3000`
- Cette dernière possède aussi le port 9001 ( pour netcat ) accessible à l'adresse `http://localhost:9001`