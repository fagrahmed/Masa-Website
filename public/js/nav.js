// SCROLL LISTENER

window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        document.getElementById("nav-bar").classList.add("bg-dark");
        document.getElementById("nav-bar").classList.remove("bg-transparent");
    } else {
        document.getElementById("nav-bar").classList.add("bg-transparent");
        document.getElementById("nav-bar").classList.remove("bg-dark");
    }
});

// HAMBURGER

const burger = document.querySelector('.hamburger');
const nav = document.querySelector('.nav-bar');
const overlay = document.querySelector('.nav-open__overlay');


document.addEventListener("click", (evt) => {
    let targetElement = evt.target; // clicked element
    if (!nav.classList.contains('nav-active')) {
        do {
            if (targetElement == burger) {
                nav.classList.toggle('nav-active');
                overlay.classList.toggle('nav-open__overlay-active');
                return;
            }
            // Go up the DOM
            targetElement = targetElement.parentNode;
        } while (targetElement);
        // This is a click outside.
    } else {
        do {
            if (targetElement == nav) {
                // Do nothing
                return;
            }
            // Go up the DOM
            targetElement = targetElement.parentNode;
        } while (targetElement);

        // This is a click outside.
        nav.classList.toggle('nav-active');
        overlay.classList.toggle('nav-open__overlay-active');
    }
});