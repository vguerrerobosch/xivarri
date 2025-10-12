import Alpine from 'alpinejs'

import siteHeader from './site-header'

window.Alpine = Alpine

Alpine.data('siteHeader', siteHeader)

Alpine.start()
