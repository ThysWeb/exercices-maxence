<?php
$cat = CategorieManager::getList(); 
?>

<div id="conteneurListe">

    <div class="tableau">
        <div class="conteneurLigne">
            <div class="blocEnTete">Libell&eacute; cat&eacute;gorie</div>
            <div class="blocEnTete">Actions</div>
        </div>

        <?php
        foreach ($cat as $elt) { ?>
            <div class="conteneurLigne">
                <div class="blocContenuListe">
                    <?php echo $elt->getLibelleCategorie(); ?>
                </div>
                <div class="blocContenuListe">
                    <div class="bouton espace">
                        <a href="index.php?a=adminFormCategorie&m=2&id=<?php echo $elt->getIdCategorie(); ?>">Modifier</a> 
                    </div>
                    <?php
                    if ($_SESSION['gerantRole'] == 2) {
                    ?>
                    <div class="bouton espace">
                       <a href="index.php?a=adminFormCategorie&m=3&id=<?php echo $elt->getIdCategorie(); ?>">Supprimer</a> 
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        } 
        ?>
        
    </div>

    <div class="bouton">
            <a href="index.php?a=adminFormCategorie&m=1">AJOUTER</a>
    </div>
</div>