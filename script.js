var btHettegenserRed = document.getElementById("btHettegenserRed");
var btHettegenserBlack = document.getElementById("btHettegenserBlack");
var btHettegenserBlue = document.getElementById("btHettegenserBlue")

var bildeHettegenser = document.getElementById("bildeHettegenser")

btHettegenserRed.onclick = function(){
    console.log("Endre hettegenser -Rød-");
    bildeHettegenser.src = "bilder/merch/red_hood.png"
}

btHettegenserBlue.onclick = function(){
    console.log("Endre hettegenser -Blå-");
    bildeHettegenser.src = "bilder/merch/hoodie_voidv3.png"
}

btHettegenserBlack.onclick = function(){
    console.log("Endre hettegenser -Svart-");
    bildeHettegenser.src = "bilder/merch/svart_hood.png"
}

var btWhiteT = document.getElementById("btWhiteT");
var btRedT = document.getElementById("btRedT");
var btBlueT = document.getElementById("btBlueT")

var bildeT = document.getElementById("bildeT")

btWhiteT.onclick = function(){
    console.log("Endre t-skjorte -Hvit-");
    bildeT.src = "bilder/merch/white_t.png"
}

btRedT.onclick = function(){
    console.log("Endre t-skjort -Rød-");
    bildeT.src = "bilder/merch/red_t.png"
}

btBlueT.onclick = function(){
    console.log("Endre t-skjorte -Blå-");
    bildeT.src = "bilder/merch/blue_t.png"
}