'use strict';
import $ from 'jquery';

if (document.querySelector('.homepage-recent-posts__wrapper')) {
  $('.homepage-recent-posts__wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false
  });

  const recentPostsDots = document.querySelectorAll(
    '.homepage-recent-posts__dots li button'
  );
  recentPostsDots.forEach(dot => {
    dot.onclick = e => {
      e.preventDefault();
      console.log(dot.dataset.slide);
      $('.homepage-recent-posts__wrapper').slick(
        'slickGoTo',
        dot.dataset.slide
      );
    };
  });
}
