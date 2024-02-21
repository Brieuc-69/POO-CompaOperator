// const links = document.querySelectorAll('nav li');

// IntersectionObserver.addEvenListener("click", () => {
//     navigator.classList.toggle("active");
// });

// links.forEach((link) => {
//     link;addEventListener('click', () => {
//         navigator.classList.remove("active");
//     });
// });

const icon = document.querySelector('#icons');
const navmobile = document.querySelector('#nav-mobile-hidden');

icon.addEventListener('click', () => {
    navmobile.classList.toggle('nav-mobile-hidden');
    navmobile.classList.toggle('nav-mobile-show');
});





