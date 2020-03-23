'use strict';

import axios from 'axios';

const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
  contactForm.onsubmit = e => {
    e.preventDefault();
    const mailerUrl = contactForm.action;
    console.log(mailerUrl);
  };
}
