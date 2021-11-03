import './vendor/focus-visible.min.js';
import './components/burger';
import './components/news';
import './components/story-slider';
import './components/accordion';
import './components/validation';

import AOS from 'aos';
import _vars from './_vars.js';

AOS.init({
  duration: 800,
});

// document.querySelector('.js-btn-modal').addEventListener("click", () => {
//   document.querySelector('.modal').classList.add('modal--open');
//   document.querySelector('.modal-form').classList.add('modal__content--open');
//   document.querySelector('.modal-finish').classList.remove('modal__content--open');
// });

// document.querySelectorAll('.form__btn.btn').forEach(element => {
//   element.addEventListener("click", () => {
//     document.querySelector('.modal').classList.add('modal--open');
//     document.querySelector('.modal-form').classList.remove('modal__content--open');
//     document.querySelector('.modal-finish').classList.add('modal__content--open');

//   });
// });

// document.querySelectorAll('.modal-finish button').forEach(element => {
//   element.addEventListener("click", () => {
//     document.querySelector('.modal').classList.remove('modal--open');
//     document.querySelector('.modal-form').classList.remove('modal__content--open');
//     document.querySelector('.modal-finish').classList.remove('modal__content--open');
//   });
// });



const blogUp = document.querySelector('.btn-up'),
  storyBtn = document.querySelector('.story__btn'),
  homeContact = document.querySelector('.contacts');


if (blogUp) {
  blogUp.addEventListener('click', () => {
    window.scrollTo(0, 0);
  });

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
      blogUp.classList.add('btn-up--scroll');
    } else {
      blogUp.classList.remove('btn-up--scroll');
    }
  });
}

if (storyBtn || homeContact) {
  storyBtn.addEventListener('click', () => {
    homeContact.scrollIntoView({
      block: "center",
      behavior: "smooth"
    });
  });
}