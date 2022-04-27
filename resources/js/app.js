require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const myDarkCheck = document.querySelector('#darkModeToggle');
const myHtml = document.querySelector('html');
const myBody = document.querySelector('body');
const myLogo = document.querySelector('#minibank-logo');
const myVNavbar = document.querySelector('#vertical-navbar');
const myTNavbar = document.querySelector('.top-navbar');
const mylabelLogo = document.querySelector('#label-logo');
const myNContent = document.querySelectorAll('#navbar-content');
const myContentContainer = document.querySelectorAll('.navbar-item-container');
const myAfterM = document.querySelector('#afterM');
const myFill = document.querySelector('#navbar-fill');
const mySearch = document.querySelector('#search');
const myNCName = document.querySelectorAll('#navbar-content-name');
const myProfile = document.querySelector('.profile-container');
const myProfilePic = document.querySelector('.profile-picture-container');
const myUserNameCon = document.querySelector('.user-name-container');
const myPP = document.querySelector('.profile-picture');
const myMFill = document.querySelector('.main-fill-vertical');
const myMainContainer = document.querySelector('.main-content');
const myTIC = document.querySelector('.transaction-info-container');

myDarkCheck.addEventListener('click', function () {
    myHtml.classList.toggle('dark');
});

myLogo.addEventListener('click', function () {
    if (window.innerWidth < 768) {
        mySearch.classList.toggle('top-navbar-input-search-active');
        myTNavbar.classList.toggle('top-navbar-active');
        myAfterM.classList.toggle('label-minibank-after-content-active')
        myVNavbar.classList.toggle('vertical-active');
        myFill.classList.toggle('navbar-fill-active');
        mylabelLogo.classList.toggle('translate-x-4');
        myAfterM.classList.toggle('cursor-pointer');
        myNContent.forEach(function (NContent) {
            NContent.classList.toggle('navbar-item-link-active');
        });
        myProfile.classList.toggle('profile-container-active');
        myUserNameCon.classList.toggle('user-name-container-active');
        myMFill.classList.toggle('main-fill-vertical-active');
        myMainContainer.classList.toggle('.main-content-active');
        myTIC.classList.toggle('.transaction-info-container-active');
    };
});

myProfilePic.addEventListener('click', function () {
    myProfile.classList.toggle('profile-container-click');
    myPP.classList.toggle('profile-picture-click');
});