<div id="conteneur">
    <div class="conteneurBoutons">
        <div class="bouton">
            <a href="index.php?a=adminListeCommandes">Liste commandes</a>
        </div>
        <div class="bouton">
            <a href="index.php?a=adminListeProduits">Liste produits</a>
        </div>
        <div class="bouton">
            <a href="index.php?a=adminListeCategories">Liste categories</a>
        </div>

        <?php
        if ($_SESSION['gerantRole'] == 2) {
        ?>
        <div class="bouton">
            <a href="index.php?a=adminListeClients">Liste clients</a>
        </div>
        <div class="bouton">
            <a href="index.php?a=adminListeGerants">Liste gérants</a>
        </div>
        <?php 
        }
        ?>
        
    </div>
</div>