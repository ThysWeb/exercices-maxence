<div class="bouton">
    <a href="index.php?a=adminFormProduit&m=1">AJOUTER</a>
</div>

<div id="conteneurProduit">
    <?php
    // Initialisation du tableau des produits
    $listeProduit = ProduitManager::getList();
    foreach($listeProduit as $produit)
    { 
    ?>

        <div class="conteneurLigne">
            <div class="conteneurBloc espace">
                <a href="index.php?a=detail&id=<?php echo $produit->getIdProduit(); ?>"><img src="ressources/images/<?php echo $produit->getPhotoProduit(); ?>" alt="" /></a>
            </div>

            <div class="produitInfo">
                <div class="conteneurColonne">
                    <p>Prix: <?php echo $produit->getPrixProduit(); ?> €</p>
                    <p>Quantité: <?php echo $produit->getQuantiteProduit(); ?></p>
                    <p>Description: <?php echo $produit->getDescriptionProduit(); ?></p>
                </div>

                <div class="conteneurLigne">
                    <div class="bouton espace">
                        <a href="index.php?a=adminFormProduit&m=2&id=<?php echo $produit->getIdProduit(); ?>">Modifier</a>
                    </div>
                    <div class="bouton espace">
                        <a href="index.php?a=adminFormProduit&m=3&id=<?php echo $produit->getIdProduit(); ?>">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    
    <?php
    } 
    ?>

    </div>
