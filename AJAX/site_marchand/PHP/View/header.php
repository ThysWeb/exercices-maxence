<!DOCTYPE html>

<head>
    <title>L'épicerie <?php if (isset($titre)) { echo " - " . $titre; } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page">
        <header>
            <div class="headerLien">
                <?php
                switch ($menu) {
                    case 1 :
                        echo '<a href="index.php?a=accueil">Accueil</a> - <a href="index.php?a=listeProduits">Liste des Produits</a>';
                        break; 
                    case 2 :
                        echo '<a href="index.php?a=accueil">Accueil</a> - <a href="index.php?a=admin">Panneau d\'administration</a>';
                        break;    
                }
                ?>
            </div>

            <div class="headerTitre">
                <h1><?php if (isset($titre)) { echo $titre; } else { echo "Accueil"; } ?>
                </h1>
            </div>

            <div class="headerClient">
                <?php
                if (isset($_SESSION["clientId"])) {
                ?>
                    <p class="gras">Bonjour <?php echo $_SESSION["clientPrenom"]; ?></p>
                    <p>
                        <a href="index.php?a=compte">Mon Compte</a> - <a href="index.php?a=monPanier">Panier (0)</a><br />
                        <a href="index.php?a=deconnexion">Deconnexion</a>
                    </p>
                <?php
                } else if (isset($_SESSION["gerantId"])) {
                ?> 
                    <p class="gras">Bonjour <?php echo $_SESSION["gerantPseudo"]; ?></p>
                    <p>
                        <a href="index.php?a=admin">Gestion</a><br />
                        <a href="index.php?a=deconnexion">Deconnexion</a>
                    </p>
                <?php
                } 
                    else {
                ?>
                    <p class="gras">Bonjour</p>
                    <p>
                        <a href="index.php?a=inscription">Inscription</a> - <a href="index.php?a=connexion">Connexion</a>
                    </p>
                <?php
                }
                ?>
            </div>
        </header>