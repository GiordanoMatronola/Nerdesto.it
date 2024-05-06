// let navbar = document.querySelector('#navbar');

// window.addEventListener('scroll', ()=> {
//     if (window.scrollY > 0) {
//         navbar.classList.add('floatingNavbar');
//         navbar.classList.remove('navbar');
//     }else{
//         navbar.classList.add('navbar');
//         navbar.classList.remove('floatingNavbar');
//     }
// })


// modo per far apparire bianche le tabs della bar category
document.addEventListener("DOMContentLoaded", function() {
    var tabs = document.querySelectorAll('.nav-link');

    tabs.forEach(function(tab) {
        tab.addEventListener("click", function() {
            tabs.forEach(function(t) {
                t.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
});


const priceInput = document.getElementById('inputPrice');
const priceValue = document.getElementById('priceValue');

// Aggiorna il valore del prezzo visualizzato quando il range cambia
priceInput.addEventListener('input', function() {
    priceValue.textContent = priceInput.value;
});
