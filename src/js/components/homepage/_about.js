'use strict';
import simpleParallax from 'simple-parallax-js';

const frontImage = document.querySelector('.homepage-about__front-img');
new simpleParallax(frontImage, {
  orientation: 'up'
});
