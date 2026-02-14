<header class="bg-white">
    <nav class="flex items-center justify-between px-6 lg:px-10 py-6 xl:rounded-b mx-auto w-full lg:max-w-[1440px] bg-primary text-white"
        style="box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.16)">
        <a href="{{ route('homepage') }}">
            <x-svgs.logo-white />
        </a>

        <div class="lg:hidden inline-flex">
            <div x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }

                    this.$refs.button.focus()

                    this.open = true
                },
                close(focusAfter) {
                    if (!this.open) return

                    this.open = false

                    focusAfter && focusAfter.focus()
                }
            }" x-on:keydown.escape.prevent.stop="close($refs.button)"
                x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']"
                class="relative inline-flex">
                <!-- Button -->

                <button x-ref="button" x-on:click="toggle()" :aria-expanded="open"
                    :aria-controls="$id('dropdown-button')" type="button" class="relative size-8">

                    <svg class="text-white" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.5"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round">
                        </path>
                    </svg>
                </button>

                <!-- Panel -->
                <div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)"
                    :id="$id('dropdown-button')" x-cloak
                    class="absolute left-0 min-w-48 rounded-lg shadow-sm mt-10 z-50 origin-top-left bg-white p-1.5 outline-none border border-gray-200">
                    <a href="#new"
                        class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">الرئيسية</a>

                    <a href="#edit"
                        class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">سكني</a>

                    <a href="#edit"
                        class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">تجاري</a>

                    <a href="#edit"
                        class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">شقق</a>

                    <a href="#edit"
                        class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">تواصل
                        معنا</a>
                    <div class="mt-4 border-t border-gray-200">

                        <a href="#"
                            class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:text-primary focus-visible:text-primary disabled:opacity-50 disabled:cursor-not-allowed">العربية</a>

                        <a href="#"
                            class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:text-primary focus-visible:text-primary disabled:opacity-50 disabled:cursor-not-allowed">English</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="hidden lg:flex items-center space-x-6 font-bold">
            <li class="group">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:scale-x-0 group-hover:after:scale-x-100 after:transform after:transition after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">الرئيسية</span>
                </span>
            </li>

            <li class="group">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:scale-x-0 group-hover:after:scale-x-100 after:transform after:transition after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">سكني</span>
                </span>
            </li>
            <li class="group">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:scale-x-0 group-hover:after:scale-x-100 after:transform after:transition after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">تجاري</span>
                </span>
            </li>
            <li class="group">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:scale-x-0 group-hover:after:scale-x-100 after:transform after:transition after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">شقق</span>
                </span>
            </li>
            <li class="group">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:scale-x-0 group-hover:after:scale-x-100 after:transform after:transition after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">تواصل معنا</span>
                </span>
            </li>
            <li class="group">
                <div x-data="{
                    open: false,
                    toggle() {
                        if (this.open) {
                            return this.close()
                        }

                        this.$refs.button.focus()

                        this.open = true
                    },
                    close(focusAfter) {
                        if (!this.open) return

                        this.open = false

                        focusAfter && focusAfter.focus()
                    }
                }" x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']"
                    class="relative flex">
                    <!-- Button -->
                    <button x-ref="button" x-on:click="toggle()" :aria-expanded="open"
                        :aria-controls="$id('dropdown-button')" type="button" class="cursor-pointer relative group">
                        <svg class="group-hover:scale-110 transform transition size-6 text-white" data-slot="icon"
                            aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m20.893 13.393-1.135-1.135a2.252 2.252 0 0 1-.421-.585l-1.08-2.16a.414.414 0 0 0-.663-.107.827.827 0 0 1-.812.21l-1.273-.363a.89.89 0 0 0-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 0 1-1.81 1.025 1.055 1.055 0 0 1-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 0 1-1.383-2.46l.007-.042a2.25 2.25 0 0 1 .29-.787l.09-.15a2.25 2.25 0 0 1 2.37-1.048l1.178.236a1.125 1.125 0 0 0 1.302-.795l.208-.73a1.125 1.125 0 0 0-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 0 1-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 0 1-1.458-1.137l1.411-2.353a2.25 2.25 0 0 0 .286-.76m11.928 9.869A9 9 0 0 0 8.965 3.525m11.928 9.868A9 9 0 1 1 8.965 3.525"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <!-- Panel -->
                    <div x-ref="panel" x-show="open" x-transition.origin.start.left
                        x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" x-cloak
                        class="absolute end-0 min-w-36 rounded-lg shadow-sm mt-10 z-10 origin-top-left bg-white p-1.5 outline-none border border-gray-200">
                        <a href="#"
                            class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:text-primary focus-visible:text-primary disabled:opacity-50 disabled:cursor-not-allowed">العربية</a>

                        <a href="#"
                            class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:text-primary focus-visible:text-primary disabled:opacity-50 disabled:cursor-not-allowed">English</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>
