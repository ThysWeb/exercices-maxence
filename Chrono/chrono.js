// on récupère les div du chronomètre
var msActuel = document.getElementById("msActuel");
var sActuel = document.getElementById("sActuel");
var mActuel = document.getElementById("mActuel");


// on récupère les boutons
var btnStart   =  document.getElementById("start");
var btnStop    =  document.getElementById("stop");
var btnRestart =  document.getElementById("restart");

// ----------- point clignote -----------
var point = document.getElementById("points");

// initialisation les variables
var ms    = 0;
var s     = 0;
var m     = 0;

// on place des eventListenner
btnStart.addEventListener("click", function(){startChrono()});
btnStop.addEventListener("click", function(){stopChrono()});
btnRestart.addEventListener("click", function(){restartChrono()});

// fonction start déclenchée lors du click sur le btnStart
function startChrono()
{
    intervalle = setInterval(verifChrono, 10)
    btnStart.disabled = true;
    btnStop.disabled = false;
}

function stopChrono()
{
    clearInterval(intervalle);
    btnStart.disabled = false;
    btnStop.disabled = true;
}

function verifChrono()
{
    if (ms > 999)
    {
        if(point.style.display == "none")
        {
            point.style.display = "block";
        }
        else
        {
            point.style.display = "none";
        }
        // si on atteint 1000ms
        // ms repart à 1 et on incrémente les secondes de 1
        ms = 1;
        s ++;
    }
    else if (s > 59)
    {
        // pareil pour les secondes
        s = 1;
        m ++;
    }
    else if (m > 59)
    {
        stopChrono();        
    }

    // on remplace les valeurs dans le HTML
    msActuel.innerHTML = ms;
    sActuel.innerHTML = s;
    mActuel.innerHTML = m;
}