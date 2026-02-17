<x-layout-alt>
    <x-slot:header>
        <x-header-alt title="قائمة العقارات" />
    </x-slot:header>
    <x-slot:main>
        <section>
            <div class="relative z-20 -mt-16 mx-auto w-full max-w-7xl lg:max-w-3xl xl:max-w-6xl 3xl:max-w-7xl bg-white px-8 pb-6 lg:pb-10 pt-12 rounded-lg shadow-lg"
                style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);">
                <form class="flex flex-col xl:flex-row items-center gap-6 sm:gap-8 xl:gap-12">
                    <div class="flex-1 grid grid-cols-2 sm:grid-cols-6 gap-6 w-full xl:flex xl:items-center xl:gap-x-6">
                        <select
                            class="col-span-2 sm:col-span-3 w-full 3xl:w-48 px-4 bg-[left_0.5rem_center] ltr:bg-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold rounded focus:ring-primary focus:outline-0">
                            <option value="test">{{ __('content.select.city') }}</option>
                        </select>
                        <select
                            class="sm:col-span-3 w-full 3xl:w-48 px-4 bg-[left_0.5rem_center] ltr:bg-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold rounded focus:ring-primary focus:outline-0">
                            <option value="test">{{ __('content.select.town') }}</option>
                        </select>
                        <select
                            class="sm:col-span-2 w-full 3xl:w-56 px-4 bg-[left_0.5rem_center] ltr:bg-[right_0.5rem_center] appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold rounded focus:ring-primary focus:outline-0">
                            <option value="test">{{ __('content.select.property_type') }}</option>
                        </select>
                        <input type="text" name="min"
                            class="sm:col-span-2 w-full 3xl:w-40 appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] rounded focus:ring-primary focus:outline-0"
                            placeholder="{{ __('content.price.min') }}">
                        <input type="text" name="min"
                            class="sm:col-span-2 w-full 3xl:w-40 appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] rounded focus:ring-primary focus:outline-0"
                            placeholder="{{ __('content.price.max') }}">
                    </div>
                    <button type="submit"
                        class="w-full xl:w-auto 3xl:w-full appearance-none rounded-md bg-primary text-white font-bold py-2.5 px-8 uppercase text-sm">
                        <span>{{ __('content.filter') }}</span>
                    </button>
                </form>
            </div>
        </section>
        <section id="results" class="mt-24 w-full mx-auto max-w-8xl flex items-start gap-20">
            <aside class="min-w-[300px] flex-1 pt-3">
                <h4 class="text-2xl font-bold text-primary pb-6 border-b border-[#AEBBC5]">بحث متقدم</h4>
                <div class="mt-4">
                    <div class="py-6 px-3">
                        <h5 class="-mx-2 -my-3 flow-root">
                            <button type="button" command="--toggle" commandfor="filter-section-mobile-rooms"
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-[#475057]">
                                <span class="font-medium text-primary-gray">الحجرات</span>
                                <span class="ms-6 flex items-center">
                                    <svg class="size-6 in-aria-expanded:hidden" data-slot="icon" aria-hidden="true"
                                        fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                    <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon" aria-hidden="true"
                                        fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </h5>
                        <el-disclosure id="filter-section-mobile-rooms" hidden class="block pt-6">
                            <div class="space-y-4">
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">حجرة
                                        نوم رئيسية</label>
                                    <input id="filter-mobile-color-3" type="text" name="color"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="appearance-none rounded-xs border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">حجرة
                                        إضافية</label>
                                    <input id="filter-mobile-color-3" type="text" name="color"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="appearance-none rounded-xs border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3"
                                        class="min-w-0 flex-1 text-primary-gray">الصالون</label>
                                    <input id="filter-mobile-color-3" type="text" name="color"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="appearance-none rounded-xs border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3"
                                        class="min-w-0 flex-1 text-primary-gray">الصالة</label>
                                    <input id="filter-mobile-color-3" type="text" name="color"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="appearance-none rounded-xs border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                </div>
                            </div>
                        </el-disclosure>
                    </div>
                    <div class="border-t border-[#AEBBC5] py-6 px-3">
                        <h5 class="-mx-2 -my-3 flow-root">
                            <button type="button" command="--toggle" commandfor="filter-section-mobile-color"
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-[#475057]">
                                <span class="font-medium text-primary-gray">الفرش</span>
                                <span class="ms-6 flex items-center">
                                    <svg class="size-6 in-aria-expanded:hidden" data-slot="icon" aria-hidden="true"
                                        fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                    <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                        aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </h5>
                        <el-disclosure id="filter-section-mobile-color" hidden class="block pt-6">
                            <div class="space-y-4">
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">فرش
                                        كامل</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="yellow"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">نصف
                                        فرش</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="brown"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">بدون
                                        فرش</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="green"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                            </div>
                        </el-disclosure>
                    </div>
                    <div class="border-t border-[#AEBBC5] py-6 px-3">
                        <h5 class="-mx-2 -my-3 flow-root">
                            <button type="button" command="--toggle" commandfor="filter-section-mobile-color"
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-[#475057]">
                                <span class="font-medium text-primary-gray">الوحدات الخدمية</span>
                                <span class="ms-6 flex items-center">
                                    <svg class="size-6 in-aria-expanded:hidden" data-slot="icon" aria-hidden="true"
                                        fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                    <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                        aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </h5>
                        <el-disclosure id="filter-section-mobile-color" hidden class="block pt-6">
                            <div class="space-y-4">
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">فرش
                                        كامل</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="yellow"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">نصف
                                        فرش</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="brown"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">بدون
                                        فرش</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="green"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                            </div>
                        </el-disclosure>
                    </div>
                    <div class="border-t border-[#AEBBC5] py-6 px-3">
                        <h5 class="-mx-2 -my-3 flow-root">
                            <button type="button" command="--toggle" commandfor="filter-section-mobile-color"
                                class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-[#475057]">
                                <span class="font-medium text-primary-gray">المرافق الإضافية</span>
                                <span class="ms-6 flex items-center">
                                    <svg class="size-6 in-aria-expanded:hidden" data-slot="icon" aria-hidden="true"
                                        fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                    <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                        aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </h5>
                        <el-disclosure id="filter-section-mobile-color" hidden class="block pt-6">
                            <div class="space-y-4">
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">فرش
                                        كامل</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="yellow"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">نصف
                                        فرش</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="brown"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                                <div class="w-full inline-flex justify-between items-center gap-3">
                                    <label for="filter-mobile-color-3" class="min-w-0 flex-1 text-primary-gray">بدون
                                        فرش</label>
                                    <input id="filter-mobile-color-3" type="checkbox" name="color[]" value="green"
                                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                        class="col-start-1 row-start-1 appearance-none rounded-xs border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                </div>
                            </div>
                        </el-disclosure>
                    </div>
                </div>
            </aside>
            <div>
                <div class="grid grid-cols-2 gap-16">
                    @for ($i = 0; $i < 8; $i++)
                        <x-properties.card />
                    @endfor
                </div>
            </div>
        </section>
    </x-slot:main>
</x-layout-alt>
