#Gestionnaire de taches - Structure MVC
Projet backend pour gestionne les clients, comptes et contracts bancaires. 

## 📌 Contexte
Ce projet consiste à développer une application web sécurisée de gestion bancaire destinée à une institution financière (dans le cadre de ma formation comment developeusse fullstack- Ecole Simplon 2025).
L’objectif est de fournir un outil efficace pour gérer les **clients**, **comptes** et **contrats souscrits** (assurances, crédits, épargne, etc.) via une interface unique, fluide et intuitive.

##Structure du projet 
Creation de dossiers et fichiers du projet:
/mvc-banque
|- /controllers
|  |-AuthController.php
|  |-ClientController.php
|  |-CompteController.php
|  |-ContractController.php
|- /lib
|  |- database.php
|  |- utils.php
|- /models
|  |- /repositories
|  |  |- ClientRepository.php
|  |  |- CompteRepository.php
|  |  |- ContractRepository.php
|  |  |- UserRepository.php
|  |- Client.php
|  |- Compte.php
|  |- Contract.php
|  |- User.php
|- /views
|  |- /client
|  |  |- client-create.php
|  |  |- client-edit.php
|  |  |- client-list.php
|  |  |- client-view.php
|  |- /compte
|  |  |- compte-create.php
|  |  |- compte-edit.php
|  |  |- compte-list.php
|  |  |- compte-view.php
|  |- /contract
|  |  |- contract-create.php
|  |  |- contract-edit.php
|  |  |- contract-list.php
|  |  |- contract-view.php
|  |- /templates
|  |  |- footer.php
|  |  |- header.php
|  |  |- barrelateral.php
|  |- 404.php
|  |- dashboard.php
|  |- home.php
|  |- client.js
|  |- compte.js
|  |- contract.js
|- index.php
|- README.md

## Objectifs
- Authentification sécurisée de l’administrateur.
- Gestion complète des clients.
- Création et suivi des comptes bancaires.
- Gestion des différents contrats associés aux clients.

## Utilisateur
- **Administrateur** : seul utilisateur de l'application, il a accès à l’ensemble des fonctionnalités.

## Fonctionnalités

###  Authentification
- Formulaire de connexion (email + mot de passe).
- Vérification sécurisée des identifiants.
- Déconnexion (suppression de session).
- Mot de passe hashé avec bcrypt.

###  Tableau de Bord
- Vue synthétique :
  - Nombre total de clients.
  - Nombre total de comptes.
  - Nombre total de contrats.
- Accès rapide aux différentes sections.

### Gestion des Clients
- **Créer** un client avec numéro généré automatiquement.
- **Modifier** les données (sauf le numéro client).
- **Supprimer** un client (si aucun compte/contrat).
- **Lister** les clients avec actions associées.

### Gestion des Comptes Bancaires
- **Créer** un compte (type, RIB, solde, client associé).
- **Modifier** le type et le solde.
- **Supprimer** un compte (confirmation requise).
- **Lister** les comptes avec actions associées.

### Gestion des Contrats
- **Créer** un contrat (type, montant, durée, client).
- **Modifier** le montant et la durée.
- **Supprimer** un contrat (confirmation requise).
- **Lister** les contrats avec actions associées.

##  Technologies

- **Back-end** : PHP (architecture MVC)
- **Base de données** : MySQL
- **Front-end** : HTML, CSS (Bootstrap), JavaScript

## 🔐 Sécurité
- Authentification via sessions sécurisées.
- Hashage des mots de passe avec bcrypt.
- Requêtes préparées (PDO) pour éviter les injections SQL.

## 🗂️ Structure MVC
- **Modèles** : DAO pour chaque entité (Client, Compte, Contrat).
- **Contrôleurs** : Interaction entre vues et modèles.
- **Vues** : HTML dynamique.

## Interface Utilisateur
- Page de connexion
- Menu latéral (Clients / Comptes / Contrats / Déconnexion)
- Header avec nom de l'application

---

> _Développé dans le cadre de mon projet de validation de competences (ECF) backend_ Simplon 2025
