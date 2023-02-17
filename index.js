var current;

function swatch() {
    var element = document.getElementById("headlogo");
    var current = getComputedStyle(element, "").getPropertyValue('--head');
    
    if(document.getElementById("formal").checked) {
        formalswatch();
    } else if (document.getElementById("informal").checked) {
        true
    } else if (document.getElementById("archaic").checked)
        archaicswatch();
}

function formalswatch() {
    var element = document.getElementById("headlogo");
    var current = getComputedStyle(element, "").getPropertyValue('--head');
    if (current.includes("header-logo-nodash") === true) {
    element.style.setProperty('--head', "url(https://raw.githubusercontent.com/Orangian/mood-website/master/header-logo-dash.svg)");
}   else if (current.includes("header-logo-dash") === true) {
    element.style.setProperty('--head', "url(https://raw.githubusercontent.com/Orangian/mood-website/master/header-logo-nodash.svg)");
}
}

function archaicswatch() {
    var element = document.getElementById("headlogo");
    var current = getComputedStyle(element, "").getPropertyValue('--head');
    if (current.includes("undashed-sketched") === true) {
    element.style.setProperty('--head', "url(https://raw.githubusercontent.com/Orangian/mood-website/master/logo-dashed-sketched-black-text.svg)");
}   else if (current.includes("dashed-sketched") === true) {
    element.style.setProperty('--head', "url(https://raw.githubusercontent.com/Orangian/mood-website/master/logo-undashed-sketched-black-text.svg)");
}
}

function formaldefault() {
    
}