<?php
$var = ClientManager::findById($_SESSION['clientId']);
$texteBouton = "Modifier";
?>

<div id="conteneur">
    <form action="index.php?a=actionClient&m=2" method="POST">
    <input type="hidden" name="idClient" value="<?php echo $var->getIdClient(); ?>">

            <div class="conteneurColonne">
                <label for="nomClient">Nom</label>
                <input type="text" name="nomClient" placeholder="Entrez votre nom" autofocus required value="<?php echo $var->getNomClient(); ?>">
            </div>

            <div class="conteneurColonne">
                <label for="prenomClient">Prénom</label>
                <input type="text" name="prenomClient" placeholder="Entrez votre prenom" required  value="<?php echo $var->getPrenomClient(); ?>">
            </div>

            <div class="conteneurColonne">
                <label for="adresseClient">Adresse</label>
                <input type="text" name="adresseClient" placeholder="Entrez votre adresse complete" required  value="<?php echo $var->getAdresseClient(); ?>">
            </div>

            <div class="conteneurColonne">
                <label for="villeClient">Vlile</label>
                <input type="text" name="villeClient" placeholder="Entrez votre ville" required  value="<?php echo $var->getVilleClient(); ?>">
            </div>

            <div class="conteneurColonne">
                <label for="mailClient">Email</label>
                <input type="email" name="mailClient" placeholder="Entrez votre adresse e-mail" required value="<?php echo $var->getMailClient(); ?>">
            </div>

            <div class="conteneurColonne">
                <label for="passClient">Mot de passe</label>
                <input type="password" name="passClient" placeholder="Entrez votre mot de passe">
            </div>

            <div class="conteneurColonne">
                <label for="confirm">Confirmation </label>
                <input type="password" name="confirm" placeholder="Confirmez votre mot de passe">
            </div>

    <div class="bouton">
        <input type="submit" value="Modifer">
    </div>
    </form>
</div>