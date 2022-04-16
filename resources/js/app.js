require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const myDarkCheck = document.querySelector('#darkModeToggle');
const myHtml = document.querySelector('html');

myDarkCheck.addEventListener('click', function () {
    myDarkCheck.checked ? myHtml.classList.add('dark') : myHtml.classList.remove('dark');
})