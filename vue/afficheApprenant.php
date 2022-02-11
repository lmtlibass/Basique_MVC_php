<?php
    
    include_once('../controller/apprenantControleur.php');
    echo '<ul>';
    foreach ($apprenants as $apprenant){

        echo '<li> un kiliheu '.$apprenant.'</li>';

    }
    echo '</ul>'; 

    echo '<ul>';
    foreach ($apprenants2 as $apprenant){

        echo '<li> sokhnassi'.$apprenant.'</li>';

    }
    echo '</ul>';

 

?>