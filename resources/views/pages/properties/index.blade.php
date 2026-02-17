<x-layout-alt>
    <x-slot:header>
        <x-header-alt title="قائمة العقارات" />
    </x-slot:header>
    <x-slot:main>
        <section>
            <div class="relative z-20 mx-auto w-full max-w-7xl lg:max-w-3xl xl:max-w-6xl 3xl:max-w-7xl bg-white px-8 pb-6 lg:pb-10 pt-12 rounded-sm shadow-lg"
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
                        class="w-full xl:w-auto 3xl:w-full appearance-none rounded-sm bg-primary text-white font-bold py-2.5 px-8 uppercase text-sm">
                        <span>{{ __('content.filter') }}</span>
                    </button>
                </form>
            </div>
        </section>
        <section id="results" class="mt-24 w-full mx-auto max-w-8xl">

            <el-dialog>
                <dialog id="mobile-filters" class="overflow-hidden backdrop:bg-transparent xl:hidden">
                    <el-dialog-backdrop
                        class="fixed inset-0 bg-black/25 transition-opacity duration-300 ease-linear data-closed:opacity-0"></el-dialog-backdrop>

                    <div tabindex="0" class="fixed inset-0 flex focus:outline-none">
                        <el-dialog-panel
                            class="relative ml-auto flex size-full max-w-xs transform flex-col overflow-y-auto bg-white pt-4 pb-6 shadow-xl transition duration-300 ease-in-out data-closed:translate-x-full">
                            <div class="flex items-center justify-between px-4">
                                <h2 class="text-lg font-medium text-gray-900">الخيارات</h2>
                                <button type="button" command="close" commandfor="mobile-filters"
                                    class="relative -me-2 flex size-10 items-center justify-center rounded-sm bg-white p-2 text-gray-400 hover:bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:outline-hidden">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Close menu</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Filters -->
                            <form class="mt-4 border-t border-gray-200">
                                <div class="py-6 px-4">
                                    <h5 class="-mx-2 -my-3 flow-root">
                                        <button type="button" command="--toggle"
                                            commandfor="filter-section-mobile-rooms"
                                            class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-[#475057]">
                                            <span class="font-medium text-primary-gray">الحجرات</span>
                                            <span class="ms-6 flex items-center">
                                                <svg class="size-6 in-aria-expanded:hidden" data-slot="icon"
                                                    aria-hidden="true" fill="none" stroke-width="1.5"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                                <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                                    aria-hidden="true" fill="none" stroke-width="1.5"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </button>
                                    </h5>
                                    <el-disclosure id="filter-section-mobile-rooms" hidden class="block pt-6">
                                        <div class="space-y-4">
                                            <div class="w-full inline-flex justify-between items-center gap-3">
                                                <label for="filter-mobile-color-3"
                                                    class="min-w-0 flex-1 text-primary-gray">حجرة
                                                    نوم رئيسية</label>
                                                <input id="filter-mobile-color-3" type="text" name="color"
                                                    style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                                    class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                            </div>
                                            <div class="w-full inline-flex justify-between items-center gap-3">
                                                <label for="filter-mobile-color-3"
                                                    class="min-w-0 flex-1 text-primary-gray">حجرة
                                                    إضافية</label>
                                                <input id="filter-mobile-color-3" type="text" name="color"
                                                    style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                                    class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                            </div>
                                            <div class="w-full inline-flex justify-between items-center gap-3">
                                                <label for="filter-mobile-color-3"
                                                    class="min-w-0 flex-1 text-primary-gray">الصالون</label>
                                                <input id="filter-mobile-color-3" type="text" name="color"
                                                    style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                                    class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                            </div>
                                            <div class="w-full inline-flex justify-between items-center gap-3">
                                                <label for="filter-mobile-color-3"
                                                    class="min-w-0 flex-1 text-primary-gray">الصالة</label>
                                                <input id="filter-mobile-color-3" type="text" name="color"
                                                    style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                                    class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                            </div>
                                        </div>
                                    </el-disclosure>
                                </div>
                            </form>
                        </el-dialog-panel>
                    </div>
                </dialog>
            </el-dialog>
            <div class="flex flex-col xl:flex-row xl:items-start gap-12 xl:gap-20 px-6 lg:px-10 2xl:px-0">
                <aside class="min-w-[300px] flex-1 xl:pt-3">
                    <div class="flex  justify-between pb-6 border-b border-[#AEBBC5]">
                        <h4 class="text-2xl font-bold text-primary">بحث متقدم</h4>
                        <button type="button" command="show-modal" commandfor="mobile-filters"
                            class="cursor-pointer flex items-center gap-2.5 py-1.5 px-2 bg-white  rounded-sm text-primary-gray hover:text-gray-500 xl:hidden">
                            <span>الخيارات</span>
                            <svg class="size-5" data-slot="icon" aria-hidden="true" fill="none"
                                stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-4 hidden xl:block">
                        <div class="py-6 px-3">
                            <h5 class="-mx-2 -my-3 flow-root">
                                <button type="button" command="--toggle" commandfor="filter-section-mobile-rooms"
                                    class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-[#475057]">
                                    <span class="font-medium text-primary-gray">الحجرات</span>
                                    <span class="ms-6 flex items-center">
                                        <svg class="size-6 in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h5>
                            <el-disclosure id="filter-section-mobile-rooms" hidden class="block pt-6">
                                <div class="space-y-4">
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">حجرة
                                            نوم رئيسية</label>
                                        <input id="filter-mobile-color-3" type="text" name="color"
                                            style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">حجرة
                                            إضافية</label>
                                        <input id="filter-mobile-color-3" type="text" name="color"
                                            style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">الصالون</label>
                                        <input id="filter-mobile-color-3" type="text" name="color"
                                            style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">الصالة</label>
                                        <input id="filter-mobile-color-3" type="text" name="color"
                                            style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="appearance-none rounded-sm border-0 bg-[#F1F1F1] text-black font-medium text-sm focus:outline-2 focus:outline-primary focus-visible:outline-2 focus-visible:outline-offset-1 focus-visible:outline-primary forced-colors:appearance-auto size-6 px-0.5 py-1 text-center" />
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
                                        <svg class="size-6 in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h5>
                            <el-disclosure id="filter-section-mobile-color" hidden class="block pt-6">
                                <div class="space-y-4">
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">فرش
                                            كامل</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="yellow" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">نصف
                                            فرش</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="brown" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">بدون
                                            فرش</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="green" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
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
                                        <svg class="size-6 in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h5>
                            <el-disclosure id="filter-section-mobile-color" hidden class="block pt-6">
                                <div class="space-y-4">
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">فرش
                                            كامل</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="yellow" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">نصف
                                            فرش</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="brown" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">بدون
                                            فرش</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="green" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
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
                                        <svg class="size-6 in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        <svg class="size-6 not-in-aria-expanded:hidden" data-slot="icon"
                                            aria-hidden="true" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12h14" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                            </h5>
                            <el-disclosure id="filter-section-mobile-color" hidden class="block pt-6">
                                <div class="space-y-4">
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">فرش
                                            كامل</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="yellow" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">نصف
                                            فرش</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="brown" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                    <div class="w-full inline-flex justify-between items-center gap-3">
                                        <label for="filter-mobile-color-3"
                                            class="min-w-0 flex-1 text-primary-gray">بدون
                                            فرش</label>
                                        <input id="filter-mobile-color-3" type="checkbox" name="color[]"
                                            value="green" style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25);"
                                            class="col-start-1 row-start-1 appearance-none rounded-sm border-0 bg-[#F1F1F1] checked:border-primary checked:bg-primary indeterminate:border-primary indeterminate:bg-primary focus-visible:outline-1 focus-visible:outline-offset-1 focus-visible:outline-primary disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto size-6" />
                                    </div>
                                </div>
                            </el-disclosure>
                        </div>
                    </div>
                </aside>

                <div>
                    <div class="grid md:grid-cols-2 items-center gap-16 md:gap-x-8 xl:gap-16">
                        @for ($i = 0; $i < 8; $i++)
                            <x-properties.card />
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </x-slot:main>
</x-layout-alt>
