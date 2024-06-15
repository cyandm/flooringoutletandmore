// import { homeSwiper, homeSwiperSlider, promotionSwiper } from './swipers';

// /* Data Mouse For Links */
// const links = document.querySelectorAll('a');
// links.forEach((link) => {
//   if (!link.dataset.mouse) {
//     link.dataset.mouse = link.innerText || link.innerHTML;
//   }
// });

// /* Constants */
// const mouseCursor = document.querySelector('.cursor');
// const hoverElements = document.querySelectorAll('[data-mouse]');
// const hoverElementsImages = document.querySelectorAll('[data-image]');
// const copyTextElements = document.querySelectorAll('[data-mouse="copy"]');
// const nextClickElements = document.querySelectorAll('[data-mouse="next"]');

// const nextSlideSlide = document.querySelector(
//   '#homeSwiper_slider .swiper-slide:nth-child(3)'
// );

// /* Functions */
// const moveCursor = (e) => {
//   mouseCursor.style.top = e.pageY + 'px';
//   mouseCursor.style.left = e.pageX + 'px';
// };

// const resetCursor = () => {
//   mouseCursor.classList.remove('active');
//   mouseCursor.classList.remove('active_image');
//   mouseCursor.dataset.mouse = 'scroll';
//   mouseCursor.style.backgroundImage = '';
// };
// if (document.getElementById('homeSwiper')) {
//   /* Events */
//   window.addEventListener('mousemove', moveCursor);
//   homeSwiper.on('slideChange', resetCursor);
//   homeSwiperSlider.on('slideChange', resetCursor);
//   promotionSwiper.on('slideChange', resetCursor);

//   /* Handlers */
//   hoverElements.forEach((elm) => {
//     elm.addEventListener('mouseover', () => {
//       mouseCursor.classList.add('active');
//       mouseCursor.dataset.mouse = elm.dataset.mouse;
//     });

//     elm.addEventListener('mouseleave', () => {
//       mouseCursor.classList.remove('active');
//       mouseCursor.dataset.mouse = 'scroll';
//     });
//   });

//   hoverElementsImages.forEach((elm) => {
//     elm.addEventListener('mouseover', () => {
//       mouseCursor.classList.add('active_image');
//       mouseCursor.dataset.mouse = '';
//       mouseCursor.style.backgroundImage = `url('${elm.dataset.image}')`;
//     });

//     elm.addEventListener('mouseleave', () => {
//       mouseCursor.classList.remove('active_image');
//       mouseCursor.dataset.mouse = 'scroll';
//       mouseCursor.style.backgroundImage = '';
//     });
//   });

//   copyTextElements.forEach((elm) => {
//     elm.addEventListener('click', () => {
//       navigator.clipboard.writeText(elm.innerText).then(() => {
//         mouseCursor.dataset.mouse = 'copied!';
//       });
//     });
//   });

//   nextSlideSlide.dataset.mouse = "let's go";
//   nextSlideSlide.addEventListener('click', () => {
//     homeSwiper.slideNext();
//   });

//   nextClickElements.forEach((el) => {
//     el.addEventListener('click', () => {
//       homeSwiperSlider.slideNext();
//     });
//   });

//   /************************************************************* */
// }
