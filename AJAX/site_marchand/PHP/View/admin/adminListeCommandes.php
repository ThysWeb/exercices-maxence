<?php
$cmdes = CommandeManager::getList(); ?>

<div id="conteneurListe">
    <div class="tableau">
        <div class="conteneurLigne">
            <div class="blocEnTete">Num&eacute;ro commande</div>
            <div class="blocEnTete">Num&eacute;ro client</div>
            <div class="blocEnTete">Total TTC</div>
            <div class="blocEnTete">Actions</div>
        </div>

        <?php
        foreach ($cmdes as $elt) {
            $client = ClientManager::findById($elt->getIdClient()) ?>
            <div class="conteneurLigne">
                <div class="blocContenuListe"><?php echo $elt->getIdCommande(); ?></div>
                <div class="blocContenuListe"><?php echo $client->getNomClient() . " " . $client->getPrenomClient(); ?></div>
                <div class="blocContenuListe"><?php echo $elt->getSommeCommande(); ?> €</div>
                <div class="blocContenuListe">
                    <form action="index.php?a=actionCommande&m=3" method="POST">
                        <input type="hidden" name="idCommande" value="<?php echo $elt->getIdCommande(); ?>">
                        <input type="hidden" name="dateCommande" value="<?php echo $elt->getDateCommande(); ?>">
                        <input type="hidden" name="sommeCommande" value="<?php echo $elt->getSommeCommande(); ?>">
                        <input type="hidden" name="idClient" value="<?php echo $elt->getIdClient(); ?>">
                        <input class="bouton" type="submit" value="Supprimer">
                    </form>
                </div>
            </div>

        <?php  
        }
        ?>

    </div>
</div>