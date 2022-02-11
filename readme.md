# EXEMPLE BASIQUE D'UTILISATION DE L'ARCHTECHTURE MVC
   # Dans cette partie, nous allons montrer un cas pratique d'utilisation du modèle MVC  

      
     ce mini projet est un exemple de programme simple qui parcour une liste
     d'apprennats et les regroupes en deux catégories : kilifeuh / sokhna
  

  > architechture du projet , suivant le modèle MVC 
   - dossiers 
        - **controller**
            - apprenantControleur.php
        - **model**
            - apprenant.php
        - **vue**
            - afficheApprenant.php

   > Compostion de nos fichiers

   - **dans le fichier apprenant:**
            Nous avons le tableau de donnée contenant la liste des apprenants : ce fichier est notre Modèle 
   - **dans le fichier afficheApprenant.php:**
            Nous aalons afficher du contenu HTML, contenant la liste des apprenants filtré par catégorie, cette liste est récupérée via les données de traité au niveau de notre            contrôleur : il represente notre vue.
   - **dans le fichier apprenantControleur.php:**
            Ce fichier represente notre contrôleur, il effectue le traitement sur les données,
            récupère les informations des apprenants dans notre modèle effectue le traitement afin de lancer l'affichage au niveau de notre vue. 

     

        

        


