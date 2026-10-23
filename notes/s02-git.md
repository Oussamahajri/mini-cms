\# Session 02 - Git et GitHub



Réponses rédigées avec mes propres mots.



\## 1. Index et commit



Réponse :



\## 2. Branche et tag



Réponse :



\## 3. Le fichier .env



Réponse :



\## 4. Le dossier vendor/



Réponse :



\## 5. Git Credential Manager



Réponse :

\# Session 02 - Git et GitHub



Réponses rédigées avec mes propres mots.



\## 1. Index et commit



git add prépare les fichiers dans l’index.

git commit enregistre les changements dans l’historique local.

git push envoie les commits vers GitHub.



\## 2. Branche et tag



Une branche comme main avance avec les nouveaux commits.

Un tag comme lab-01 reste fixé sur un commit précis.



\## 3. Le fichier .env



Le fichier .env contient la clé de l’application et des paramètres privés.

Il ne faut pas le publier. Un développeur copie .env.example

et exécute php artisan key:generate pour créer sa propre clé.



\## 4. Le dossier vendor/



Le dossier vendor contient les dépendances PHP générées.

On peut le reconstruire avec composer install grâce à composer.lock.



\## 5. Git Credential Manager



Git Credential Manager conserve le jeton GitHub dans le

Gestionnaire d’identification Windows. Sur un ordinateur universitaire,

il faut supprimer ce jeton avant de quitter le poste.

