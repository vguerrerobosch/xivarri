export default () => ({
  isVisible: true,
  isAtTop: true,
  scrollThreshold: 50,
  previousScrollY: 0,
  isMenuOpen: false,

  init() {
    window.addEventListener('scroll', () => {
      const currentScrollY = window.scrollY;

      // Update top position state
      this.isAtTop = currentScrollY <= 0;

      if (Math.abs(currentScrollY - this.previousScrollY) < this.scrollThreshold) {
        return;
      }

      this.isVisible = currentScrollY < this.previousScrollY && currentScrollY > this.scrollThreshold;
      this.previousScrollY = currentScrollY;
    });
  },

  toggleMenu() {
    this.isMenuOpen = !this.isMenuOpen;
  },
});
