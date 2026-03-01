<x-layout>
    <x-slot:header>
        @include('components.header')
    </x-slot:header>
    <x-slot:main>
        <section id="slider" class="px-6 lg:px-10 2xl:px-0 mx-auto w-full max-w-8xl">
            <div class="lg:hidden">
                <div x-data="glide({ perView: 1, type: 'carousel', gap: 24, breakpoints: { 1024: { perView: 2 }, 768: { perView: 1 } } })" class="glide">
                    <div class="glide__track overflow-visible" data-glide-el="track">
                        <ul class="glide__slides overflow-visible">
                            @for ($i = 0; $i < 3; $i++)
                                <li class="glide__slide pb-12 px-2">
                                    <x-properties.card />
                                </li>
                            @endfor
                        </ul>
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
            <div class="hidden lg:block">
                <div x-data="glide({ perView: 1, type: 'carousel' })" class="glide">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div data-glide-el="controls" class="hidden lg:block ltr:order-last">
                            <button data-glide-dir=">" type="button"
                                style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                                class="cursor-pointer flex items-center justify-center h-12 w-12 bg-white rounded-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.23853 4.5L15.7281 12L8.23853 19.5" stroke="#004274" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @for ($i = 0; $i < 3; $i++)
                                    <li class="glide__slide">
                                        <x-properties.featured />
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div data-glide-el="controls" class="hidden lg:block ltr:order-first">
                            <button data-glide-dir="<" type="button"
                                style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                                class="cursor-pointer flex items-center justify-center h-12 w-12 bg-white rounded-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7284 19.5L8.23877 12L15.7284 4.5" stroke="#004274" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
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
        </section>
        <section id="latest" class="mt-44 xl:mt-40 2xl:mt-44 w-full">
            <div class="flex flex-col justify-center relative px-4 lg:px-10"
                style="background: linear-gradient(279.24deg, #004274 35.07%, #2270AB 100%);">
                <div class="absolute inset-0 overflow-hidden">
                    <x-svgs.latest />
                </div>
                <div class="relative z-20 -mt-16 mx-auto w-full max-w-7xl lg:max-w-3xl xl:max-w-6xl 3xl:max-w-7xl bg-white px-8 pb-6 lg:pb-10 pt-12 rounded-sm"
                    style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                    <form class="flex flex-col xl:flex-row items-center gap-6 sm:gap-8 xl:gap-12 3xl:gap-4">
                        <div
                            class="flex-1 grid grid-cols-2 sm:grid-cols-6 gap-6 w-full xl:flex xl:items-center xl:gap-x-6">
                            <select
                                class="col-span-2 sm:col-span-3 w-full 3xl:w-48 px-4 bg-position-[left_0.5rem_center] ltr:bg-position-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-primary-gray font-semibold capitalize rounded-sm focus:ring-primary focus:outline-0">
                                <option value="test">{{ __('content.select.city') }}</option>
                            </select>
                            <select
                                class="sm:col-span-3 w-full 3xl:w-48 px-4 bg-position-[left_0.5rem_center] ltr:bg-position-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-primary-gray font-semibold capitalize rounded-sm focus:ring-primary focus:outline-0">
                                <option value="test">{{ __('content.select.town') }}</option>
                            </select>
                            <select
                                class="sm:col-span-2 w-full 3xl:w-56 px-4 bg-position-[left_0.5rem_center] ltr:bg-position-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-primary-gray font-semibold capitalize rounded-sm focus:ring-primary focus:outline-0">
                                <option value="test">{{ __('content.select.property_type') }}</option>
                            </select>
                            <input type="text" name="min"
                                class="sm:col-span-2 w-full 3xl:w-40 appearance-none border-0 bg-[#F1F1F1] text-primary-gray font-smeibold placeholder:font-semibold placeholder-primary-gray capitalize rounded-sm focus:ring-primary focus:outline-0"
                                placeholder="{{ __('content.price.min') }}">
                            <input type="text" name="min"
                                class="sm:col-span-2 w-full 3xl:w-40 appearance-none border-0 bg-[#F1F1F1] text-primary-gray font-smeibold placeholder:font-semibold placeholder-primary-gray capitalize  rounded-sm focus:ring-primary focus:outline-0"
                                placeholder="{{ __('content.price.max') }}">
                        </div>
                        <button type="submit"
                            class="w-full xl:w-auto 3xl:w-full appearance-none rounded-sm bg-primary text-white font-bold py-2.5 px-8 uppercase text-sm">
                            <span>{{ __('content.filter') }}</span>
                        </button>
                    </form>
                </div>
                <div
                    class="relative z-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center gap-12 md:gap-6 lg:gap-12 xl:gap-6 3xl:gap-12 mt-16 -mb-20 2xl:max-w-8xl mx-auto">
                    @for ($i = 0; $i < 3; $i++)
                        <x-properties.card />
                    @endfor
                </div>
            </div>
            <a href="#"
                class="mt-32 lg:mt-44 xl:hidden text-primary font-semibold flex items-center justify-center gap-2.5">
                <span class="uppercase">
                    {{ __('content.visit_all') }}
                </span>
                <svg class="size-6 ltr:order-first" data-slot="icon" aria-hidden="true" fill="none"
                    stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
        </section>
        <section id="bento" class="mt-40 lg:mt-32 xl:mt-56 px-4 lg:px-10 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 grid-row-2 gap-20 sm:gap-32 xl:gap-20">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 lg:grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    <div class="text-primary self-center grid justify-items-center">
                        <h3 class="text-4xl font-bold capitalize">
                            {{ __('content.discover.by_city.title') }}
                        </h3>
                        <svg class="my-8" width="203" height="1" viewBox="0 0 203 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="202.675" y1="0.5" x2="0.000183148" y2="0.500018" stroke="#2270AB" />
                        </svg>
                        <p class="first-letter:capitalize font-semibold text-gray-800 text-xl text-center max-w-xs">
                            {{ __('content.discover.by_city.subtitle') }}</p>
                    </div>
                    <div class="lg:row-span-2 relative rounded-sm h-60 lg:h-128 xl:h-156 w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="sm:col-span-2 lg:col-span-1 relative rounded-sm h-60 xl:h-74 w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                    <div class="relative rounded-sm h-60 xl:h-74 w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-sm h-60 xl:h-74 w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 lg:grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    <div class="relative rounded-sm h-60 w-full xl:h-74"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="sm:order-first relative rounded-sm h-60 w-full xl:h-74"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div
                        class="order-first lg:order-0 lg:row-span-2 text-primary self-center grid justify-items-center">
                        <h3 class="text-4xl text-center font-bold capitalize">
                            {{ __('content.discover.by_type.title') }}</h3>
                        <svg class="my-8" width="203" height="1" viewBox="0 0 203 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="202.675" y1="0.5" x2="0.000183148" y2="0.500018" stroke="#2270AB" />
                        </svg>
                        <p class="first-letter:uppercase font-semibold text-gray-800 text-xl text-center max-w-xs">
                            {{ __('content.discover.by_type.subtitle') }}</p>
                    </div>
                    <div class="lg:col-span-2 rounded-sm relative h-60 xl:h-74 w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-sm absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-sm object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                </div>
            </div>
        </section>
        <section id="contact" class="mt-50 sm:mt-40 lg:mt-50 w-full xl:max-w-6xl 2xl:max-w-8xl mx-auto">
            <div class="px-4 lg:px-0 relative xl:rounded-sm shadow-md bg-linear-[280deg] rtl:from-primary rtl:to-[#2270AB] ltr:to-primary ltr:from-[#2270AB]"
                style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);">
                <div class="absolute inset-0 overflow-hidden">
                    <x-svgs.contact />
                </div>
                <div
                    class="absolute start-1/2 ltr:-translate-x-1/2 translate-x-1/2 w-max rtl:md:translate-x-0 rtl:md:start-14 ltr:md:translate-x-0 ltr:md:start-14 -top-10 md:-top-16">
                    <div class="bg-white p-10 font-bold text-4xl rounded-sm text-primary capitalize"
                        style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">{{ __('content.be_in_touch') }}</div>
                </div>
                <div
                    class="relative z-10 px-4 lg:px-10 xl:px-16 2xl:px-28 py-32 sm:py-28 flex flex-col md:flex-row items-center justify-between gap-16 md:gap-6 xl:gap-24">
                    <x-contact-info />
                    <svg class="hidden lg:block" width="2" height="324" viewBox="0 0 2 324" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.75 0.75L0.749986 322.75" stroke="url(#paint0_linear_14_553)" stroke-width="1.5"
                            stroke-linecap="round" />
                        <defs>
                            <linearGradient id="paint0_linear_14_553" x1="-0.5" y1="0.75" x2="-0.500014"
                                y2="322.75" gradientUnits="userSpaceOnUse">
                                <stop offset="0.15" stop-color="#5A83A1" stop-opacity="0.4" />
                                <stop offset="0.5" stop-color="white" />
                                <stop offset="0.85" stop-color="#5A83A2" stop-opacity="0.4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <x-contact-form />
                </div>
            </div>
        </section>
    </x-slot:main>
</x-layout>
