
teller = 0 // aangemaakt op het moment dat je op pagina2.php zit
function nieuwPlaatje() { // functie nieuwPlaatje wordt pas uitgevoerd op het moment dat je alertbox GOED zegt
    teller++;
}
//wanneer je op de knop stoppen drukt, dan function weergevenScore uitvoeren

function weergevenScore() {
    document.getElementById('idVanScore').innerHTML = teller;
}