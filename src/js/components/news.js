import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';

const newsSlider = new Swiper(vars.$newsSlider, {
  slidesPerView: 3,
  mousewheelSensitivity: 0,
  mousewheelReleaseOnEdges: true,
  spaceBetween: 30,
  releaseOnEdges: true,
  navigation: {
    prevEl: ".news__prev",
    nextEl: ".news__next",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    576: {
      slidesPerView: 2,

    },
    768: {
      slidesPerView: 3,

    }
  }

});