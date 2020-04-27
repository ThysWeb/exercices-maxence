<?php

$mode = $_GET["m"];

if ($mode != "1") {
    $id = $_GET["id"];
    $var = CategorieManager::findById($id);
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
    <form action="index.php?a=actionCategorie&m=<?php echo $mode; ?>" method="POST">
        <?php
        if ($mode != "1") {
        ?>
            <input type="hidden" name="idCategorie" value="<?php echo $var->getIdCategorie(); ?>">
        <?php
        }
        ?>
            <div class="conteneurColonne">
                <label for="libelleCategorie">Nom</label>
                <input type="text" name="libelleCategorie" placeholder="Entrez le nom de la catégorie" autofocus required <?php if ($mode == 3) {
                                                                                                                                echo "readonly";
                                                                                                                            } ?> value="<?php if ($mode != "1") {
                                                                                                                                echo $var->getLibelleCategorie();
                                                                                                                            } ?>">
            </div>

    <div class="bouton">
        <input type="submit" value="<?php echo $texteBouton; ?>">
    </div>
    </form>
</div>