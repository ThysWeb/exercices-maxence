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
 var phrase = prompt("Entrez une phrase : ");
 var lettre = prompt("Entrez une lettre à rechercher dans la phrase : ");
 var compteur = nbLettre(phrase, lettre);

 document.write("<br> Le nombre de " + lettre + " dans la phrase est de : " + compteur);