# FineTracker

FineTracker est une application web de suivi des dépenses développée avec Laravel. Elle permet aux utilisateurs de suivre leurs dépenses et revenus, de catégoriser leurs dépenses, et de visualiser un tableau de bord personnalisé avec un résumé de leurs transactions.

## Fonctionnalités

- Suivi des dépenses et des revenus
- Catégorisation des dépenses
- Tableau de bord avec résumé des transactions
- Authentification des utilisateurs
- Opérations CRUD pour les catégories, les revenus et les dépenses

## Installation et Configuration

### Prérequis

- PHP >= 7.4
- Composer
- MySQL

### Étapes d'installation

1. Clonez le dépôt GitHub :

   ```bash
   git clone https://github.com/Yoann200/finetracker.git
   cd finetracker


Fonctionnalités Principales
Suivi des Dépenses et des Revenus
FineTracker permet aux utilisateurs d'ajouter, de visualiser, de modifier et de supprimer des dépenses et des revenus. Chaque utilisateur ne peut voir que ses propres transactions.

Catégorisation des Dépenses
Les utilisateurs peuvent créer des catégories personnalisées pour organiser leurs dépenses. Ils peuvent également modifier ou supprimer ces catégories.

Tableau de Bord
Le tableau de bord affiche un résumé des transactions de l'utilisateur, y compris le montant total des dépenses, le montant total des revenus et le solde actuel. Il affiche également les cinq dernières dépenses de l'utilisateur.

Authentification
FineTracker utilise le système d'authentification de Laravel pour gérer l'inscription, la connexion et la déconnexion des utilisateurs. Seuls les utilisateurs connectés peuvent accéder aux fonctionnalités de gestion des catégories, des revenus et des dépenses.
