function tableMultiplication(nb) {

    for (let i = 1; i<10; i++) {
        resultat = nb * i;
        document.write("<br>" + nb + "x" + i + "=" + resultat);
    }
}

tableMultiplication(9);