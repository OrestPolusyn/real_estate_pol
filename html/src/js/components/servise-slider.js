import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';

const serviceSlider = new Swiper('.services__sider', {
  navigation: {
    prevEl: ".slider-btn__prev",
    nextEl: ".slider-btn__next",
  },
  breakpoints: {
    320: {
      slidesPerView: "auto",

    },

    769: {
      slidesPerView: 2,
    },

    1180: {
      slidesPerView: "auto",
    },
  }
});