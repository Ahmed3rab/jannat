import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

import Glide from '@glidejs/glide'

window.Alpine = Alpine

Alpine.plugin(focus)
Alpine.data('glide', (options = {}) => ({
    instance: null,

    init() {
        this.$nextTick(() => {
            requestAnimationFrame(() => {
                const direction = document.documentElement.dir || 'ltr'

                this.instance = new Glide(this.$el, {
                    direction: direction,
                    animationDuration: 1000,
                    ...options
                })
                this.instance.mount()
            })
        })
    }
}))

Alpine.start()
