// déclaration de la variable fille
var fille;

// nouvelle fenêtre
document.getElementById("windowNew").addEventListener("click", function()
{
    fille = window.open('dom-fenetres(fille).html', '', 200, 200);
});

// fermer fenêtre
document.getElementById("windowClose").addEventListener("click", function()
{
    fille.close;
});

// déplacer fenêtre
document.getElementById("windowMove").addEventListener("click", function()
{
    fille.moveTo(100, 100);
    fille.focus();
});

// changer taille fenêtre
document.getElementById("windowResize").addEventListener("click", function()
{
    fille.resizeTo(100,150);
    fille.focus();
});
