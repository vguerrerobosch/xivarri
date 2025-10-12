export default () => ({
  show: true,
  threshold: 50,
  lastScroll: 0,

  init() {
    window.addEventListener('scroll', () => {
      const currentScroll = window.scrollY;

      if (Math.abs(currentScroll - this.lastScroll) < this.threshold) {
        return;
      }

      this.show = currentScroll < this.lastScroll;
      this.lastScroll = currentScroll;

    });
  },
});
