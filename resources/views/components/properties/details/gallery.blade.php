<div x-data="galleryModal()" class="flex justify-center">
    <!-- Trigger -->
    <button type="button" x-on:click="openModal()"
        class="cursor-pointer bg-white transition ease-in duration-50 group hover:bg-primary px-4 py-2 rounded-sm text-primary inline-flex space-x-2 items-center">
        <svg class="text-primary group-hover:text-white size-5" data-slot="icon" aria-hidden="true" fill="none"
            stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <span class="text-primary font-bold group-hover:text-white">عرض كل الصور</span>
    </button>

    <!-- Modal -->
    <div x-show="open" x-cloak style="display: none" x-on:keydown.escape.prevent.stop="closeModal()" role="dialog"
        aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-50 overflow-y-auto">
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black/40"></div>

        <div x-show="open" x-transition.opacity x-on:click="closeModal()"
            class="relative flex min-h-screen items-center justify-center p-4">
            <div x-on:click.stop x-trap.noscroll.inert="open" class="w-full h-full md:h-auto md:max-w-6xl">
                <div x-ref="glideRoot" class="glide">
                    <div class="lg:flex lg:items-center lg:justify-between gap-24">
                        <div data-glide-el="controls" class="hidden lg:block ltr:order-last">
                            <button data-glide-dir=">" type="button"
                                style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                                class="cursor-pointer flex items-center justify-center h-12 w-12 bg-white rounded text-primary">
                                <svg class="size-6 text-primary" data-slot="icon" aria-hidden="true" fill="none"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m8.25 4.5 7.5 7.5-7.5 7.5" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @for ($i = 0; $i < 3; $i++)
                                    <li class="glide__slide">
                                        <div class="relative">
                                            <div class="absolute inset-0 rounded-sm bg-black/20 z-10"></div>
                                            <img class="w-full max-h-[85vh] object-contain"
                                                src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div data-glide-el="controls" class="hidden lg:block ltr:order-first">
                            <button data-glide-dir="<" type="button"
                                style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                                class="cursor-pointer flex items-center justify-center h-12 w-12 bg-white rounded text-primary">
                                <svg class="size-6 text-primary" data-slot="icon" aria-hidden="true" fill="none"
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.75 19.5 8.25 12l7.5-7.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-16 flex items-center justify-center space-x-1.5 pb-2"
                        data-glide-el="controls[nav]">
                        @for ($i = 0; $i < 3; $i++)
                            <button class="glide__bullet cursor-pointer group relative transition-all duration-300"
                                data-glide-dir="={{ $i }}">
                                <span class=""></span>
                            </button>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function galleryModal() {
        return {
            open: false,
            glide: null,

            openModal() {
                this.open = true

                this.$nextTick(() => {
                    requestAnimationFrame(() => {
                        if (this.glide) return

                        this.glide = new Glide(this.$refs.glideRoot, {
                            type: 'carousel',
                            perView: 1,
                            animationDuration: 500,
                            direction: document.documentElement.dir || 'ltr',
                        })

                        this.glide.mount()
                    })
                })
            },

            closeModal() {
                this.open = false

                if (this.glide) {
                    this.glide.destroy()
                    this.glide = null
                }
            }
        }
    }
</script>
