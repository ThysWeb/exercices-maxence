<div class="bouton">
    <a href="index.php?a=modifierProfil">Modifier mon compte</a>
</div>

<div id="conteneurProduit">
    <h2>Mes dernières commandes</h2>

    <?php
    $commandes = CommandeManager::getList3();
    if (empty($commandes)) {
        echo "<p>Aucune commande enregistrée.</p>";
    }
    else {
    foreach ($commandes as $commande) {
    ?>

    <div class="conteneurLigne">
        <div class="conteneurBloc produitBloc">
            <img src="ressources/images/panier.png" alt="" />
        </div>
        <div class="produitInfo">
            <p class="gras">Facture <?php echo $commande->getIdCommande(); ?></p>
            <p>Total : <?php echo $commande->getSommeCommande(); ?> € </p>
        </div>
    </div>

    <?php
        }
    }
    ?>
    </div>
</div>

<div class="bouton">
    <a href="index.php?a=listeCommandes">Voir plus de commandes</a>
</div>