
<?php

// appel du fichier qui à accès aux données (modèle)
include_once('../model/apprenant.php');
 
// On effectue le traitement sur les données (contrôleur)
$apprenants = [];
$apprenants2 = [];
foreach ($tableau as $apprenant){
        if($apprenant === "aladji zono" or $apprenant === "aladji libs"){

            $apprenants[] = $apprenant;

        }else if($apprenant != "zono" or $apprenant != "aladji libs"){
            $apprenants2[] = $apprenant;
        }
  
}
 
// On affiche la page (vue)
include_once('../vue/afficheApprenant.php');


?>