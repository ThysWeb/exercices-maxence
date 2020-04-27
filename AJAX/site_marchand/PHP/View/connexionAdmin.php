<?php
if(!isset($_POST['pseudo']))
{
    require 'PHP/View/connexionAdminHTML.php';
}
else
{
    // Le formulaire a été validé
    $message = '';
    if (empty($_POST['pseudo']) || empty($_POST['pass'])) // Oublie d'un champ
        {
            $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs.</p>';
                        header("refresh:3,url=index.php?a=connexion");
        }
    else
        {
            $utilisateur = GerantManager::getByPseudo($_POST['pseudo']);

        if($utilisateur->getPassGerant() == md5($_POST['pass']))
            {
                $_SESSION['gerantMail'] = $utilisateur->getMailGerant();
                $_SESSION['gerantPseudo'] = $utilisateur->getPseudoGerant();
                $_SESSION['gerantId'] = $utilisateur->getIdGerant();
                $_SESSION['gerantRole'] = $utilisateur->getRoleGerant();
                header('Location:index.php?a=accueil');
            }
        else
            {
                $message = '<p>Une erreur s\'est produite pendant votre identification. Les informations ne sont pas correctes.</p>';
                header("refresh:3,url=index.php?a=connexion");
            }
    }
    
    echo '<div id="conteneur">'. $message . '</div>';
}
