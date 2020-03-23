'use strict';
import $ from 'jquery';

if (document.querySelector('.homepage-recent-posts__wrapper')) {
  $('.homepage-recent-posts__wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  const recentPostsDots = document.querySelectorAll(
    '.homepage-recent-posts__dots li button'
  );
  recentPostsDots.forEach(dot => {
    dot.onclick = e => {
      e.preventDefault();
      recentPostsDots.forEach(dot => {
        dot.classList.remove('active');
      });
      dot.classList.add('active');
      $('.homepage-recent-posts__wrapper').slick(
        'slickGoTo',
        Number(dot.dataset.slide)
      );
    };
  });
}
