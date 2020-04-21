// déclaration des variables
var ampoule = document.getElementById("ampoule");
var allume = 0;

// affichage de l'ampoule + évènement 'click'
ampoule.innerHTML="<img src='../../rsc/ampoule-eteinte.png' alt=''>"
ampoule.addEventListener("click", boutonAmpoule());


// déclaration fonction du bouton de l'ampoule
function boutonAmpoule()
{
    if (light == 0)
    {
        ampoule.innerHTML = "<img src='../../rsc/ampoule-allumee.png' alt=''>";
        allume = 1;
    }
    else
    {
        ampoule.innerHTML = "<img src='../../rsc/ampoule-eteinte.png' alt=''>";
        allume = 0;
    }
}