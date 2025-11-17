import Swiper from 'swiper';

export default () => ({
  swiper: null,
  init() {
    this.swiper = new Swiper(this.$el, {
      loop: true,
      slidesPerView: 1.2,
      centeredSlides: true,
      spaceBetween: 10,
      breakpoints: {
        640: {
          slidesPerView: 1.5,
        },
        768: {
          slidesPerView: 2.5,
        },
        1024: {
          slidesPerView: 3.5,
        },
        1280: {
          slidesPerView: 4.2,
        },
        1536: {
          slidesPerView: 4.5,
        },
      },
    });
  },
});
