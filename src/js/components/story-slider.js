import Swiper from '../vendor/swiper.min.js';
import vars from '../_vars';


const newsSlider = new Swiper(vars.$newsSlider, {
  slidesPerView: 3,
  spaceBetween: 30,
  navigation: {
    prevEl: ".news__prev",
    nextEl: ".news__next",
  },
});