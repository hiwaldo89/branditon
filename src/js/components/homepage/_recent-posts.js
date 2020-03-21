'use strict';
import $ from 'jquery';

if (document.querySelector('.homepage-recent-posts__wrapper')) {
  $('.homepage-recent-posts__wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false
  });
}
