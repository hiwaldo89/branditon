'use strict';
import 'slick-carousel';
import './components/homepage/homepage';
import './components/contact/contact';
import './components/_header';
import './components/_footer';

import AOS from 'aos';
import LazyLoad from 'vanilla-lazyload';

AOS.init();
new LazyLoad({
  elements_selector: '.lazy'
});
