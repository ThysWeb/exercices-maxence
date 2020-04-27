<?php
$var = new Categorie($_POST);

switch ($_GET["m"])
{
    case "1":
        CategorieManager::add($var);
        break;

    case "2":
        CategorieManager::update($var);
        break;

    case "3":
        CategorieManager::delete($var);
        break; 
}

header("location:index.php?a=adminListeCategories");
