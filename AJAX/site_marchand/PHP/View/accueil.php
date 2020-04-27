<div id="conteneur">
    <div class="conteneurColonne">
        <h2>Nouveautés</h2>
        <div class="conteneurLigne">
            <?php
            $listeProduits = ProduitManager::getList4();
            foreach ($listeProduits as $produit) {
            ?>
                <div class="conteneurBloc">
                    <a href="index.php?a=detail&id=<?php echo $produit->getIdProduit(); ?>">
                        <img src="ressources/images/<?php echo $produit->getPhotoProduit(); ?>" alt="<?php echo $produit->getPhotoProduit(); ?>" />
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    <div class="conteneurColonne">
        <h2>Sélection aléatoire</h2>
        <div class="conteneurLigne">
            <?php
            $listeProduits = ProduitManager::getListRand();
            foreach ($listeProduits as $produit) {
            ?>
                <div class="conteneurBloc">
                    <a href="index.php?a=detail&id=<?php echo $produit->getIdProduit(); ?>">
                        <img src="ressources/images/<?php echo $produit->getPhotoProduit(); ?>" alt="" />
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>