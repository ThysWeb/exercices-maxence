// Initialisation des variables
var capitale = 0;
var taux = 0;
var duree = 0;
var total = 0;
var mensualite = 0;

// On initialise les erreurs dans un tableau à double dimensions
var erreurs = {
    "capital": 0,
    "taux": 0,
    "duree": 0,
    "mensualite": 0,
    "total": 0
}

// On récupère chaque input dans un tableau
var listeInput = document.getElementsByTagName('input');

// On leur ajoute un listener afin de vérifier la saisie à chacun
for (i = 0; i < listeInput.length; i++)
{
    listeInput[i].addEventListener("input", verifSaisie);
    listeInput[i].addEventListener("change", verifSaisie);
    
}

// On récupère les boutons
var listeBtns = document.getElementsByTagName("bouton");

// On leur ajoute également un listener pour effectuer le calcul / reset les champs lors d'un clic
listeBtns[0].addEventListener("click", function(){Calculer(listeInput[0], listeInput[1], listeInput[2])});
listeBtns[1].addEventListener("click", function(){restartChamps()});



/**
 * On vérifie si le champ donnée en paramètre
 * est valide
 * 
 * @param {*} e 
 */
function verifSaisie(e) {
    // on recupere l'input sur lequel faire la verification
    var monInput = e.target;
    //on recupere les elements correspondant à l'input
    var message = (monInput.parentNode).getElementsByClassName('message')[0];

    if (monInput.value == '') {
        // si le champ est vide, on affiche rien
        message.innerHTML = "champ manquant";
        erreurs[monInput.name]=0;
    } else if (!monInput.checkValidity()) {
        // force le test du pattern sur l'input
        message.innerHTML = "Format incorrect";
        erreurs[monInput.name]=0;
    } else
    {
        message.innerHTML = "";
        erreurs[monInput.name]=1;
    }
    validation();
}

// on vérifie si les saisies de l'utilisateur sont correctes
// si non, on ne permet pas de cliquer sur le bouton Calculer
function validation() {
    document.getElementById('submit').disabled = false;
    for (var key in erreurs) {
        if (erreurs[key]==0)
        document.getElementById('submit').disabled =true;
    }
    Calculer(erreurs["capital"], erreurs["taux"], erreurs["duree"]);
}

/**
 * calcul le cout total + mensualités
 * grâce aux données saisies par
 * l'utilisateur
 */
function Calculer(capital, taux, nbMois)
{
    Mensulalite = (capital * taux/12)/(1 - Math.pow(1 + taux/12, -nbMois))
}

// lors de l'appel de cette fonction on reset le champ de chaque input
function restartChamps()
{
    for(let i=0; i<listeInput.length; i++)
    {
        listeInput[i].value = "";
    }
}