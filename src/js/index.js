'use strict'

// Menu Hamburguesa Header
let open = document.querySelector('.nav__open');
let close = document.querySelector('.nav__close');
let mobile = document.querySelector('.nav__mobile');

open.addEventListener('click', () => {
    open.style.display = 'none';
    close.style.display = 'flex';
    mobile.style.display = 'block';
});

close.addEventListener('click', () => {
    open.style.display = 'flex';
    close.style.display = 'none';
    mobile.style.display = 'none';
});