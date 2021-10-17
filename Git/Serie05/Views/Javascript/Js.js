var microsecondes = 0;
var secondes = 0;
var minutes = 0;
var heures = 0;
var tick;

/* function pour l'exercice 1
    On va rechercher les elements qui seront modifier.
    On verifie sur le P a deja la casse.
    On rajouter ou retire la classe.
    On modifie la valeur du bouton.
*/

function changerTexte() {
    var paragraphe = document.getElementById("texte");
    var button = document.getElementById("boutonChangerTexte");

    if (paragraphe.classList.contains("styleUn")) {
        button.value = "Changer le Texte";
        paragraphe.classList.remove("styleUn");
    } else {
        button.value = "Revenir en arrière";
        paragraphe.classList.add("styleUn");
    }
}



function incrementer(){
    microsecondes++;
    if (microsecondes >= 100) {
        microsecondes = 0;
        secondes++;
    }
    if(secondes >= 60){
        secondes = 0;
        minutes++;
    }
    if(minutes >= 60){
        minutes = 0;
        heures++;
    }
    var champChrono = document.getElementById("chrono");
    champChrono.innerHTML = ""+ heures + "h "+ minutes + ": " + secondes + "sec " + microsecondes + "ms";
    //setInterval(incrementer(),100);
}

function startChrono(){
    var button = document.getElementById("start");
    button.setAttribute("disabled","true");
    start();
}
function start(){
    incrementer();
    autoIncrementer();
}
function autoIncrementer(){
    tick = setTimeout(startChrono,1);
}
function stopChrono(){
    var button = document.getElementById("start");
    button.removeAttribute("disabled");
    clearInterval(tick);
}

function resetChrono(){
    clearInterval(tick);
    var time = document.getElementById("chrono");
    var button = document.getElementById("start");
    time.innerHTML = "00:00:00:00";
    button.removeAttribute("disabled");
    microsecondes = 0;
    secondes = 0;
    minutes = 0;
    heures = 0;
}