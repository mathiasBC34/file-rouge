let toggle = document.querySelector('.toggle');
let header = document.querySelector('header');

toggle.addEventListener('click', function() {
    header.classList.toggle('open')
}); 