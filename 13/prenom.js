// on récupère la div qui affichera le nom de l'utilisateur
var prenomUtilisateur = document.getElementById("container")

// on récupère le bouton qui permettra de réinitialiser le prénom
document.getElementById("reinit").addEventListener("click", function(){eraseCookie("prenom")});


if(readCookie("prenom") == null)
{
    // on demande le prénom
    prenomUtilisateur = prompt("Entrez votre prénom: "); 
    // on crée le cookie
    createCookie("prenom", prenomUtilisateur, 3);
}
else
{
    // sinon on affiche son contenu dans la div
    prenomUtilisateur.innerHTML = "Bonjour : "+readCookie("prenom");
}