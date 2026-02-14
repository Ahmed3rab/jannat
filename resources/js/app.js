import Alpine from 'alpinejs'
import Glide from '@glidejs/glide'

window.Alpine = Alpine

Alpine.data('glide', (options = {}) => ({
    instance: null,

    init() {
        this.$nextTick(() => {
            requestAnimationFrame(() => {
                const direction = document.documentElement.dir || 'ltr'

                this.instance = new Glide(this.$el, {
                    direction: direction,
                    ...options
                })
                this.instance.mount()
            })
        })
    }
}))

Alpine.start()
