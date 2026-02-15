<x-layout-alt>
    <x-slot:header>
        <x-header-alt title="تواصل معنا" />
    </x-slot:header>
    <x-slot:main>
        <section id="contact" class="mt-50 sm:mt-40 lg:mt-50 w-full xl:max-w-6xl 2xl:max-w-[1440px] mx-auto">
            <div class="px-4 lg:px-0 relative xl:rounded shadow-md bg-linear-[280deg] rtl:from-primary rtl:to-[#2270AB] ltr:to-primary ltr:from-[#2270AB]"
                style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);">
                <div class="absolute inset-0 overflow-hidden">
                    <x-svgs.contact />
                </div>

                <div class="z-20 absolute start-1/2 translate-x-1/2 w-max md:start-14 -top-24 md:-top-16 md:translate-0">
                    <div class="bg-white py-8 pr-8 pl-2 rounded text-primary"
                        style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">
                        <h3 class="font-bold text-2xl">
                            {{ __('content.contact_details') }}
                        </h3>
                        <p class="mt-3 max-w-xs font-medium text-lg">{{ __('content.welcome_message') }}</p>
                    </div>
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
        <section id="contact"
            class="mt-50 sm:mt-40 lg:mt-50 w-full max-w-4xl xl:max-w-6xl 2xl:max-w-[1440px] mx-auto">
            <div class="relative xl:rounded shadow-md" style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);">
                <div
                    class="z-20 absolute end-1/2 -translate-x-1/2 w-max md:start-auto md:end-14 -top-24 md:-top-16 md:translate-x-0">
                    <div class="bg-white py-8 pr-8 pl-2 rounded text-primary"
                        style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">
                        <h3 class="font-bold text-2xl">
                            {{ __('content.city_location') }}
                        </h3>
                        <p class="mt-3 max-w-xs font-medium text-lg">{{ __('content.location_details') }}</p>
                    </div>
                </div>
                <div class="relative z-10 aspect-video w-full xl:rounded">
                    <iframe class="w-full h-full xl:rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d837.8729570250578!2d13.086407644550178!3d32.85870420399442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8ed0073f3de2d%3A0xd72dec69dee293f8!2z2KzZhtin2Kog2YTZhNiu2K_Zhdin2Kog2KfZhNi52YLYp9ix2YrYqQ!5e0!3m2!1sen!2sly!4v1771184376676!5m2!1sen!2sly"
                        width="600" height="450" style="border:0;" allowfullscreen="true" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </x-slot:main>
</x-layout-alt>
