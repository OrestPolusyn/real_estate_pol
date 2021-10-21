import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';


const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  mousewheel: true,
  autoHeight: true,
  slidesPerView: 1,
  spaceBetween: 30,
  touchReleaseOnEdges: true,
  pagination: {
    progressbarOpposite: true,
    el: '.swiper-pagination',
    type: 'progressbar',
  },

});