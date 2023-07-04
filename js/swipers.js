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
    1024: {
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

/********************************************************************************** */
const desktopBreakpoint = window.matchMedia('(min-width: 1024px)');
let servicesSwiper = undefined;

window.addEventListener('resize', function (e) {
  desktopBreakpoint.matches = window.matchMedia('(min-width: 1024px)').matches;
  servicesSwiperInit();
});

function servicesSwiperInit() {
  if (desktopBreakpoint.matches) {
    servicesSwiper = new Swiper('#homeSwiper_services', {
      direction: 'horizontal',
      speed: 600,
      nested: true,
      mousewheel: true,
      spaceBetween: 40,
    });
  }

  if (!desktopBreakpoint.matches) {
    const servicesSwiperWrapper = document.querySelector("#homeSwiper_services > .wrapper");
    const servicesSwiperSlide = document.querySelectorAll("#homeSwiper_services > .wrapper > .slide");
    if (servicesSwiperWrapper && servicesSwiperSlide) {
      servicesSwiperWrapper.classList.remove("swiper-wrapper");
      servicesSwiperSlide.forEach(element => {
        element.classList.remove("swiper-slide");
      });
    }

    if (servicesSwiper) {
      servicesSwiper.destroy();
    }
  }
}
servicesSwiperInit();

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
  spaceBetween: 4,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: 1,
});
const ProductGallery = new Swiper('#productGallery', {
  spaceBetween: 12,
  navigation: {
    nextEl: '.swiper-next-btn',
    prevEl: '.swiper-prev-btn',
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
  spaceBetween: 12,
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

/********************************************************************************** */
const archiveProjectArticles = document.querySelectorAll("main.projects .archive-project-article .image-sliders .swiper-archive-project-article");
const archiveProjectGalleres = document.querySelectorAll("main.projects .archive-project-article .image-sliders .swiper-archive-project-gallery");

archiveProjectArticles.forEach(function (article, i) {
  const archiveProjectGallery = new Swiper(archiveProjectGalleres[i], {
    spaceBetween: 12,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  const archiveProjectArticle = new Swiper(article, {
    slidesPerView: 1,
    spaceBetween: 12,
    centeredSlides: true,
    slideToClickedSlide: true,
    navigation: {
      nextEl: '.swiper-next-btn',
      prevEl: '.swiper-prev-btn'
    },
    thumbs: {
      swiper: archiveProjectGallery
    }
  });
});

/********************************************************************************** */
const accessoriesGallery = document.querySelectorAll("main.accessories > .content > .accessory > .accessory-content > .gallery .swiper-gallery");
const accessoriesGalleryThumbs = document.querySelectorAll("main.accessories > .content > .accessory > .accessory-content > .gallery .swiper-gallery-thumbs");

accessoriesGallery.forEach(function (gallery, i) {
  const accessoryGalleryThumbs = new Swiper(accessoriesGalleryThumbs[i], {
    spaceBetween: 4,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: 1,
  });
  const accessoryGallery = new Swiper(gallery, {
    spaceBetween: 12,
    navigation: {
      nextEl: '.swiper-next-btn',
      prevEl: '.swiper-prev-btn',
    },
    thumbs: {
      swiper: accessoryGalleryThumbs,
    },
  });
});