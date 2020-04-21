// on récupère la div qui affichera le nom de l'utilisateur
var prenomUtilisateur = document.getElementById("container")

// on récupère le bouton qui permettra de réinitialiser le prénom
document.getElementById("reinit").addEventListener("click", function(){eraseCookie("prenom")});

// si le cookie n'existe pas, on appelle la fonction getPrenom
if(readCookie("prenom") == null)
{
    getPrenom();
}
else // sinon on affiche son contenu dans la div récupérée plus tôt
{
    prenomUtilisateur.insertAdjacentElement = " " + readCookie("prenom");
}

// la fonction getPrenom récupère le prénom de l'utilisateur
function getPrenom()
{
    prenomUtilisateur = prompt("Entrez votre prénom: ");
    createCookie("prenom", prenomUtilisateur, 3);
}
