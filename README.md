#Gestionnaire de taches - Structure MVC
Projet en PHP pour gestionne les clients, comptes et contracts bancaires. 

##Structure du projet 
Creation de dossiers et fichiers du projet

/mvc-banque
|- /controllers
|  |- AuthController.php
|  |-ClientController.php
|  |-CompteController.php
|  |-ContractController.php
|- /lib
|  |- database.php
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
|  |- 404.php
|  |- home.php
|  |- login.php
|- index.php
|- README.md
