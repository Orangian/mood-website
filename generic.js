var dropdown = "dropdown";
var shown = "visible";
var hidden = "hidden";
function show() {
    document.getElementById(dropdown).style.visibility=shown;
}

function hide() {
    document.getElementById(dropdown).style.visibility=hidden;
}

var current = document.getElementById("headlogo").src;

function swatch() {
if (current.includes("header-logo-dash.svg") === true){
    document.getElementById("headlogo").src = "header-logo-nodash.svg";
    current = document.getElementById("headlogo").src;
} else {
    document.getElementById("headlogo").src = "header-logo-dash.svg";
    current = document.getElementById("headlogo").src;
}
}



const string = "foo";
const substring = "oo";

console.log(string.includes(substring)); // true