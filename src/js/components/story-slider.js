import Swiper from '../vendor/swiper.min.js';
import vars from '../_vars';

const storySlider = new Swiper(vars.$storySlider, {
  direction: 'vertical',
  speed: 500,
  parallax: true,
  autoplay: false,
  effect: "slide",
  autoHeight: true,
  mousewheel: true,
  releaseOnEdges: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
    progressbarOpposite: true,
  },
});

storySlider.swiper;