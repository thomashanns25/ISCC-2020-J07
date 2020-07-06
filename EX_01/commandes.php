<?php
//Tableau prix//
$historique_commandes = [1=> 5.49, 9.99, 5.49, 15.99, 25]; 

//Liste//

function afficher_commandes($historique_commandes){
    
    foreach($historique_commandes as $element)
    echo "Une commande de $element euros a été reçus.<br>";

    //Calcul//
    array_sum($historique_commandes);
    echo 'Le total de commande est ' .array_sum($historique_commandes). ' euros';
}

//Rendu//
afficher_commandes($historique_commandes);
?>