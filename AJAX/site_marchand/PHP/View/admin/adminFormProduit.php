<?php
$mode = $_GET["m"];

if ($mode != "1") {
    $id = $_GET["id"];
    $var = ProduitManager::findById($id);
}

switch ($mode) {
    case "1":
        $texteBouton = "Ajouter";
        break;
    case "2":
        $texteBouton = "Modifier";
        break;
    case "3":
        $texteBouton = "Supprimer";
        break;
}
?>

<div id="conteneur">
    <form action="index.php?a=actionProduit&m=<?php echo $mode; ?>" method="POST">
        <?php
        if ($mode != "1") {
        ?>
        <input type="hidden" name="idProduit" value="<?php echo $var->getIdProduit(); ?>">
        <?php
        }
        ?>
            <div class="conteneurColonne">
                <label for="libelleProduit">Nom</label>
                <input type="text" name="libelleProduit" placeholder="Entrez le nom du produit" autofocus required <?php if ($mode == 3) {
                                                                                                                        echo "readonly";
                                                                                                                    } ?> value="<?php if ($mode != "1") { echo $var->getLibelleProduit(); } ?>">
            </div>

            <div class="conteneurColonne">
                <label for="photoProduit">Photo</label>
                <input type="text" name="photoProduit" placeholder="Lien photo" required <?php if ($mode == 3) {
                                                                                                echo "readonly";
                                                                                            } ?> value="<?php if ($mode != "1") {  echo $var->getPhotoProduit(); } ?>">
            </div>

            <div class="conteneurColonne">
                <label for="quantiteProduit">Quantité</label>
                <input type="text" name="quantiteProduit" placeholder="Quantité" required <?php if ($mode == 3) {
                                                                                                echo "readonly";
                                                                                            } ?> value="<?php if ($mode != "1") { echo $var->getQuantiteProduit(); } ?>">
            </div>

            <div class="conteneurColonne">
                <label for="prixProduit">Prix</label>
                <input type="text" name="prixProduit" placeholder="Prix" required <?php if ($mode == 3) {
                                                                                                echo "readonly";
                                                                                            } ?> value="<?php if ($mode != "1") { echo $var->getPrixProduit(); } ?>">
            </div>

            <div class="conteneurColonne">
                <label for="idCategorie">Catégorie</label>
                <select name="idCategorie" id="idCategorie">
                    <?php
                    $categories = CategorieManager::getList();
                    foreach ($categories as $elt) {
                        if ($mode != 1 && ($var->getIdCategorie() == $elt->getIdCategorie())) {
                            echo ' <option selected value="' . $elt->getIdCategorie() . '">' . $elt->getLibelleCategorie() . '</option>';
                        } else {
                            echo ' <option value="' . $elt->getIdCategorie() . '">' . $elt->getLibelleCategorie() . '</option>';
                        }
                    }

                    ?>

                </select>
            </div>

            <div class="conteneurColonne">
                <label for="descriptionProduit">Description</label><br>
                <textarea id="descriptionProduit" name="descriptionProduit" rows="10" cols="53"><?php if ($mode != 1) { echo $var->getDescriptionProduit(); } ?></textarea>
            </div>

            <div class="bouton">
                <input type="submit" value="<?php echo $texteBouton; ?>">
            </div>
        </div>

    
    </form>
</div>