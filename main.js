document.addEventListener("DOMContentLoaded", function() {
    var navLinks = document.getElementById("navLinks");

    window.hideMenu = function() {  //ova dodatkom window. je ova funkcija postala globalna te mozemo da je koristimo van ovog fajla
        if (navLinks) {
            navLinks.style.right = "-200px";
        }
    };

    window.openMenu = function() {
        if (navLinks) {
            navLinks.style.right = "0";
        }
    };
});
