<?php
// Initialisation de l'Id du client
$id = $_SESSION['clientId'];
$sousTotal = 0;
$date = new DateTime("now");
$date = $date->format("d-m-y h-m-s");
// Initialisation de la liste de produits dans le panier
$panier = PanierManager::getList($id);

?>

<div id="conteneurProduit">
    <h2>Mon panier</h2>

    <?php
    if (empty($panier)) {
        echo '<p>Votre panier est vide.</p>';
    }
    else {
    foreach ($panier as $elt) {

        $produit = ProduitManager::findById($elt->getIdProduit());
        $sousTotal += $elt->getQuantiteCommande() * $produit->getPrixProduit(); ?>

        <div class="conteneurLigne">
            <div class="conteneurBloc espace">
                <img src="ressources/images/<?php echo $produit->getPhotoProduit(); ?>" alt="">
            </div>
            <div class="produitInfo">
                <p class="gras"><?php echo $produit->getLibelleProduit(); ?></p>
                <p>Sous-total : <?php echo $elt->getQuantiteCommande() * $produit->getPrixProduit(); ?> € </p>
                <p>
                    <form action="index.php?a=actionPanier&m=2" method="POST">
                        <input type="hidden" name="idPanier" value="<?php echo $elt->getIdPanier(); ?>">
                        <input type="hidden" name="idProduit" value="<?php echo $elt->getIdProduit(); ?>">
                        <input type="hidden" name="idClient" value="<?php echo $_SESSION['clientId']; ?>">
                        <label for="quantiteCommande">Quantité : </label>
                        <input type="number" name="quantiteCommande" value="<?php echo $elt->getQuantiteCommande(); ?>" required min="1">
                        <div class="bouton">
                            <input type="submit" value="Modifier la quantié">
                        </div>
                    </form>
                </p>
                <p>
                    <form action="index.php?a=actionPanier&m=3" method="POST">
                        <input type="hidden" name="idPanier" value="<?php echo $elt->getIdPanier(); ?>">
                        <input type="hidden" name="idProduit" value="<?php echo $elt->getIdProduit(); ?>">
                        <input type="hidden" name="idClient" value="<?php echo $_SESSION['clientId']; ?>">
                        <input type="hidden" name="quantiteCommande" value="<?php echo $elt->getQuantiteCommande(); ?>">
                        <div class="bouton">
                            <input type="submit" value="Supprimer du panier">
                        </div>
                    </form>
                </p>
            </div>
        </div>
    <?php 
        } 
    }
    ?>
</div>

<div id="conteneur">
    <div class="petitTitre">
        <p><?php echo $sousTotal; ?> €</p>
    </div>

    <form action="index.php?a=actionCommande&m=1" method="POST">
        <input type="hidden" name="sommeCommande" value="<?php echo $sousTotal; ?>">
        <input type="hidden" name="idClient" value="<?php echo $_SESSION['clientId']; ?>">
        <input type="hidden" name="dateCommande" value="<?php echo $date; ?>">
        <div class="bouton">
            <input type="submit" value="Valider commande">
        </div>
    </form>
</div>