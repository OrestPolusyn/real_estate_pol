import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';

import AOS from 'aos';


import SwiperAnimation from '@cycjimmy/swiper-animation';


const swiperAnimation = new SwiperAnimation();

AOS.init({
  duration: 800,
});

const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  autoHeight: true,
  speed: 800,
  effect: "slide",
  mousewheel: true,
  pagination: {
    progressbarOpposite: true,
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  on: {
    init: function () {
      swiperAnimation.init(this).animate();
    },
    slideChange: function () {
      swiperAnimation.init(this).animate();

      setTimeout(function () {
        storySlider.params.mousewheel.releaseOnEdges = false;
      }, 900);
    },
    reachEnd: function () {
      setTimeout(function () {
        storySlider.params.mousewheel.releaseOnEdges = true;
      }, 1200);
    }
  },
});