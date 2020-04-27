function init()
{
    // recupere la div de classe "plateau"
    plateau = document.getElementsByClassName("plateau")[0];

    for (let i=0; i<11; i++)
    {
        // cree 11 lignes
        ligne = document.createElement("div"); 
        for (let j=0; j<11; j++)
        {
            // cree 11 cases par ligne
            uneCase = document.createElement("div"); 
            // ajout class "case"
            uneCase.setAttribute("class","case"); 
            if (i==0)
            {
                // ajoute couleur à la premiere ligne
                uneCase.style.backgroundColor = "grey"; 

                if (j!=0)
                {
                    // ajoute lettre à partir de [1] en ligne
                    uneCase.innerHTML =String.fromCharCode(j + 64); 
                }
            }
            if (j==0)
            {
                // ajoute couleur à la premiere colonne
                uneCase.style.backgroundColor = "grey";
                if (i!=0)
                {
                    // ajoute chiffres à partir de [1] en colonne
                    uneCase.innerHTML = i;
                }
            }
            ligne.appendChild(uneCase);
        }
        plateau.appendChild(ligne);
    }
}

function AfficherTableau(tab)
{
    // on recupere toutes les cases
    cases = document.getElementsByClassName("case"); 
    for (let i=1; i<11; i++)
    {
        for (let j=1; j<11; j++)
        {
            // on assigne aux cases[A1, A2, A3 ... J10] <- tab[0][0], tab[0][1] ... tab[10][10]
            cases[i*11+j].innerHTML = tab[i-1][j-1]
        }
    }
}

init();

//************** TEST
var plateau=[[0,0,0,0,0,0,0,0,0,0],
[0,5,0,0,0,0,2,2,2,2],
[0,5,0,1,0,0,0,0,0,0],
[0,0,0,1,0,0,0,0,0,0],
[0,0,0,1,0,0,0,0,0,0],
[0,0,0,1,0,0,0,0,0,0],
[0,0,0,1,0,0,0,0,0,0],
[0,0,0,0,0,0,0,3,0,0],
[4,4,4,0,0,0,0,3,0,0],
[0,0,0,0,0,0,0,3,0,0]];

AfficherTableau(plateau);




