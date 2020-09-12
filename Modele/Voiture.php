<?php

require_once 'Framework/Modele.php';
/**
 *  
 * 
 * @author Dahchar Mohammed Said
 */
class Voiture extends Modele {

    /** Renvoie la liste des voitures
     * 
     * @return PDOStatement La liste des voitures
     */
    public function getVoitures() {
        $sql = 'select * from vehicules'
                . ' order by id desc';
        $voitures = $this->executerRequete($sql);
        return $voitures;
    }

    /** Renvoie les informations sur une voiture
     * 
     * @param int $id L'identifiant du voiture
     * @return array La voiture
     * @throws Exception Si l'identifiant du voiture est inconnu
     */
    public function getVoiture($id) {
        $sql = 'select * from vehicules'
                . ' where id=?';
        $voiture = $this->executerRequete($sql, array($id));
        if ($voiture->rowCount() > 0)
            return $voiture->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun voiture ne correspond à l'identifiant '$id'");
    }

}
