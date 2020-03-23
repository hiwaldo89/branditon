'use strict';

const hamburgerBtn = document.querySelector('.hamburger');
const mainNavigation = documet.getElementById('main-navigation');
hamburgerBtn.onclick = e => {
  e.preventDefault();
  hamburgerBtn.classList.toggle('is-active');
  mainNavigation.classList.toggle('main-navigation--open');
};
