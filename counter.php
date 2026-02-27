<?php
    $fichier = 'compteur.txt';
    
    if (!file_exists($fichier)) {
        file_put_contents($fichier, 0);
    }
    
    $compteur = (int)file_get_contents($fichier);
    $compteur++;
    
    file_put_contents($fichier, $compteur);
    
    echo "Cette page a été vue $compteur fois.";
?>