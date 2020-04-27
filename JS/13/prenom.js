// on récupère la div qui affichera le nom de l'utilisateur
var divPrenom = document.getElementById("container")

// on récupère le bouton qui permettra de réinitialiser le prénom
document.getElementById("reinit").addEventListener("click", function(){eraseCookie("prenom"); reload();});


if(readCookie("prenom") == null)
{
    // on demande le prénom
    prenomUtilisateur = prompt("Entrez votre prénom: "); 
    // on crée le cookie
    createCookie("prenom", prenomUtilisateur, 3);
    // sinon on affiche son contenu dans la div
    divPrenom.innerHTML = "Bonjour : "+readCookie("prenom");
}
else
{
    // sinon on affiche son contenu dans la div
    divPrenom.innerHTML = "Bonjour : "+readCookie("prenom");
}