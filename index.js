var dropdown = "dropdown";
var shown = "visible";
var hidden = "hidden";
function show() {
    document.getElementById(dropdown).style.visibility=shown;
}

function hide() {
    document.getElementById(dropdown).style.visibility=hidden;
}

var current;

function swatch() {
    current = document.getElementById("headlogo").src;
if (current.includes("header-logo-dash.svg") === true){
    document.getElementById("headlogo").src = "header-logo-nodash.svg";
    current = document.getElementById("headlogo").src;
} else {
    document.getElementById("headlogo").src = "header-logo-dash.svg";
    current = document.getElementById("headlogo").src;
}
}

