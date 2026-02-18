<x-layout-alt>
    <x-slot:header>
        <x-header-alt title="" />
    </x-slot:header>
    <x-slot:main>
        <section id="gallery" class="relative w-full mx-auto max-w-7xl grid grid-cols-4 grid-rows-2 gap-5">
            <div class="z-30 absolute inset-0 bg-black/10 flex items-end justify-start ps-8 pb-8">
                <button type="button"
                    class="cursor-pointer bg-white transition ease-in duration-50 group hover:bg-primary px-4 py-2 rounded-sm text-primary inline-flex space-x-2 items-center">
                    <svg class="text-primary group-hover:text-white size-5" data-slot="icon" aria-hidden="true"
                        fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="text-primary font-bold group-hover:text-white">عرض كل الصور</span>
                </button>
            </div>
            <div class="col-span-2 row-span-2 rounded-sm" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
                <a href="#" class="absolute inset-0 z-20 rounded-sm"></a>
                <div class="relative">
                    <div class="absolute inset-0 rounded-sm bg-black/30 z-10"></div>
                    <img class="h-[500px] w-full object-cover rounded-sm"
                        src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
            </div>
            <div class="col-span-1 row-span-1 rounded-sm" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
                <a href="#" class="absolute inset-0 z-20 rounded-sm"></a>
                <div class="relative">
                    <div class="absolute inset-0 rounded-sm bg-black/30 z-10"></div>
                    <img class="h-[240px] w-full object-cover rounded-sm"
                        src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
            </div>
            <div class="col-span-1 row-span-1 rounded-sm" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
                <a href="#" class="absolute inset-0 z-20 rounded-sm"></a>
                <div class="relative">
                    <div class="absolute inset-0 rounded-sm bg-black/30 z-10"></div>
                    <img class="h-[240px] w-full object-cover rounded-sm"
                        src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
            </div>
            <div class="col-span-1 row-span-1 rounded-sm" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
                <a href="#" class="absolute inset-0 z-20 rounded-sm"></a>
                <div class="relative">
                    <div class="absolute inset-0 rounded-sm bg-black/30 z-10"></div>
                    <img class="h-[240px] w-full object-cover rounded-sm"
                        src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
            </div>
            <div class="col-span-1 row-span-1 rounded-sm" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
                <a href="#" class="absolute inset-0 z-20 rounded-sm"></a>
                <div class="relative">
                    <div class="absolute inset-0 rounded-sm bg-black/30 z-10"></div>
                    <img class="h-[240px] w-full object-cover rounded-sm"
                        src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </div>
            </div>
        </section>
        <section id="details" class="mt-20 w-full mx-auto max-w-7xl">
            <article>
                <section class="pb-6 border-b border-[#9BA2A8] flex items-start justify-between">
                    <div>
                        <h2 class="text-3xl font-bold text-primary">فيلا أرضية دورين وملحق</h2>
                        <p class="mt-4 text-lg text-primary-gray">بالقرب من مسجد الحسن والحسين، بوابة الجبس، طرابلس.
                        </p>
                    </div>
                    <p class="text-3xl font-bold text-primary">200.000 د.ل</p>
                </section>
                <section class="mt-8 grid grid-cols-12 gap-10 items-start">
                    <div class="bg-black col-span-9">

                    </div>
                    <aside class="col-span-3 grid gap-8">
                        <dl class="bg-white rounded-sm py-3 px-6 grid gap-3"
                            style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
                            <div class="py-6 border-b border-[#9BA2A8] grid gap-6 grid-cols-2 last:border-0">
                                <dt class="text-primary-gray font-bold text-lg">رقم الإعلان:</dt>
                                <dd class="text-primary-gray font-normal text-lg">#2024-2232</dd>
                            </div>
                            <div class="pt-3 pb-6 border-b border-[#9BA2A8] grid gap-6 grid-cols-2 last:border-0">
                                <dt class="text-primary-gray font-bold text-lg text-nowrap">تصنيف العقار:</dt>
                                <dd class="text-primary-gray font-normal text-lg">سكني</dd>
                            </div>
                            <div class="pt-3 pb-6 border-b border-[#9BA2A8] grid gap-6 grid-cols-2 last:border-0">
                                <dt class="text-primary-gray font-bold text-lg">العرض:</dt>
                                <dd class="text-primary-gray font-normal text-lg">بيع</dd>
                            </div>
                            <div class="pt-3 pb-6 border-b border-[#9BA2A8] grid gap-6 grid-cols-2 last:border-0">
                                <dt class="text-primary-gray font-bold text-lg">تاريخ التوفير:</dt>
                                <dd class="text-primary-gray font-normal text-lg">2025/01/02</dd>
                            </div>
                            <div class="pt-3 pb-6 border-b border-[#9BA2A8] grid gap-6 grid-cols-2 last:border-0">
                                <dt class="text-primary-gray font-bold text-lg">تاريخ الإعلان:</dt>
                                <dd class="text-primary-gray font-normal text-lg">2025/01/02</dd>
                            </div>
                        </dl>
                        <div class="grid gap-6">
                            <button type="button"
                                class="cursor-pointer group hover:bg-primary transition ease-in duration-75 inline-flex items-center justify-center space-x-3 w-full bg-white rounded-sm py-4 px-3"
                                style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25)">
                                <span class="text-primary group-hover:text-white text-lg font-bold">مشاركة</span>
                                <svg class="size-6 text-primary group-hover:text-white" data-slot="icon"
                                    aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button type="button"
                                class="cursor-pointer group inline-flex items-center justify-center space-x-3 w-full rounded-sm py-4 px-3 bg-primary hover:bg-white transition ease-in duration-75 "
                                style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25)">
                                <span class="text-white group-hover:text-primary text-lg font-bold">استفسار عن
                                    العقار</span>
                                <svg class="size-6 text-white group-hover:text-primary" data-slot="icon"
                                    aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </aside>
                </section>
            </article>

        </section>
    </x-slot:main>
</x-layout-alt>
