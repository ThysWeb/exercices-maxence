// on récupère la div du chronomètre
var tempsActuel = document.getElementById("chrono");

// on récupère les boutons
var btnStart   =  document.getElementById("start");
var btnStop    =  document.getElementById("stop");
var btnRestart =  document.getElementById("restart");

// initialisation les variables
var temps = 0;
var ms    = 0;
var s     = 0;
var m     = 0;

// on place des eventListenner
btnStart.addEventListener("click", function(){startChrono()});
btnStop.addEventListener("click", function(){stopChrono()});
btnRestart.addEventListener("click", function(){restartChrono()});

// fonction start déclenchée lors du click sur le btnStart
function start()
{
    t = 
}