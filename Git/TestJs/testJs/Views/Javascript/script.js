/*
1] Afficher la date du jour dans une alert

alert("Bienvenue sur mon site");
var today = new Date();
alert(today);


2] Calculer le prix avec tva.


var prixlivrehtc = prompt("Veuillez indiquer le prix unitaire d'un livre.");
var quantite = prompt("Veuillez indiquer la quantité.");
var total = (prixlivrehtc * quantite) * 1.21;
alert("Voici le prix total : " + total);*/

function afficherDate() {
    var day = Date.prototype.getDay()
    var dayChiffre = Date.prototype.getDate();
    var month = Date.prototype.month();
    document.writeln("" + day + "/" + dayChiffre + "/" + month);
    afficherHeure();
}
function afficherHeure(){
    var hours = Date.prototype.getHours();
    var minutes = Date.prototype.getMinutes();
    var seconds = Date.prototype.getSeconds();
    var tout = hours + "h" + minutes + ":" + seconds
    document.title = tout;
    setInterval(afficherHeure(),1000);
}


