// on récupère le body
var body  =  document.getElementsByTagName("body")[0];

// on récupère tous les boutons
var btnRouge =  document.getElementById("btnRouge");
var btnVert  =  document.getElementById("btnVert");
var btnBleu  =  document.getElementById("btnBleu");


// on récupère tous les inputs
var inputs = document.querySelectorAll("input");

// on ajoute un écouteur à chaque input -> qui appelera la fonction
for(let i=0; i<3; i++)
{
    inputs[i].addEventListener("change", function(){changerCouleur(rouge, vert, bleu)});
}

function changerCouleur(rouge, vert, bleu)
{
    body.style.backgroundColor = "rgb("+rouge+", "+vert+", "+bleu+")";
}