'use strict';

import axios from 'axios';
import animateCSS from '../helpers/animate_css';

const contactForm = document.querySelector('.contact-form form');
const contactFormMessage = document.querySelector('.contact-form__message');
if (contactForm) {
  contactForm.onsubmit = e => {
    e.preventDefault();

    const mailerUrl = contactForm.action;
    contactFormMessage.classList.add('opacity-0');
    contactFormMessage.querySelector('span').innerHTML = '';

    axios({
      method: 'post',
      url: mailerUrl,
      data: new FormData(contactForm)
    })
      .then(res => {
        console.log(res);
        if (res.data.includes('success')) {
          contactFormMessage.querySelector('span').innerHTML =
            'Recibí tu mensaje, me pondré en contacto lo más pronto posible.';
        } else {
          contactFormMessage.querySelector('span').innerHTML = res.data;
        }
      })
      .catch(e => {
        contactFormMessage.querySelector('span').innerHTML = e;
      })
      .then(() => {
        animateCSS('.contact-form__message', 'fadeInUp', function() {
          contactFormMessage.classList.remove('opacity-0');
        });
      });
  };
}
