// resources/js/app.js
import './bootstrap';  // If you have bootstrap

document.addEventListener("DOMContentLoaded", function () {
    const mobileToggle = document.querySelector(".mobile-menu-toggle");
    const menu = document.querySelector(".menu");

    mobileToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});
