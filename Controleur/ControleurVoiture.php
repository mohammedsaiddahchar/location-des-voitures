<?php

require_once 'Modele/Voiture.php';
require_once 'Vue/Vue.php';

class ControleurVoiture {

    private $voiture;

    public function __construct() {
        $this->voiture = new Voiture();
    }

    // Affiche les détails sur une voiture
    public function voiture($id) {
        $voiture = $this->voiture->getVoiture($id);
        $vue = new Vue("Voiture");
        $vue->generer(array('voiture' => $voiture));
    }

   

}
