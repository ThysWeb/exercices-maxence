/** Créé un tableau de prénoms
 * 
 */
function CreeTableau()
{
    tableauPrenom = new Array;
    for (let i=0; i<5; i++)
    {
        tableauPrenom[i]="toto"+i;
    }
    return tableauPrenom;
}

/** Vérifie si un prénom fait partie
 *  du tableau donné en paramètre ou non
 * 
 * @param {*} tableauPrenom 
 */
function TrouvePositionPrenom(tableauPrenom)
{
    do 
    {
        var saisie = prompt("Saisir un prénom à chercher dans la liste: ");

    } while (pos == -1); // si le prénom fait partie de la liste, on retourne sa position
                         // indexOf retourne -1 si il ne trouve pas d'équivalence
    return pos;
}

/** Retire le prénom d'une case donnée
 * 
 * @param {*} tableauPrenom 
 * @param {*} pos 
 */
function RetirePrenom(tableauPrenom, pos)
{
    tab1 = new Array;
    tab2 = new Array;

    tab1 = tableauPrenom.slice(0, pos);
    tab2 = tableauPrenom.slice(pos+1, parseInt(tableauPrenom.length));

    return tab1.concat(tab2);
}

function AjouteVide(tableauPrenom)
{
    tableauPrenom[tableauPrenom.length+1] = "";
    return tableauPrenom;
}



// TESTS
// RetirePrenom:
// tableauPrenom = CreeTableau();
// console.log(tableauPrenom);

// pos = TrouvePositionPrenom(tableauPrenom);

// nouveauTableau1 = RetirePrenom(tableauPrenom, pos);

// console.log(nouveauTableau1);

// console.log(AjouteVide(nouveauTableau1));
