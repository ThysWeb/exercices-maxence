// si le cookie n'existe pas, on le crée 
if(readCookie("prenom") == null)
{
    createCookie("prenom", getPrenom(), 3);
}

// récupère le prénom de l'utilisateur
function getPrenom()
{
    prompt("Entrez votre prénom: ");
}
