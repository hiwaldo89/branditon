'use strict';

import axios from 'axios';

const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
  contactForm.onsubmit = e => {
    e.preventDefault();
    const mailerUrl = contactForm.action;
    axios({
      method: 'post',
      url: mailerUrl,
      data: new FormData(contactForm)
    })
      .then(res => {
        console.log(res);
      })
      .catch(e => console.log(e));
  };
}
