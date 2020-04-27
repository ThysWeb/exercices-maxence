<div id="conteneur">
    <form action="#" method="POST">
        <div class="conteneurColonne">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Entrez votre nom" required autofocus>
        </div>

        <div class="conteneurColonne">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" placeholder="Entrez votre prenom" required>
        </div>

        <div class="conteneurColonne">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" placeholder="Entrez votre adresse complete" required>
        </div>

        <div class="conteneurColonne">
            <label for="ville">Ville</label>
            <input type="text" name="ville" placeholder="Entrez votre ville" required>
        </div>

        <div class="conteneurColonne">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Entrez votre adresse e-mail" required>
        </div>

        <div class="conteneurColonne">
            <label for="pass">Mot de Passe</label>
            <input type="password" name="pass" placeholder="Entrez votre Mot de Passe" required>
        </div>

        <div class="conteneurColonne">
            <label for="confirm">Confirmation </label>
            <input type="password" name="confirm" placeholder="Confirmez votre Mot de Passe" required>
        </div>

        <div class="conteneurLigne">
            <input type="submit" value="S'inscrire">
        </div>

        <p class="centre">
            <a href="index.php?a=connexion">Déjà inscrit?</a>
        </p>
    </form>
</div>