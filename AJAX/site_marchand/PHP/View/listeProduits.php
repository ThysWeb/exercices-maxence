<div id="conteneur">
    <div class="conteneurListeProduit">
        <?php
        $listeProduits = ProduitManager::getList();
        foreach ($listeProduits as $produit) {
        ?>

        <div class="conteneurBlocListeProduit">
            <a href="index.php?a=detail&id=<?php echo $produit->getIdProduit(); ?>"><img src="ressources/images/<?php echo $produit->getPhotoProduit(); ?>" alt="" /></a>
        </div>

        <?php 
        }
        ?>
    </div>
</div>