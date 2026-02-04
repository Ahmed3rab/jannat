<x-layout>
    <x-slot:header>
        @include('components.header')
    </x-slot:header>
    <x-slot:main>
        <section class="px-6 lg:px-0 mx-auto w-full max-w-[1440px]">
            <div class="flex items-center justify-between gap-x-20">
                <button type="button" style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                    class="hidden order-last ltr:order-first cursor-pointer lg:flex items-center justify-center h-12 w-12 bg-white rounded text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7284 19.5L8.23877 12L15.7284 4.5" stroke="#004274" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="hidden lg:block order-2 flex-1">
                    <div class="order-2 flex-1 flex items-center justify-start -space-x-14">
                        <div class="rounded h-[522px] w-[696px] relative"
                            style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25)">
                            <div class="rounded absolute inset-0 bg-black/20"></div>
                            <img class="rounded h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                        </div>
                        <div class="z-20 flex-1">
                            <div class="relative text-gray-800 px-8 py-9 bg-white rounded-se-md rounded-b-md"
                                style="box-shadow: 0px 3px 14px 2px rgba(0, 66, 116, 0.28);">
                                <div
                                    class="absolute bottom-full start-0 bg-promoted-badge text-primary font-semibold px-6 py-2 rounded-t">
                                    <span>{{ __('content.featured') }}</span>
                                </div>
                                <dl class="flex items-center justify-between">

                                    <dt class="text-2xl font-semibold text-gray-800">فيلا بطابقين وملحق</dt>
                                    <dd class="flex items-center space-x-2">
                                        <span
                                            class="rounded bg-badge px-4 py-1.5 font-semibold text-sm">{{ __('content.for_sale') }}</span>
                                        <span
                                            class="rounded bg-badge px-4 py-1.5 font-semibold text-sm">{{ __('content.residance') }}</span>
                                    </dd>
                                </dl>

                                <p class="my-6 font-normal">بالقرب من مسجد الحسن والحسين، بوابة الجبس, طرابلس.</p>
                                <div class="mt-6 flex items-center justify-between">
                                    <dl class="flex items-center space-x-6">
                                        <div class="flex items-center space-x-1.5">
                                            <dt>
                                                <svg class="size-5 text-slate-500" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 21.4V2.6C2 2.26863 2.26863 2 2.6 2H21.4C21.7314 2 22 2.26863 22 2.6V9.4C22 9.73137 21.7314 10 21.4 10H10.6C10.2686 10 10 10.2686 10 10.6V21.4C10 21.7314 9.73137 22 9.4 22H2.6C2.26863 22 2 21.7314 2 21.4Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M16 10V7" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 10V7" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 16H7" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 10H7" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </dt>
                                            <dd>
                                                400 م.م
                                            </dd>
                                        </div>
                                        <div class="flex items-center space-x-1.5">
                                            <dt>
                                                <svg class="size-5 text-slate-500" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 21V3.6C3 3.26863 3.26863 3 3.6 3H21"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path d="M17 21H20.4C20.7314 21 21 20.7314 21 20.4V17"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M21 7V9" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21 12V14" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 21H9" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 21H14" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M3 4C3.55228 4 4 3.55228 4 3C4 2.44772 3.55228 2 3 2C2.44772 2 2 2.44772 2 3C2 3.55228 2.44772 4 3 4Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M21 4C21.5523 4 22 3.55228 22 3C22 2.44772 21.5523 2 21 2C20.4477 2 20 2.44772 20 3C20 3.55228 20.4477 4 21 4Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </dt>
                                            <dd>
                                                220 م.م
                                            </dd>
                                        </div>
                                        <div class="text-sm flex items-center space-x-1.5">
                                            <dt>
                                                <svg class="size-5 text-slate-500" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21 4V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4Z"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3 8H11V6" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M21 8H13V6" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </dt>
                                            <dd>
                                                3
                                            </dd>
                                        </div>
                                    </dl>
                                    <p class="font-bold text-primary text-lg">
                                        200,0000 د.ل
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:hidden">
                    <x-properties.card />
                </div>
                <button type="button" style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                    class="hidden order-first ltr:order-last cursor-pointer lg:flex items-center justify-center h-12 w-12 bg-white rounded text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.23853 4.5L15.7281 12L8.23853 19.5" stroke="#004274" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="mt-10 flex items-center justify-center space-x-1.5 pb-2">
                <button>
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                    </svg>
                </button>
                <button>
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                    </svg>
                </button>
                <button>
                    <svg class="fill-primary" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="8" fill="fillCurrent" />
                    </svg>
                </button>
                <button>
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                    </svg>
                </button>
                <button>
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                        <ellipse cx="8.5" cy="8" rx="8.5" ry="8" fill="#E8F1F8" />
                    </svg>
                </button>
            </div>
        </section>
        <section id="latest" class="mt-44 w-full">
            <div class="flex flex-col justify-center relative px-4 lg:px-0"
                style="background: linear-gradient(279.24deg, #004274 35.07%, #2270AB 100%);">
                <div class="absolute inset-0 overflow-hidden">
                    <x-svgs.latest />
                </div>
                <div class="relative z-20 -mt-16 mx-auto w-full max-w-7xl bg-white px-8 pb-10 pt-12 rounded-lg shadow-lg"
                    style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);">
                    <form class="flex flex-col lg:flex-row items-center gap-6 lg:gap-12">
                        <div class="flex-1 grid grid-cols-2 gap-6 lg:flex lg:items-center lg:gap-x-6">
                            <select
                                class="col-span-2 px-4 bg-[left_0.5rem_center] ltr:bg-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-full lg:w-48 rounded focus:ring-primary focus:outline-0">
                                <option value="test">{{ __('content.select.city') }}</option>
                            </select>
                            <select
                                class="px-4 bg-[left_0.5rem_center] ltr:bg-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-full lg:w-48 rounded focus:ring-primary focus:outline-0">
                                <option value="test">{{ __('content.select.town') }}</option>
                            </select>
                            <select
                                class="px-4 bg-[left_0.5rem_center] ltr:bg-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-full lg:w-56 rounded focus:ring-primary focus:outline-0">
                                <option value="test">{{ __('content.select.property_type') }}</option>
                            </select>
                            <input type="text" name="min"
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] w-40 rounded focus:ring-primary focus:outline-0"
                                placeholder="{{ __('content.price.min') }}">
                            <input type="text" name="min"
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] w-40 rounded focus:ring-primary focus:outline-0"
                                placeholder="{{ __('content.price.max') }}">
                        </div>
                        <button type="submit"
                            class="w-full appearance-none rounded-md bg-primary text-white font-bold py-2.5 px-8 uppercase text-sm">{{ __('content.filter') }}</button>
                    </form>
                </div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-3 gap-13 mt-16 lg:mx-40 -mb-20">
                    @for ($i = 0; $i < 3; $i++)
                        <x-properties.card />
                    @endfor
                </div>
            </div>
            <a href="#"
                class="mt-32 lg:hidden text-primary font-semibold flex items-center justify-center gap-2.5">
                <span>
                    {{ __('content.visit_all') }}
                </span>
                <svg class="size-6" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.5"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
        </section>
        <section id="bento" class="mt-40 lg:mt-56 px-4 lg:px-0 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 grid-row-2 gap-20">
                <div class="grid lg:grid-cols-3 lg:grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    <div class="text-primary self-center grid justify-items-center">
                        <h3 class="text-5xl font-bold">{{ __('content.discover.by_city.title') }}</h3>
                        <svg class="my-8" width="203" height="1" viewBox="0 0 203 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="202.675" y1="0.5" x2="0.000183148" y2="0.500018" stroke="#2270AB" />
                        </svg>
                        <p class="font-semibold text-gray-800 text-xl text-center max-w-xs">
                            {{ __('content.discover.by_city.subtitle') }}</p>
                    </div>
                    <div class="relative rounded-md h-[240px] w-full lg:h-[624px] lg:w-[400px] lg:row-span-2"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-md h-[240px] w-full lg:h-[296px] lg:w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                    <div class="relative rounded-md h-[240px] w-full lg:h-[296px] lg:w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-md h-[240px] w-full lg:h-[296px] lg:w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 lg:grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    <div class="relative rounded-md h-[240px] w-full lg:h-[296px] lg:w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-md h-[240px] w-full lg:h-[296px] lg:w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                    <div
                        class="order-first lg:order-none lg:row-span-2 text-primary self-center grid justify-items-center">
                        <h3 class="text-5xl font-bold">{{ __('content.discover.by_type.title') }}</h3>
                        <svg class="my-8" width="203" height="1" viewBox="0 0 203 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="202.675" y1="0.5" x2="0.000183148" y2="0.500018" stroke="#2270AB" />
                        </svg>
                        <p class="font-semibold text-gray-800 text-xl text-center max-w-xs">
                            {{ __('content.discover.by_type.subtitle') }}</p>
                    </div>
                    <div class="lg:col-span-2 rounded-md relative h-[240px] lg:h-[296px] w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                </div>
            </div>
        </section>
        <section id="contact" class="mt-50 w-full max-w-[1440px] mx-auto">
            <div class="px-4 lg:px-0 relative lg:rounded shadow-md bg-linear-[280deg] rtl:from-primary rtl:to-[#2270AB] ltr:to-primary ltr:from-[#2270AB]"
                style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);">
                <div class="absolute inset-0 overflow-hidden">
                    <x-svgs.contact />
                </div>
                <div class="absolute start-1/2 translate-x-1/2 w-max lg:start-14 -top-10 lg:-top-16">
                    <div class="bg-white p-10 font-bold text-4xl rounded text-primary"
                        style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">{{ __('content.be_in_touch') }}</div>
                </div>
                <div
                    class="relative z-10 lg:px-28 py-28 grid lg:grid-cols-3 justify-items-center gap-16 lg:gap-24 items-center">
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
