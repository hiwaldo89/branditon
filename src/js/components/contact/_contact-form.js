'use strict';

const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
  contactForm.onsubmit = e => {
    e.preventDefault();
    console.log('submit form');
  };
}
