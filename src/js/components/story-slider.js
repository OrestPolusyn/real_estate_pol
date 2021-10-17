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

const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  mousewheel: true,
  autoHeight: true,
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    progressbarOpposite: true,
    el: '.swiper-pagination',
    type: 'progressbar',
  },
});

storySlider.update();