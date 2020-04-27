<?php
if(!isset($_POST['mail']))
{
    require 'PHP/View/connexionHTML.php';
}
else
{
    // Le formulaire a été validé
    $message = '';
    if (empty($_POST['mail']) || empty($_POST['pass'])) // Oublie d'un champ
        {
            $message = '<p>une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs.</p>';
                        header("refresh:3,url=index.php?a=connexion");
        }
    else
        {
            $utilisateur = ClientManager::getByMail($_POST['mail']);

        if($utilisateur->getPassClient() == md5($_POST['pass']))
            {
                $_SESSION['clientMail'] = $utilisateur->getMailClient();
                $_SESSION['clientPrenom'] = $utilisateur->getPrenomClient();
                $_SESSION['clientNom'] = $utilisateur->getNomClient();
                $_SESSION['clientId'] = $utilisateur->getIdClient();
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
