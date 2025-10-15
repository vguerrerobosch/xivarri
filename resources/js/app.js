import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import siteHeader from './site-header'
import lottieAnimations from './lottie-animations'

window.Alpine = Alpine

Alpine.plugin(intersect)
Alpine.data('siteHeader', siteHeader)
Alpine.data('lottieAnimations', lottieAnimations)

Alpine.start()
