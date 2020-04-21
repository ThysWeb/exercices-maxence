var dateNaissance=prompt("Veuillez saisir votre année de naissance");

var calcAge=(new Date()).getFullYear()-dateNaissance;

if(calcAge>17)
{
    alert("Vous avez "+calcAge+" ans.Vous êtes majeur");
}
else
{
    alert("Vous avez "+calcAge+" ans.Vous êtes mineur");
}
