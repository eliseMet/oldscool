# oldscool
Projet innovation et société ESIR

Installation du projet en local : 

  1. Installer un serveur local (wamp, xampp, laragon) :
     
  3. Cloner le projet : (ouvrir un terminal)
       > cd chemin/vers/projet
       > git clone origin https://oauth2:<YOUR TOKEN>@github.com/eliseMet/oldscool.git -b dev

  4. Configuration .env :
     Aller dans le projet et renommer le .env.example en .env
       > php artisant key:generate

  5. Base de données :
  
  6. Installations :
       > npm install
       > composer install

   7. Lancer le projet :
        > npm run dev 
        > php artisant serve
