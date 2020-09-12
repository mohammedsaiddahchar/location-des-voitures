<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Voiture.php';

/**
 * Contrôleur des actions d'administration
 *
 * @author Dahchar mohammed said
 */
class ControleurAdmin extends ControleurSecurise
{
    private $voiture;

    /**
     * Constructeur 
     */
    public function __construct()
    {
        $this->voiture = new Voiture();
    }

    public function index()
    {
        $nbVitures = $this->voiture->getNombreVoitures();
        $login = $this->requete->getSession()->getAttribut("login");
        $this->genererVue(array('nbVoitures' => $nbVoitures, 'login' => $login));
    }

}
