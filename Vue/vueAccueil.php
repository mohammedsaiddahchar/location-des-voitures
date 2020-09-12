<?php $this->titre = 'CarLocation'; ?>


<?php foreach ($voitures as $voiture): ?>
    <article>
        <header>
            <a href="<?= "voiture/index/" . $voiture['id'] ?>">
                <h1 class="voiture"><?= $voiture['marque'] ?></h1>
            </a>
        </header>
        <p>
            <table>
        <tr><img src="<?= $voiture['image']  ?>"></tr>
    <tr><td>marque</td><td><?= $voiture['marque'] ?></td></tr>
    <tr><td>serie</td><td><?= $voiture['serie'] ?></td></tr>
    <tr><td>fabricant</td><td><?= $voiture['fabricant' ?></td></tr>
    <tr><td>couleur</td><td><?= $voiture['couleur'] ?></td></tr>
    <tr><td>contenance</td><td><?= voiture['contenance'] ?></td></tr>
    <tr><td>chaises</td><td><?= $voiture['chaises'] ?></td></tr>
    <tr><td>matricule</td><td><?= $voiture['matricule'] ?></td></tr>
    <tr><td>vitesse_max</td><td><?= $voiture['vitesse_max'] ?></td></tr>
    <tr><td>transmission</td><td><?= $voiture['transmission'] ?></td></tr>
    <tr><td>transmission</td><td><?= $voiture['transmission'] ?></td></tr>
    <tr><td>acceleration</td><td><?= $voiture['acceleration'] ?></td></tr>
    <tr><td>puissance_moteur</td><td><?= $voiture['puissance_moteur'] ?></td></tr>
    <tr><td>date de sortie</td><td><?= $voiture['jour']." - ".$voiture['mois']." - ".$voiture['annee'] ?></td></tr>
</table>
</p>
    </article>
    <hr />
<?php endforeach; ?>

