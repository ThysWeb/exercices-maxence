function produit(x, y)
{
    return x*y;
}

var x = prompt("entrer un nombre");
x = parseInt(x);
var y = prompt("entrer un nombre");
y = parseInt(y);

document.write("Le produit de " + x + " et " + y + " est égal à " + produit(x,y));

/* image */

function afficheImg(image) {
    document.write ("img src='" + image + "' alt = ")
}

afficheImg("image.jpg");
