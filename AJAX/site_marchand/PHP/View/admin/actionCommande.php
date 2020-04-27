<?php
$var = new Commande($_POST);

switch ($_GET["m"])
{
    case "1":
        CommandeManager::add($var);
        $id = $_SESSION['clientId'];
        $panier = PanierManager::deleteClient($id);
        header("location:index.php?a=listeCommandes");
        break;

    case "2":
        CommandeManager::update($var);
        break;
        
    case "3":
        CommandeManager::delete($var);
        header("location:index.php?a=adminListeCommandes");
        break; 
}

