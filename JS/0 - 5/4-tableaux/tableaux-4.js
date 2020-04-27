function Insertion(tableau)
{
    tab=new Array;

    for (let i=0; i<tableau.length; i++)
    {
        posMin = i;
        for (let j=i+1; i<tableau.length; i++)
        {
            if (tab[j]>tab[posMin])
            {
                posMin = j;
            }
        }
    }

    return tab;

} 

var tableau = [1, 3, 5, 6, 7, 9];

tableauTrie=Insertion(tableau);

console.log(tableauTrie);
