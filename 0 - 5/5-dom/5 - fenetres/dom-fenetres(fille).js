var parent = window.opener;

// fermer la fenêtre parent
document.getElementById("windowCloseParent").addEventListener("click", function()
{
    parent.close();
});

// fermer la fenêtre fille
document.getElementById("windowCloseChild").addEventListener("click", function()
{
    window.close();
});