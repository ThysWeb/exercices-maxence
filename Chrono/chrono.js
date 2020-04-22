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
var ms    = 0+0;
var s     = 0+0;
var m     = 0+0;

// ----------- affichage 0 -------------
var zs = "0";
var zm = "0";

// on place des eventListenner
btnStart.addEventListener("click", function(){startChrono()});
btnStop.addEventListener("click", function(){stopChrono()});
btnRestart.addEventListener("click", function(){restartChrono()});

// fonction start déclenchée lors du click sur le btnStart
function startChrono()
{
    intervalle = setInterval(verifChrono, 10)
    btnStart.disabled = true;
    btnStart.style.border = "solid 1px rgb(173,255,47)";
    btnStop.disabled = false;
    btnStop.style.border = "solid 1px rgb(0,0,0)";
}

function stopChrono()
{
    clearInterval(intervalle);
    btnStart.disabled = false;
    btnStart.style.border = "solid 1px rgb(0,0,0)";
    btnStop.disabled = true;
    btnStop.style.border = "solid 1px rgb(255,0,0)";
}

function verifChrono()
{
    if(s<9)
    {
        zs = "0";
    }
    else
    {
        zm = "";
    }

    if(m<9)
    {
        zm = "0";
    }
    else
    {
        zm = "";
    }

    if (ms > 100)
    {
        if(point.style.color == "var(--text-color)")
        {
            point.style.color = "var(--body-background-color)";
        }
        else
        {
            point.style.color = "var(--text-color)";
        }

        // si on atteint 100ms ms repart à 1 et on incrémente les secondes de 1
        ms = 1;
        s ++;
    }
    else if(s > 59)
    {
        // pareil pour les secondes
        s = 1;
        m ++;
    }
    else if (m > 59)
    {
        stopChrono(); // à 59:59:100 on arrête le chrono
    }

    // on incrément les ms
    ms++;

    // on remplace les valeurs dans le HTML
    msActuel.innerHTML = ms;
    sActuel.innerHTML = zs+s;
    mActuel.innerHTML = zm+m;
}