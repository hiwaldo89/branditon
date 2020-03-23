'use strict';

const mailchimpForm = document.querySelector(
  '.branditon-footer__newsletter form'
);
mailchimpForm.onsubmit = e => {
  e.preventDefault();
  console.log('mailchimp form');
};
