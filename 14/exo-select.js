// on récupère le select
var menuDeroulant = document.getElementById("menu-deroulant");

// on récupère les options
var opts = document.querySelectorAll("option");

for(let i=0; i<2; i++)
{
    // on ajoute un addEventListenner
    opts[i].addEventListener("click",function(){toggle(1000, function())})
}