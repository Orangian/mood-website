var autoplaying = 1;
var img = ["url(carp.jpg)", "url(German-Logging.webp)", "url(xda80211.jpg)", "url(Cincinnati-Subway.jpg)", "url(iceland-river.jpg)"];
var divs = ["scrollgalleryfarleft", "scrollgalleryleft", "scrollgallerymain", "scrollgalleryright", "scrollgalleryfarright"];
var positions = ["-50%", "6.25%", "37.5%", "68.75%", "150%"];
var main = 2;
var left = 0;
var right = 4;
var laufen = 0;
var direction = "doktorurbaniakrip";


function shiftleft(){
    if (laufen === 0){
        direction = "left";
        laufen = 1;
        positions.unshift(positions.pop());
        shift();
        laufen = 0;
    }
}

function shiftright(){
    if (laufen === 0){
        direction = "right";
        laufen = 1;
        positions.push(positions.shift());
        shift();
        laufen = 0;
    }
}

function shift(){
 
        document.getElementById(divs[main].concat("opacity")).style.opacity=0;
        if (direction == "left") {
            if (main < 4) {
                main++;
            } else {
                main=0;
            }    
        } else {
            if (main > 0) {
                main--;
            } else {
                main=4;
            }
        }

        document.getElementById(divs[main].concat("opacity")).style.opacity=1;
        document.documentElement.style.setProperty("--img", img[main]);
        for (let i = 0; i < divs.length; i++) {
            document.getElementById(divs[i]).style.left=positions[i];
        }
        setTimeout(() => {laufen = 0}, 2000);
}