# Gestion des Étudiants - PHP 5.6

Application simple pour gérer des étudiants avec PHP 5.6 et MySQL.

## Structure
- `classes/` : classe Étudiant  
- `connexion/` : connexion à la base de données  
- `service/` : logique pour créer, lire et supprimer des étudiants  
- `ws/` : Web Services pour ajouter ou charger des étudiants  
- `controller/` : actions POST classiques pour ajouter et supprimer  
- `index.php` : formulaire et liste des étudiants  
- `racine.php` : chemin racine du projet  

## Installation
1. Créer la base de données et la table Étudiant.  
2. Configurer la connexion MySQL.  
3. Placer le projet sur le serveur PHP.  
4. Ouvrir `index.php` dans le navigateur.  

## Utilisation
- Remplir le formulaire pour ajouter un étudiant.  
- Les étudiants s’affichent dans la table.  
- Supprimer un étudiant via le bouton correspondant.  

## Notes
- Compatible PHP 5.6.  
- Utilise PDO avec requêtes préparées pour la sécurité.  
- Tous les champs du formulaire sont obligatoires.

## Screenshots : 


