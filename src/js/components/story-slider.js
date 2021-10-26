import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';
import AOS from 'aos';
import SwiperAnimation from '@cycjimmy/swiper-animation';


const swiperAnimation = new SwiperAnimation();

AOS.init({
  duration: 1000,
});

const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  autoHeight: true,
  spaceBetween: 50,
  speed: 800,
  touchRatio: 1,
  scrollbar: {
    draggable: true,
  },
  mousewheel: {
    releaseOnEdges: true,
    touchReleaseOnEdges: true,
  },
  pagination: {
    progressbarOpposite: true,
    el: '.swiper-pagination',
    type: 'progressbar',
    clickable: true,
  },
  on: {
    init: function () {
      swiperAnimation.init(this).animate();
    },
    slideChange: function () {
      swiperAnimation.init(this).animate();
    }
  }
});