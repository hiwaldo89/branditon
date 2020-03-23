'use strict';

import axios from 'axios';

const contactForm = document.querySelector('.contact-form form');
const contactFormMessage = document.querySelector('.contact-form__message');
if (contactForm) {
  contactForm.onsubmit = e => {
    e.preventDefault();

    const mailerUrl = contactForm.action;
    contactFormMessage.innerHTML = '';

    axios({
      method: 'post',
      url: mailerUrl,
      data: new FormData(contactForm)
    })
      .then(res => {
        if (res.data.includes('success')) {
          contactFormMessage.innerHTML =
            'Recibí tu mensaje, me pondré en contacto lo más pronto posible.';
        } else {
          contactFormMessage.innerHTML = res.data;
        }
      })
      .catch(e => {
        contactFormMessage.innerHTML = e;
      })
      .then(() => {
        animateCSS('.contact-form__message', 'fadeInUp');
      });
  };
}

function animateCSS(element, animationName, callback) {
  const node = document.querySelector(element);
  node.classList.add('animated', animationName);

  function handleAnimationEnd() {
    node.classList.remove('animated', animationName);
    node.removeEventListener('animationend', handleAnimationEnd);

    if (typeof callback === 'function') callback();
  }

  node.addEventListener('animationend', handleAnimationEnd);
}
