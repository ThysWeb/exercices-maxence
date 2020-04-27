function tableMultiplication(nb) {

    for (let i = 1; i<10; i++) {
        resultat = nb * i;
        document.write("<br>" + nb + "x" + i + "=" + resultat);
    }
}

function somMoy(nb, somme, compteur)
{
while (parseInt(nb) != 0)
{
    var nb = prompt("Entrez des nombres entiers (0 arretera la saisie");
    somme = somme + parseInt(nb);
    compteur++;
}

alert("Somme = " + somme + "; Moyenne = " + somme/compteur + " ;");
}

function nbLettre(phrase, lettre) {
    
    var compteur = 0;
    for (let i=0; i<phrase.length; i++)
    {
        if (phrase[i] == lettre)
        {
            compteur++;
        }
    }
    return compteur;
}

function nbVoyelles(mot)
{
    var mot = prompt('Donnez une phrase');
    return mot.length = mot.replace(/[aeiouyàéèîï]+/g, '').length;
}

var choix = prompt("Entrez votre option");

switch (choix)
{
    case "1" :
        var nb = prompt("Choisissez un nombre : ");
        tableMultiplication(parseInt(nb));
        break;

    case "2" :
        var nb = prompt("Entrez des nombres entiers (0 arretera la saisie)");
        var somme = parseInt(nb);
        var compteur = 0;
        somMoy(nb, somme, compteur);
        break;

    case "3" :
        var phrase = prompt("Entrez une phrase : ");
        var lettre = prompt("Entrez une lettre à rechercher dans la phrase : ");
        var compteur = nbLettre(phrase, lettre);
        document.write("<br> Le nombre de " + lettre + " dans la phrase est de : " + compteur);
        break;

}