import './vendor/focus-visible.min.js';
import './components/burger';
import './components/news';
import './components/story-slider';
import './components/accordion';
import './components/validation';

import AOS from 'aos';


AOS.init({
  duration: 800,
});

document.querySelector('.js-btn-modal').addEventListener("click", () => {
  document.querySelector('.modal').classList.add('modal--open');
  document.querySelector('.modal-form').classList.add('modal__content--open');
  document.querySelector('.modal-finish').classList.remove('modal__content--open');
});

document.querySelectorAll('.form__btn.btn').forEach(element => {
  element.addEventListener("click", () => {
    document.querySelector('.modal').classList.add('modal--open');
    document.querySelector('.modal-form').classList.remove('modal__content--open');
    document.querySelector('.modal-finish').classList.add('modal__content--open');

  });
});

document.querySelectorAll('.modal-finish button').forEach(element => {
  element.addEventListener("click", () => {
    document.querySelector('.modal').classList.remove('modal--open');
    document.querySelector('.modal-form').classList.remove('modal__content--open');
    document.querySelector('.modal-finish').classList.remove('modal__content--open');
  });
});