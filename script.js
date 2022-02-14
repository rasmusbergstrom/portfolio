//References 
let mainNav = document.querySelector(".header-mob-menu");
let navToggle = document.querySelector('#js-navbar-toggle');

console.log(navToggle);
navToggle.addEventListener('click', function() {
    navToggle.classList.toggle("exit");
    mainNav.classList.toggle("active");
});

