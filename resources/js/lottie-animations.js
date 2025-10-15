import lottie from 'lottie-web'

export default () => ({
    initLottie(animationPath, options = {}) {
        const defaultOptions = {
            container: this.$el,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: animationPath,
            rendererSettings: {
                preserveAspectRatio: 'xMidYMid slice'
            }
        };

        const config = { ...defaultOptions, ...options };

        lottie.loadAnimation(config);
    }
});
