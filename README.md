# Généalogie avec Laravel 10

## Description du Projet
Ce projet est une application de génêlogie développée avec Laravel 10 et une base de données SQLite. Il permet aux utilisateurs de créer, visualiser et gérer des fiches de personnes et leurs relations familiales tout en intégrant un système de validation communautaire pour garantir l’intégrité des données.

## Fonctionnalités Principales

### 1. Gestion des Membres de la Famille
- Création de fiches pour chaque membre de la famille.
- Liaison entre les membres grâce à une table `relationships` permettant de définir les relations parent/enfant.

### 2. Invitations
- Possibilité d'inviter des membres à rejoindre la plateforme.
- Une fois inscrits, les membres acquièrent les fiches qui les représentent dans l’arbre généalogique.

### 3. Propositions de Modifications
- Les utilisateurs peuvent proposer des modifications aux fiches ou ajouter de nouvelles relations.
- Ces propositions doivent être validées par au moins 3 membres de la communauté pour être acceptées.

### 4. Validation des Modifications
- Les membres peuvent voter pour accepter ou refuser une proposition de modification.
- Historique des validations conservé dans une table `votes`.



## Technologies Utilisées
- **Framework** : Laravel 10
- **Base de données** : SQLite
- **Frontend** : Bootstrap 5 pour le design et l’interface utilisateur
- **Langage** : PHP 8.2



2. Installez les dépendances :
   ```bash
   composer install
   ```

3. Configurez l’environnement :
   - Copiez le fichier `.env.example` en `.env` :
     ```bash
     cp .env.example .env
     ```
   - Configurez la connexion à SQLite :
     ```env
     DB_CONNECTION=sqlite
     DB_DATABASE=/chemin/vers/database.sqlite
     ```

4. Créez le fichier SQLite :
   ```bash
   touch database/database.sqlite
   ```



## Structure de la Base de Données

### Tables Principales
1. **users**
   - Stocke les informations des utilisateurs.

2. **people**
   - Représente chaque personne dans l’arbre généalogique.

3. **relationships**
   - Définit les relations parent/enfant entre les personnes.

4. **modifications**
   - Stocke les propositions de modifications ou d’ajout de relations.

5. **votes**
   - Stocke les votes des membres pour accepter ou refuser une modification.

### Diagramme de la Base de Données

Voici une représentation du schéma de la base de données utilisée dans ce projet :

![Diagramme de la Base de Données](public/images/database_diagram.png)



## Auteur
Projet réalisé par Abdoulaye7.



