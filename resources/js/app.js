import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import siteHeader from './site-header'

window.Alpine = Alpine

Alpine.plugin(intersect)
Alpine.data('siteHeader', siteHeader)

Alpine.start()
