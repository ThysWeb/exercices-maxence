<?php
$var = new Produit($_POST);

switch ($_GET["m"])
{
    case "1":
        ProduitManager::add($var);
        break;

    case "2":
        ProduitManager::update($var);
        break;

    case "3":
        ProduitManager::delete($var);
        break; 
}

header("location:index.php?a=adminListeProduits");