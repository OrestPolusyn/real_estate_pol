import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';
import AOS from 'aos';


AOS.init({
  duration: 1200,
});
const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  mousewheel: true,
  autoHeight: true,
  slidesPerView: 1,
  spaceBetween: 50,
  mousewheelReleaseOnEdges: true,
  pagination: {
    progressbarOpposite: true,
    el: '.swiper-pagination',
    type: 'progressbar',
  },
});
