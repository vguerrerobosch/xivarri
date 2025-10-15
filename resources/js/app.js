import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import lottie from 'lottie-web'
import siteHeader from './site-header'

window.Alpine = Alpine
window.lottie = lottie

Alpine.plugin(intersect)
Alpine.data('siteHeader', siteHeader)

Alpine.start()
