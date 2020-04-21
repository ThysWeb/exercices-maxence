function nbPremier(nb)
{
    for (let i=2; i<nb; i++)
    {
        if (nb%i==0)
        {
            return false;
        }
    }
    return true;
}

var nombre = prompt("Entrez un nombre");
if ( nbPremier(parseInt(nombre)) )
    document.write("Ce nombre est premier");
else
    document.write("Ce nombre n'est pas premier");