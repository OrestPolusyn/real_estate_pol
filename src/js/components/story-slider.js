import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';
import AOS from 'aos';
import SwiperAnimation from '@cycjimmy/swiper-animation';


const swiperAnimation = new SwiperAnimation();

AOS.init({
  duration: 500,
});

const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  autoHeight: true,
  touchRatio: 1,
  grabCursor: true,
  speed: 1000,
  preventInteractionOnTransition: true,
  mousewheelSensitivity: 1,
  effect: "slide",
    noSwiping: true,

  scrollbar: {
    draggable: true,
  },
  mousewheel: {
    releaseOnEdges: true,

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

storySlider.swiper;