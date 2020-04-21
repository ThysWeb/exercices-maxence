// on récupère le body
var body  =  document.getElementsByTagName("body")[0];

// on récupère tous les boutons en appelant directement la fonction si l'évènement se produit
document.getElementById("btnRouge").addEventListener("click", function(){changerCouleur(255,0,0)});
document.getElementById("btnVert").addEventListener("click", function(){changerCouleur(0,255,0)});
document.getElementById("btnVert").addEventListener("click", function(){changerCouleur(0,0,255)});


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