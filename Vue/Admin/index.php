<?php $this->titre = "CarLocation - Administration" ?>

<h2>Administration</h2>

Bienvenue, <?= $this->nettoyer($login) ?> !
Ce site comporte <?= $this->nettoyer($nbVoitures) ?> voiture(s).
<br>
<a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a>
