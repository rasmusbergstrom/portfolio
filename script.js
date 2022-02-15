//References 
let mainNav = document.querySelector(".header-mob-menu");
let navToggle = document.querySelector('#js-navbar-toggle');

//Hanterar min mobilmeny, vid klick så visas menyn.
navToggle.addEventListener('click', function() {
    navToggle.classList.toggle("exit");
    mainNav.classList.toggle("active");
});

