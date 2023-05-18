if (document.getElementById('homeSwiper')) {
  document
    .querySelector('#homeSwiper')
    .style.setProperty(
      '--header-width',
      document.querySelector('header').clientWidth + 'px'
    );
}

/* Home Swiper */
const breakpoint = window.matchMedia('(min-width:1024px)');
if (document.getElementById('homeSwiper')) {
  const homeSwiper = new Swiper('#homeSwiper', {
    enabled: true,
    direction: 'vertical',
    mousewheel: true,
    speed: 600,
  });

  if (breakpoint.matches === false) {
    homeSwiper.destroy();

    document
      .querySelector('#homeSwiper > .swiper-wrapper')
      .classList.remove('swiper-wrapper');
  }
}

/*--------------------------------------------------------------------------------- */
const progressCircle = document.querySelector('.autoplay-progress svg#filler');
const homeSwiperSlider = new Swiper('#homeSwiper_slider', {
  direction: 'horizontal',
  mousewheel: true,
  speed: 600,
  nested: true,
  effect: 'creative',
  loop: false,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    stopOnLastSlide: true,
  },

  creativeEffect: {
    prev: {
      shadow: true,
      translate: ['-20%', 0, -1],
    },
    next: {
      translate: ['100%', 0, 0],
    },
  },

  on: {
    autoplayTimeLeft(s, time, progress) {
      if (progress > 0) {
        progressCircle.style.setProperty('--progress', 1 - progress);
      }
    },
  },

  breakpoints: {
    1025: {
      direction: 'vertical',
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, '-20%', -1],
        },
        next: {
          translate: [0, '100%', 0],
        },
      },
    },
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

const promotionSwiper = new Swiper('#homeSwiper_promotion', {
  direction: 'horizontal',
  speed: 600,
  nested: true,
  mousewheel: true,
  spaceBetween: 40,

  navigation: {
    nextEl: '.swiper-btn-next',
    prevEl: '.swiper-btn-prev',
  },
});
