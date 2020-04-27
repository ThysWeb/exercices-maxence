<?php
// Initialisation du tableau des gérants
$listeGerant = GerantManager::getList();
?>

<div id="conteneurListe">
    <h2>Liste des g&eacute;rants</h2>
    <div class="tableau">
        <div class="conteneurLigne">
            <div class="blocEnTete">Pseudo</div>
            <div class="blocEnTete">E-mail</div>
            <div class="blocEnTete">Actions</div>
        </div>

        <?php 
        foreach ($listeGerant as $elt) 
        { 
        ?>
            <div class="conteneurLigne">
                <div class="blocContenuListe"><?php echo $elt->getPseudoGerant(); ?></div>
                <div class="blocContenuListe"><?php echo $elt->getMailGerant(); ?></div>
                <div class="blocContenuListe">
                    <div class="bouton espace">
                        <a href="index.php?a=adminFormGerant&m=2&id=<?php echo $elt->getIdGerant() ?>">Modifier</a>
                    </div>
                    <div class="bouton espace">
                        <a href="index.php?a=adminFormGerant&m=3&id=<?php echo $elt->getIdGerant() ?>">Supprimer</a>
                    </div>
                </div>
            </div>

        <?php   
        }
        ?>

    </div>

    <div class="bouton">
        <a href="index.php?a=adminFormGerant&m=1">Ajouter</a>
    </div>

</div>