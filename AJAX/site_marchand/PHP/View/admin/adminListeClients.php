<?php
$listeClient = ClientManager::getList();
?>

    <div id="conteneurListe">
        <h2>Liste des clients</h2>  
        <div class="tableau">
        <div class="conteneurLigne">
            <div class="blocEnTete">Nom</div>
            <div class="blocEnTete">Prénom</div>
            <div class="blocEnTete">E-mail</div>
            <div class="blocEnTete">Adresse</div>
            <div class="blocEnTete">ACTIONS</div>
        </div>

        <?php 
        foreach($listeClient as $elt)
        { 
        ?>

        <div class="conteneurLigne">
            <div class="blocContenuListe"><?php echo $elt->getNomClient(); ?></div>
            <div class="blocContenuListe"><?php echo $elt->getPrenomClient(); ?></div>
            <div class="blocContenuListe"><?php echo $elt->getMailClient(); ?></div>
            <div class="blocContenuListe"><?php echo $elt->getAdresseClient(); ?></div>
            <div class="blocContenuListe">
                <div class="bouton">
                    <a href="index.php?a=adminFormClient&m=2&id=<?php echo $elt->getIdClient() ?>">Modifier</a>
                </div>
            </div>
        </div>

        <?php   
        }
        ?>

        </div>
    </div>