<?php
$mode = $_GET["m"];
$id = $_GET["id"];
$var = ClientManager::findById($id);
?>

<div id="conteneur">
    <form action="index.php?a=actionClient&m=<?php echo $mode; ?>" method="POST">
        <input type="hidden" name="idClient" required value="<?php echo $var->getIdClient(); ?>">
        <input type="hidden" name="dateAjout" required value="<?php echo $var->getDateAjout(); ?>">
        <input type="hidden" name="passClient" required value="<?php echo $var->getPassClient(); ?>">
        <div class="Bloc">
            <div class="sousbloc">
                <label for="nomClient">Nom</label>
                <input type="text" name="nomClient" placeholder="Entrez votre nom" autofocus required value="<?php echo $var->getNomClient(); ?>">
            </div>

            <div class="sousbloc">
                <label for="prenomClient">Prénom</label>
                <input type="text" name="prenomClient" placeholder="Entrez votre prenom" required value="<?php echo $var->getPrenomClient(); ?>">
            </div>

            <div class="sousbloc">
                <label for="adresseClient">Adresse</label>
                <input type="text" name="adresseClient" placeholder="Entrez votre adresse complete" required value="<?php echo $var->getAdresseClient(); ?>">
            </div>

            <div class="sousbloc">
                <label for="villeClient">Ville</label>
                <input type="text" name="villeClient" placeholder="Entrez votre ville " required value="<?php echo $var->getVilleClient(); ?>">
            </div>

            <div class="sousbloc">
                <label for="mailClient">Email</label>
                <input type="email" name="mailClient" placeholder="Entrez votre adresse e-mail" required value="<?php echo $var->getMailClient(); ?>">
            </div>
        </div>

        <div class="bouton">
            <input type="submit" value="Modifier">
        </div>
    </form>
</div>