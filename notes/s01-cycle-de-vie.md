

\# Session 01 — Cycle de vie d'une requête Laravel



\## 1. Requête HTTP

L'utilisateur saisit une URL dans son navigateur.

Le navigateur envoie une requête HTTP au serveur Laravel.



\## 2. Point d'entrée

Le fichier public/index.php reçoit la requête et démarre l'application Laravel.



\## 3. Routage

Laravel consulte les routes définies dans routes/web.php.

Il cherche une route correspondant à l'URL demandée.



\## 4. Exécution

La closure ou le contrôleur associé à la route est exécuté.



\## 5. Réponse

La route peut retourner du texte, des données JSON ou une vue Blade.



\## 6. Affichage

Laravel renvoie la réponse HTTP au navigateur, qui l'affiche à l'utilisateur.



\## Architecture MVC

\- Model : gère les données et les interactions avec la base de données.

\- View : présente les informations à l'utilisateur.

\- Controller : traite la requête et coordonne la logique de l'application.



