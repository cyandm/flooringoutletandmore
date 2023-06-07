if (document.getElementById('homeSwiper')) {
  document
    .querySelector('#homeSwiper')
    .style.setProperty(
      '--header-width',
      document.querySelector('header').clientWidth + 'px'
    );
}

/* Home Swiper */
export const homeSwiper = new Swiper('#homeSwiper', {
  enabled: true,
  direction: 'vertical',
  mousewheel: true,
  speed: 600,
});

if (document.getElementById('homeSwiper')) {
  const breakpoint = window.matchMedia('(min-width:1024px)');
  if (breakpoint.matches === false) {
    homeSwiper.destroy();

    document
      .querySelector('#homeSwiper > .swiper-wrapper')
      .classList.remove('swiper-wrapper');
  }
}

/*--------------------------------------------------------------------------------- */
const progressCircle = document.querySelector('.autoplay-progress svg#filler');
export const homeSwiperSlider = new Swiper('#homeSwiper_slider', {
  direction: 'horizontal',
  mousewheel: true,
  speed: 600,
  nested: true,
  effect: 'creative',
  loop: true,
  autoplay: {
    delay: 3500,
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
      loop: false,
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

export const promotionSwiper = new Swiper('#homeSwiper_promotion', {
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

/********************************************************************************** */

const productGalleryThumbs = new Swiper('#productGalleryThumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: 1,
});
const ProductGallery = new Swiper('#productGallery', {
  spaceBetween: 10,
  navigation: {
    nextEl: '.btn-next',
    prevEl: '.btn-prev',
  },
  thumbs: {
    swiper: productGalleryThumbs,
  },
});

const productGalleryThumbsModal = new Swiper('#productGalleryThumbsModal', {
  spaceBetween: 24,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
const productGalleryModal = new Swiper('#productGalleryModal', {
  spaceBetween: 10,
  navigation: {
    nextEl: '.btn-next',
    prevEl: '.btn-prev',
  },
  thumbs: {
    swiper: productGalleryThumbsModal,
  },
});

/********************************************************************************** */
const archiveProducts = new Swiper('.p-cat-swiper', {
  spaceBetween: 12,
  slidesPerView: 2,
  breakpoints: {
    1024: {
      slidesPerView: 4,
    },
  }
});