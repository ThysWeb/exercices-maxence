<div id="conteneur">
    <?php
    $id = $_GET['id'];
    $produit = ProduitManager::findById($id);
    $cat = CategorieManager::findById($produit->getIdCategorie());
    ?>

    <div class="conteneurTitre">
        <h2><?php echo $produit->getLibelleProduit(); ?></h2>
    </div>

    <div class="conteneurLigne">
        <div class="conteneurBloc">
            <img src="ressources/images/<?php echo $produit->getPhotoProduit(); ?>" alt="" />
        </div>
    </div>

    <h2>Détails du produit</h2>

    <div class="conteneurDetail">
        <div class="conteneurLigne">
            <p>CATÉGORIE : <?php echo $cat->getLibelleCategorie(); ?></p>
        </div>
        <div class="conteneurLigne">
            <p>PRIX UNITAIRE : <?php echo $produit->getPrixProduit(); ?> €</p>
        </div>
        <div class="conteneurLigne">
            <p>DESCRIPTION : <?php echo $produit->getDescriptionProduit(); ?></p>
        </div>
    </div>

    <?php
    if (isset($_SESSION["clientId"])) {
    ?>
        <form action="index.php?a=actionPanier&m=1" method="POST">
            <input type="hidden" name="idClient" value="<?php echo $_SESSION['clientId'] ?>">
            <input type="hidden" name="idproduit" value="<?php echo $produit->getIdProduit(); ?>">

            <div class="conteneurColonne">
                <label class="centre" for="quantiteCommande">QUANTITÉ</label>
                <input type="number" name="quantiteCommande" placeholder="Entrez un nombre" required min="1">
            </div>

            <div class="conteneurLigne">
                <input type="submit" value="AJOUTER">
            </div>
        </form>
    <?php
    }
    ?>
</div>