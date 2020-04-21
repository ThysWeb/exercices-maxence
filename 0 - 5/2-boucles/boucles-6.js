var saisie = prompt("Entrez un entier (entrez 0 pour arrêter la saisie)");

// min prend la première valeur
var min = parseInt(saisie);

// max prend la première valeur
var max = parseInt(saisie);

// si valeur saisie=0 on arrête le programme
if (saisie != 0) {
    while (saisie != 0) {

        var saisie = prompt("Entrez un entier (entrez 0 pour arrêter la saisie)");
        if (saisie < min && saisie !=0) {
            min = saisie;
            console.log(min);
        }
        else if (saisie > max && saisie !=0) {
            max = saisie;
            console.log(max);
        }
    }

    alert("min: " + min + " max: " + max);

}
else {
    alert("min: " + min + " max: " + max);
}
