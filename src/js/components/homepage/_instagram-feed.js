'use strict';
import $ from 'jquery';

if (document.querySelector('.instagram-feed')) {
  $('.instagram-feed__slider').slick({
    slidesToShow: 5,
    centerMode: true,
    arrows: false
  });
}
