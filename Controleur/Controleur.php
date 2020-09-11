<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les voitures
function accueil() {
    $voitures = getVoitures();
    require 'Vue/vueAccueil.php';
}

// Affiche les détails sur une voiture
function voiture($id) {
    $voiture = getVoiture($id);
    require 'Vue/vueVoiture.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'Vue/vueErreur.php';
}
