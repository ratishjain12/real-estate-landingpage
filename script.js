let swiperObj = document.querySelector(".mySwiper");
let btnNext = document.querySelector(".swiper-button-next");
let btnPrev = document.querySelector(".swiper-button-prev");
let pagination = document.querySelector(".swiper-pagination");

let slides = 1;

var swiper = new Swiper(swiperObj, {
  cssMode: true,
  loop: true,

  breakpoints: {
    "@0.75": {
      slidesPerView: 1,
    },
    "@1.00": {
      slidesPerView: 2,
    },
    "@1.50": {
      slidesPerView: 3,
    },
  },
  navigation: {
    nextEl: btnNext,
    prevEl: btnPrev,
  },
  pagination: {
    el: pagination,
    clickable: true,
  },
  mousewheel: true,
  keyboard: true,
});
