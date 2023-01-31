var dropdown = "dropdown";
var shown = "visible";
var hidden = "hidden";
function show() {
    document.getElementById(dropdown).style.visibility=shown;
}

function hide() {
    document.getElementById(dropdown).style.visibility=hidden;
}


function swatch() {
if (document.getElementById("headlogolink").src == "header-logo-dash.svg"){
    document.getElementById("headlogolink").src = "header-logo-nodash.svg";
} else {
    document.getElementById("headlogolink").src = "header-logo-dash.svg";
}
}