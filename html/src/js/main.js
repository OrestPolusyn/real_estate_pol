import './vendor/focus-visible.min.js';
import './components/burger';
import './components/news';
import './components/story-slider';
import './components/accordion';
import './components/servise-slider';
import './components/validation';
import './components/dropdown';
import './components/filterFaq';



import AOS from 'aos';
import _vars from './_vars.js';

AOS.init({
  duration: 800, offset: 20,
});

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
    window.scrollTo(0, document.querySelector('.contacts').offsetTop - 100);
  });
}




const tagTitle = document.querySelector(".tag-page__title");


if (tagTitle){
  Array.from(document.querySelectorAll('.wp-tag-cloud .tag-cloud-link')).forEach(element => {
    console.log(element.href);
    if (element.href === window.location.href){
      element.classList.add('filter__link--active')
    }
  });
}