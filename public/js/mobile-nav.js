let button = document.getElementsByClassName("mobile-menu__togglebutton")[0];
let navBarLinks = document.getElementsByClassName("mobile-menu__links")[0];

button.addEventListener("click", e => {
    console.log("click");
    navBarLinks.classList.toggle("active");
});
