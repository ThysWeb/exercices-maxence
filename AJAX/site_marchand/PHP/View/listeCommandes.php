<?php
$cmdes = CommandeManager::getListById($_SESSION['clientId']); 
?>

<div id="conteneurProduit">
    <h2>Mes Commandes</h2>
<?php
    foreach($cmdes as $elt)
    { ?>
        <div class="conteneurLigne">
            <div class="conteneurBloc produitBloc">
               <img src="ressources/images/panier.png" alt="" />
            </div>
            <div class="produitInfo">
                <p class="gras">Facture n° <?php echo $elt->getIdCommande(); ?></p>
                <p>Total : <?php echo $elt->getSommeCommande(); ?> €</p>
            </div>
        </div>
<?php
    } ?>
</div>