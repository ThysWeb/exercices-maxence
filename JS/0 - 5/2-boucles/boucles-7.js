var n = prompt("Entrez N, le nombre de multiples à calculer: ");
var x = prompt("Entrez X, le nombre entier auquel on va calculer les multiples: ");
for (i = 0; i < n; i++) 
{
     document.write((parseInt(i) + 1) + " x " + x + " = " + (parseInt(i) + 1) * x + "<br>"); 
}