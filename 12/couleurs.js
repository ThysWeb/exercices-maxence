// on récupère le body
var bodyElement  =  document.getElementById("idBody");

// on récupère tous les boutons en appelant directement la fonction si l'évènement se produit
document.getElementById("btnRouge").addEventListener("click", function(){changerCouleur(255,0,0)});
document.getElementById("btnVert").addEventListener("click", function(){changerCouleur(0,0,255)});
document.getElementById("btnBleu").addEventListener("click", function(){changerCouleur(0,255,0)});

// on récupère tous les inputs
var inputs = document.querySelectorAll("input");

// on ajoute un écouteur à chaque input -> qui appelera la fonction
for(let i=0; i<3; i++)
{
    inputs[i].addEventListener("change", function(){changerCouleur(parseInt(inputs[0].value), parseInt(inputs[1].value), parseInt(inputs[3].value))});
}

// fonction qui changera la couleur du body
function changerCouleur(rouge, vert, bleu)
{
    // on modifie le cookie en utilisant la fonction createCookie
    createCookie("couleurActuelle", "rgb("+rouge+", "+vert+", "+bleu+")", 3);

    // on associe la couleur entrée en paramètre au body 
    bodyElement.style.backgroundColor = "rgb("+rouge+", "+vert+", "+bleu+")";

    // test
    alert("la couleur est: "+readCookie("couleurActuelle"));
}