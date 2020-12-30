"use strict";
const newSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

    //Toggle Nav
    burger.addEventListener("click", () => {
        nav.classList.toggle("nav-active");
        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = "";
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
                console.log(index / 7); // give nice delay before show up for each link
            }
        });

        // burger animation
        burger.classList.toggle("toggle-burger");
    });
};
newSlide();

// navbar slide out
const slideOut = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");

    burger.addEventListener("click", () => {
        if (document.querySelector(".nav-active")) {
            nav.classList.remove("nav-slide-out");
        } else {
            nav.classList.toggle("nav-slide-out");
        }
    });
};
slideOut();
