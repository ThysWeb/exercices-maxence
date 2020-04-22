// on récupère les menus
var listeMenus = document.getElementsByClassName("menu");

// on y ajoute un listener
for (let i=0; i<listeMenus.length; i++)
{
    listeMenus[i].addEventListener("click", afficherMenu);
}


function afficherMenu(e)
{
    alert("ok");
    // on récupère le sous-menu de la div cliquée
    submenu = document.getElementsByClassName("submenu")[0];

    // si il est déjà ouvert on appel la fonction fermerMenu
    if(submenu.style.display == "flex")
    {
        fermerMenu();
    }
    else
    {
        menu = e.target.parentNode; // sinon on change son style pour l'afficher
        submenu.style.display = "flex";
    }
}

function fermerMenu()
{
    // à l'appel de la fonction
    // on récupère tous les sous-menus
    listeSubmenus = document.getElementsByClassName("submenu");

    // pour changer leur display => none
    for(let i=0; i<listeMenus.length; i++)
    {
        listeSubmenus[i].style.display = "none";
    }
}