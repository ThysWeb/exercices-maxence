function nbVoyelles(string)
{
    var nb = 0; // on intialise le compteur de voyelles
    var tab = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y']; // on crée un tableau avec toutes les voyelles - minuscule et majuscule

    for (let i = 0; i < string.length; i++) { // on crée une première boucle qui part de 0 au nombre de caractères de la phrase

        for (let j = 0; j < 12; j++) { // puis on crée une seconde boucle qui part de 0 au nombre de voyelles
            if (string[i] == tab[j]) { // finalement on compare chaques lettres de la première boucle aux différentes voyelles de la seconde boucle
                nb++;
            }
        }
    }

    return nb;
    
}
