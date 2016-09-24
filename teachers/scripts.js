//nav bar function
function myFunction() {
    var x = document.getElementById("responsiveNav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}

//footer functions
function footerFunction1() {
    var x = document.getElementById("responsive-footer-nav-list-1");
    if (x.className === "footer-nav-list-1") {
        x.className += " responsive";
    } else {
        x.className = "footer-nav-list-1";
    }
}

function footerFunction2() {
    var x = document.getElementById("responsive-footer-nav-list-2");
    if (x.className === "footer-nav-list-2") {
        x.className += " responsive";
    } else {
        x.className = "footer-nav-list-2";
    }
}

function footerFunction3() {
    var x = document.getElementById("responsive-footer-nav-list-3");
    if (x.className === "footer-nav-list-3") {
        x.className += " responsive";
    } else {
        x.className = "footer-nav-list-3";
    }
}
