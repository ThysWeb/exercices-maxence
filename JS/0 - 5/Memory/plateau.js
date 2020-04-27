// ----------- VARIABLES
// On récupère toutes les div "carte"
const cartes = document.querySelectorAll('.carte');

// La carte a-t-elle été retournée ?
let carteRetournee = false;

// Vrai si 2 cartes sont retournées
// et bloque le jeu
let bloqueJeu = false;

// Première et deuxième carte cliquée
let premiereCarte, secondeCarte;

/** retourneCarte
 * 
 * 
 */
function retourneCarte() {
    if (bloqueJeu) return; // si le plateau est bloqué

    if (this === premiereCarte) return; // si la carte cliquée est la même


    this.classList.add('flip'); // prend la valeur 'retournee'

    if (!carteRetournee) {
        carteRetournee = true;
        premiereCarte = this;

        return;
    }
    else {
        secondeCarte = this;
        compareCartes();
    }
}

function compareCartes() {
    let correspond = premiereCarte.dataset.img === secondeCarte.dataset.img;

    correspond ? bloqueCartes() : reinitialiseCartes();
}

function bloqueCartes() {
    premiereCarte.removeEventListener('click', retourneCarte);
    secondeCarte.removeEventListener('click', retourneCarte);

    reinitialiseJeu();
}

function reinitialiseCartes() {
    bloqueJeu = true;

    // délai avant que les cartes ne se retournent
    // faces cachées
    setTimeout(() => {
        premiereCarte.classList.remove('flip');
        secondeCarte.classList.remove('flip');

        reinitialiseJeu();
    }, 1500);
}

function reinitialiseJeu() {
    [carteRetournee, bloqueJeu] = [false, false];
    [premiereCarte, secondeCarte] = [null, null];
}

// ---------- EVENEMENTS
// mélange les cartes
function shuffle() {
    cartes.forEach(carte => {
        let randomPos = Math.floor(Math.random() * 12);
        carte.style.order = randomPos;
    }
    );
};

// on ajoute a chaque div carte un listener -> click
cartes.forEach(carte => carte.addEventListener('click', retourneCarte));