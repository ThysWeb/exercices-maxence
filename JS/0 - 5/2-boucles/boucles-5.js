var saisie = prompt("Entrez un entier (entrez 0 pour arrêter la saisie)");
var som = parseInt(saisie);
var compteur = 0;


while (parseInt(saisie != 0)) {

    var saisie = prompt("Entrez un entier (entrez 0 pour arrêter la saisie)");

    // on ajoute la somme à la somme précédente
    som = som+parseInt(saisie);

    // on incrémente le compteur pour calculer la moyenne
    compteur++;
}

alert("Moyenne:" + (som / compteur) + " !");