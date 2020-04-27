<?php
function Load($class)
{
    if (file_exists($class . ".Class.php")) {
        require $class . ".Class.php";
    }

    if (file_exists("../controller/" . $class . ".Class.php")) {
        require "../controller/" . $class . ".Class.php";
    }

}
spl_autoload_register("Load");

require 'DbConnect.Class.php';
DbConnect::init();

// Categorie - add
// $var = new Categorie(["libelleCategorie"=>"Fruits"]);
// CategorieManager::add($var);

// Categorie - update
// $var = CategorieManager::findById(1);
// $var->setLibelleCategorie("Légumes");
// CategorieManager::update($var);

// Categorie - delete
// $var = CategorieManager::findById(1);
// CategorieManager::delete($var);

// ================================================

// Client - add
// $date = new DateTime("now");
// $date = $date->format("d-m-y h-m-s");
// $var = new Client(["nomClient"=>"Nom","prenomClient"=>"Prenom","mailClient"=>"Mail","passClient"=>"Pass","adresseClient"=>"Adresse","villeClient"=>"Ville","dateAjout"=>$date]);
// ClientManager::add($var);

// Client - update
// $var = ClientManager::findById(1);
// $var->setNomClient("LégumeMan");
// ClientManager::update($var);

// Client - delete
// $var = ClientManager::findById(1);
// ClientManager::delete($var);

// ================================================

// Commande - add
// $date = new DateTime("now");
// $date = $date->format("d-m-y h-m-s");
// $var = new Commande(["sommeCommande"=>50,"dateCommande"=>$date]);
// CommandeManager::add($var);

// Commande - update
// $var = CommandeManager::findById(1);
// $var->setSommeCommande(1);
// CommandeManager::update($var);

// Commande - delete
// $var = CommandeManager::findById(3);
// CommandeManager::delete($var);

// ================================================

// Gerant - add
// $var = new Gerant(["pseudoGerant"=>"Pseudo","passGerant"=>"Pass","mailGerant"=>"Mail","roleGerant"=>1]);
// GerantManager::add($var);

// Gerant - update
// $var = GerantManager::findById(1);
// $var->setRoleGerant(2);
// GerantManager::update($var);

// Gerant - delete
// $var = GerantManager::findById(1);
// GerantManager::delete($var);

// ================================================

// Panier - add
// $var = new Panier(["idProduit"=>1,"idClient"=>1,"idCommande"=>1]);
// PanierManager::add($var);

// Panier - update
// $var = PanierManager::findById(4);
// $var->setIdProduit(2);
// PanierManager::update($var);

// Panier - delete
// $var = PanierManager::findById(4);
// PanierManager::delete($var);

// ================================================

// Produit - add
// $var = new Produit(["libelleProduit"=>"Libelle","photoProduit"=>"Photo","prixProduit"=>10,"quantiteProduit"=>2,"descriptionProduit"=>"Description","idCategorie"=>1,"libelleCategorie"=>""]);
// ProduitManager::add($var);

// Produit - update
// $var = ProduitManager::findById(1);
// $var->setQuantiteProduit(500);
// ProduitManager::update($var);

// Produit - delete
// $var = ProduitManager::findById(1);
// ProduitManager::delete($var);