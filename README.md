# Brif14 : projet en equipe 4

## Context

La société **BricoleMe** aspire à développer une plateforme en ligne dédiée aux services de bricolage, établissant une connexion entre les clients ayant des besoins de réparation ou d'entretien et divers artisans qualifiés tels que plombiers, électriciens, jardiniers, etc. Vous êtes chargé(e) de développer cette plateforme en utilisant le framework Laravel.

## Fonctionnalités Requises

### Authentification et Autorisation

- Les utilisateurs peuvent s'inscrire en tant que **clients** ou **artisans**.
- Mettre en place un système d'authentification avec des rôles définis :
  - Client
  - Artisan
  - Administrateur
- Les utilisateurs peuvent se connecter avec des identifiants uniques (email, username) ou via des comptes tiers (Gmail, Facebook, etc.).
- Utiliser des **Middlewares** pour régir l'accès aux profils et aux fonctionnalités en fonction du rôle de l'utilisateur.

### Inscription des Artisans

- Lors de l'inscription, l'artisan choisit son métier et spécifie ses compétences (ex. : installation de lavabos, résolution de fuites). Il peut enrichir son profil avec des photos de ses réalisations passées.
- L'artisan peut définir un tarif spécifique pour chaque service proposé.
- Les artisans doivent soumettre une demande à l'administrateur pour changer de métier ou ajouter de nouveaux domaines d'expertise. L'administrateur approuve ou refuse ces demandes.

### Inscription des Clients et Sélection des Artisans

- Les clients peuvent s'inscrire en fournissant des informations telles que photo, nom, prénom, date de naissance, ville, numéro de téléphone, etc.
- Les clients peuvent sélectionner des artisans en fonction de leur métier, disponibilité, et tarif pour l'intervention.
- Les clients ont la possibilité de télécharger un devis au format PDF comprenant :
  - Nom et prénom du client
  - Nom et prénom de l'artisan
  - Pannes sélectionnées
  - Tarif
  - Date de création du devis
  - Validité du devis
  - Adresse du client
- Les clients peuvent recevoir un devis par email au format PDF.

### Gestion des Réservations

- Les clients peuvent annuler une intervention ou changer la date en fonction de la disponibilité de l'artisan, avant une heure d’intervention.
- Après la finalisation de l'intervention, les clients peuvent attribuer une note et un commentaire à l'artisan.

### Service à la Clientèle

- Les clients ont la possibilité de déposer des réclamations en cas d'insatisfaction ou de problème avec un artisan.
- Les réclamations peuvent être gérées par l'administrateur pour assurer une résolution efficace.

### Signature Électronique

- Les clients peuvent signer le devis électroniquement, et l'artisan concerné recevra une copie par email.

## Bonus 

- **Chat en Temps Réel :** Une fonction de chat en temps réel via WebSockets permet une communication instantanée entre le client et l'artisan.
- **Localisation Réelle :** Les clients peuvent envoyer leur localisation réelle aux artisans pour faciliter l'intervention.
- **Repository Pattern :** Utilisation du pattern Repository dans Laravel pour une gestion efficace des données.


