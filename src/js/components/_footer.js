'use strict';
import axios from 'axios';
import animateCSS from './helpers/animate_css';

const mailchimpForm = document.querySelector(
  '.branditon-footer__newsletter form'
);
const mailchimpFormMessage = document.querySelector(
  '.branditon-footer__newsletter-message'
);
mailchimpForm.onsubmit = e => {
  e.preventDefault();
  mailchimpFormMessage.classList.add('opacity-0');
  mailchimpFormMessage.querySelector('span').innerHTML = '';
  axios({
    method: 'post',
    url: mailchimpForm.action,
    data: new FormData(mailchimpForm)
  })
    .then(res => console.log(res))
    .catch(e => {
      console.log(e);
    })
    .then(() => {
      animateCSS(
        '.branditon-footer__newsletter-message',
        'fadeInUp',
        function() {
          mailchimpFormMessage.classList.remove('opacity-0');
        }
      );
    });
};
