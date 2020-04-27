<?php
if(!isset($_POST['email']))
{
	include 'PHP/View/inscriptionHTML.php';
}
else
{
    $erreur = "";
    $i = 0; // compte le nombre d'erreurs à afficher

    // On récupère les variables
    $date = new DateTime("now");
    $date = $date->format("d-m-y h-m-s");
    $mail = $_POST['email'];
    $pass = md5($_POST['pass']); // on hache le password avec md5
    $confirm = md5($_POST['confirm']);

    // Vérification de l'adresse mail
    $client = ClientManager::getByMail($mail);
    if ($client->getMailClient()!=null)
    {
        $erreur .= "Votre adresse mail est déjà utilisée. ";
        $i++;
    }
    // Vérification du mot de passe
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
        $erreur .= "Votre mot de passe et votre confirmation de mot de passe sont incorrects, ou sont vides. ";
        $i++;
    }
    if ($i == 0) // S'il n'y a pas d'erreur
    {
        $nouveauClient = new Client(['mailClient'=>$_POST['email'], 'passClient'=>md5($_POST['pass']), 'nomClient'=>$_POST['nom'], 'prenomClient'=>$_POST['prenom'], 'adresseClient'=>$_POST['adresse'], 'villeClient'=>$_POST['ville'], 'dateAjout'=>$date]);

        // Création d'un nouveau client
        ClientManager::add($nouveauClient);
        
        // Récupération de l'id
        $nouveauClient = ClientManager::getByMail($_POST['email']);
        echo'<div id="conteneur"><p>Bienvenue '.stripslashes(htmlspecialchars($nouveauClient->getPrenomClient())).', vous êtes maintenant inscrit(e)</p></div>';

        //Et on définit les variables de sessions
        $_SESSION['clientMail'] = $nouveauClient->getMailClient();
        $_SESSION['clientPrenom'] = $nouveauClient->getPrenomClient();
        $_SESSION['clientNom'] = $nouveauClient->getNomClient();
        $_SESSION['clientId'] = $nouveauClient->getIdClient();
        header('Location:index.php?a=accueil');
    }
    else // on affiche les erreurs
    {
        echo'<div id="conteneur"><p>Une ou plusieurs erreurs se sont produites pendant l\'incription</p>';
        echo'<p>'.$erreur.'</p></div>';
        header("refresh:3,url=index.php?action=inscription");
    }
}