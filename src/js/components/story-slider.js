import Swiper from '../vendor/swiper-bundle.js';
import vars from '../_vars';
import SwiperAnimation from '@cycjimmy/swiper-animation';

const swiperAnimation = new SwiperAnimation();


const storySlider = new Swiper(vars.$storySlider, {
  direction: "vertical",
  autoHeight: true,
  speed: 800,
  effect: "slide",
  freemode: true,
  mousewheel: {
    forceToAxis: true,
  },
  rewind: false,
  bounds: true,
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
        storySlider.params.touchReleaseOnEdges = false;

      }, 900);
    },
    reachEnd: function () {
      setTimeout(function () {
        storySlider.params.mousewheel.releaseOnEdges = true;
        storySlider.params.touchReleaseOnEdges = true;
      }, 1200);
    }
  },
});