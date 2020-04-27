<?php
$var = new Panier($_POST);

switch ($_GET["m"])
{
    case "1":
        PanierManager::add($var);
        break;

    case "2":
        PanierManager::update($var);
        break;

    case "3":
        PanierManager::delete($var);
        break; 
}

header("location:index.php?a=monPanier");