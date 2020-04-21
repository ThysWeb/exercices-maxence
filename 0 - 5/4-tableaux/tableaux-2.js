/** Retourne la saisie de l'utilisateur
 *  uniquement si c'est un integer
 * 
 *  return      @integer    saisie
 */
function GetInteger(mode) 
{
    do 
    {
        var saisie = prompt(question)
    } while(Number.isInteger(saisie) != true);

    return saisie;
}

/** Retourne un tableau ayant pour taille
 *  la saisie de l'utilisateur
 * 
 */
function InitTab(nbPostes)
{
    return new Array(parseInt(nbPostes));
}

/** Remplie un tableau avec les saisies
 *  de l'utilisateur
 * 
 * @param   {array}     tableau           tableau vide
 * 
 * @return  {array}     tableauPlein      tableau rempli des saisies
 */
function SaisieTab(tableau)
{
    for(let i=0; i<parseInt(tableau.length); i++)
    {
        var saisie = GetInteger(1, i);
        tableau[i] = parseInt(saisie);
    }

    return tableau;
}

/** Affiche les valeurs de chacun des i
 *  du tableau entré en paramètre
 * 
 * @param {array} tableau 
 */
function AfficheTab(tableau)
{
    // tableau.forEach(element => document.write(element+"<br>"));

    for (let i=0; i<parseInt(tableau.length); i++)
    {
        document.write("Poste n°"+(i + 1)+": "+tableau[i]+"<br>");
    }
}

/** Retourne la valeur de i du tableau, 
 *  i saisi par l'utilisateur
 * 
 * @param {*} index 
 * @param {*} tableau 
 */
function RechercheTab(index, tableau)
{
    return tableau[index];
}

/** Affiche le maximum et la moyenne
 *  des postes
 * 
 * 
 * @param {*} tableau 
 */
function InfoTab(tableau)
{
    var max = tableau[0];
    var somme = 0;

    for (let i=0; i<parseInt(tableau.length); i++)
    {
        if (tab[i] > max)
        {
            max = parseInt(tab[i]);
            compteur++;
        }

        somme = somme + tableau[i];

        document.write("Max: "+max+" et moyenne: "+somme/(parseInt(tableau.length))+".");
    }
}

// ----  -  ----
// --  TESTS  --
// ----  -  ----

// GetInteger :
// var saisie = GetInteger();
// document.write(saisie);

// InitTab :
// var tableau = InitTab(saisie);
// document.write(tableau);

// SaisieTab :
var tableauVide = new Array(3);
var tableauPlein = SaisieTab(tableauVide);

// document.write(tableauPlein);

// AfficheTab :
AfficheTab(tableauPlein);