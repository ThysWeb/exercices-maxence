var part = 0; // max 50%
var situation = prompt("Célibataire ou marié ? (c/m) ");
var enfant = prompt("Nombre d'enfant(s) : ");
var salaire = prompt("Salaire mensuel : ");
//si salaire < 1200, -10%

// pour chaque enfant, on ajoute 10% de partipation
for (let nbE = 0; nbE < enfant; nbE++) {
    part += 10;
}

// selon si on est célibataire ou marié
if (situation == "c") {
    part += 20
}
else {
    part += 25
}

// si le salaire est faible, on retire 10% de partipation
if (salaire < 1200) {
    part -= 10;
}

// si la participation dépasse 50%, on change la valeur à 50
if (part > 50) {
    part = 50;
}

alert("La participation à laquelle vous avez le droit est de : "+part+"%.");