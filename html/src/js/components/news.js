import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';

const newsSlider = new Swiper(vars.$newsSlider, {
  slidesPerView: 3,
  spaceBetween: 30,
  navigation: {
    prevEl: ".slider-btn__prev",
    nextEl: ".slider-btn__next",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,

    },
    769: {
      slidesPerView: 3,

    }
  }

});