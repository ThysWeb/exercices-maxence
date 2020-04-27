<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/Controller/" . $classe . ".Class.php")) {
        require "PHP/Controller/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/Model/" . $classe . ".Class.php")) {
        require "PHP/Model/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");

function AfficherPage($chemin,$nom,$titre,$menu)
{
    include 'PHP/View/header.php';
    include 'PHP/View/' . $chemin . $nom . '.php';
    include 'PHP/View/footer.php';
}

Parametre::init();
DbConnect::init();
session_start();

if (isset($_GET["a"])) {
    switch ($_GET["a"]) {

// ----------- ACCUEIL / CATALOGUE / ACHAT -----------
        case "accueil":
            AfficherPage("","accueil","Accueil",1);
            break;

        case "listeProduits":
            AfficherPage("","listeProduits","Liste des produits",1);
            break;

        case "detail":
            AfficherPage("","detailProduit","Détails du produit",1);
            break;

        case "monPanier":
            AfficherPage("","panier","Panier",1);
            break;
// ------------ FORMULAIRE --------------
        case "connexion":
            AfficherPage("","connexion","Connexion",1);
            break;

        case "connexionAdmin":
            AfficherPage("","connexionAdmin","Espace gérant",1);
            break;

        case "inscription":
            AfficherPage("","inscription","Inscription",1);
            break;

        case "deconnexion":
            AfficherPage("","deconnexion","",1);
            break;

// ------------ COMPTE ------------
        case "compte":
            AfficherPage("","compte","Mon compte",1);
            break;

        case "modifierProfil":
            AfficherPage("","modifierProfil","Modifier mon profil",1);
            break;

        case "listeCommandes":
            AfficherPage("","listeCommandes","Liste des commandes",1);
            break;
// -------- ADMINISTRATEUR --------

        case "admin":
            AfficherPage("admin/","admin","Panneau d'administration",2);
            break;

        case "adminListeProduits":
            AfficherPage("admin/","adminListeProduits","Gestion des produits",2);
            break;

        case "adminListeCommandes":
            AfficherPage("admin/","adminListeCommandes","Gestion des commandes",2);
            break;

        case "adminListeCategories":
            AfficherPage("admin/","adminListeCategories","Gestion des catégories",2);
            break;

        case "adminListeClients":
            AfficherPage("admin/","adminListeClients","Gestion des clients",2);
            break;

        case "adminListeGerants":
            AfficherPage("admin/","adminListeGerants","Gestion des gérants",2);
            break;

// ------- FORMULAIRE ADMIN ----------
        case "adminFormProduit":
            AfficherPage("admin/","adminFormProduit","Gestion d'un produit",2);
            break;

        case "adminFormCategorie":
            AfficherPage("admin/","adminFormCategorie","Gestion d'une catégorie",2);
            break;

        case "adminFormClient":
            AfficherPage("admin/","adminFormClient","Gestion d'un client",2);
            break;

        case "adminFormGerant":
            AfficherPage("admin/","adminFormGerant","Gestion d'un gérant",2);
            break;

        case "actionProduit":
            AfficherPage("admin/","actionProduit","",2);
            break;
    
        case "actionCategorie":
            AfficherPage("admin/","actionCategorie","",2);
            break;
    
        case "actionClient":
            AfficherPage("admin/","actionClient","",2);
            break;
    
        case "actionGerant":
            AfficherPage("admin/","actionGerant","",2);
            break;

        case "actionPanier":
            AfficherPage("admin/","actionPanier","",2);
            break;

        case "actionCommande":
            AfficherPage("admin/","actionCommande","",2);
            break;
    }
} else {
    AfficherPage("","accueil","Accueil",1);
}
