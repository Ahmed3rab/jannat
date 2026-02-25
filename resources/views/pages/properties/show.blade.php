<x-layout-alt>
    <x-slot:header>
        <x-header-alt title="" />
    </x-slot:header>
    <x-slot:main>
        <section id="gallery" class="relative w-full mx-auto max-w-7xl grid grid-cols-4 grid-rows-2 gap-5">
            <div class="z-30 absolute inset-0 flex items-end justify-start ps-8 pb-8">
                <x-properties.details.gallery />
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
                    <div class="col-span-9 space-y-16">
                        <x-properties.details.basic />
                        <x-properties.details.description />
                        <div x-data="{
                            selectedId: null,
                            init() {
                                // Set the first available tab on the page on page load.
                                this.$nextTick(() => this.select(this.$id('tab', 1)))
                            },
                            select(id) {
                                this.selectedId = id
                            },
                            isSelected(id) {
                                return this.selectedId === id
                            },
                            whichChild(el, parent) {
                                return Array.from(parent.children).indexOf(el) + 1
                            }
                        }" x-id="['tab']">
                            <!-- Tab List -->
                            <ul x-ref="tablist" @keydown.right.prevent.stop="$focus.wrap().next()"
                                @keydown.home.prevent.stop="$focus.first()"
                                @keydown.page-up.prevent.stop="$focus.first()"
                                @keydown.left.prevent.stop="$focus.wrap().prev()"
                                @keydown.end.prevent.stop="$focus.last()"
                                @keydown.page-down.prevent.stop="$focus.last()" role="tablist"
                                class="mb-[0.5px] flex items-stretch overflow-x-auto">
                                <!-- Tab -->
                                <li>
                                    <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                        @click="select($el.id)" @mousedown.prevent @focus="select($el.id)"
                                        type="button" :tabindex="isSelected($el.id) ? 0 : -1"
                                        :aria-selected="isSelected($el.id)"
                                        :class="isSelected($el.id) ? 'text-primary border-primary-gray/20' :
                                            'text-primary-gray border-transparent'"
                                        class="cursor-pointer font-semibold hover:text-primary inline-flex rounded-t-sm border-t border-r border-l px-5 py-2.5"
                                        role="tab">الحجرات</button>
                                </li>
                                <li>
                                    <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                        @click="select($el.id)" @mousedown.prevent @focus="select($el.id)"
                                        type="button" :tabindex="isSelected($el.id) ? 0 : -1"
                                        :aria-selected="isSelected($el.id)"
                                        :class="isSelected($el.id) ? 'text-primary border-primary-gray/20' :
                                            'text-primary-gray border-transparent'"
                                        class="cursor-pointer font-semibold hover:text-primary inline-flex rounded-t-sm border-t border-r border-l px-5 py-2.5"
                                        role="tab">الوحدات الخدمية</button>
                                </li>
                                <li>
                                    <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                        @click="select($el.id)" @mousedown.prevent @focus="select($el.id)"
                                        type="button" :tabindex="isSelected($el.id) ? 0 : -1"
                                        :aria-selected="isSelected($el.id)"
                                        :class="isSelected($el.id) ? 'text-primary border-primary-gray/20' :
                                            'text-primary-gray border-transparent'"
                                        class="cursor-pointer font-semibold hover:text-primary inline-flex rounded-t-sm border-t border-r border-l px-5 py-2.5"
                                        role="tab">المرافق</button>
                                </li>
                                <li>
                                    <button :id="$id('tab', whichChild($el.parentElement, $refs.tablist))"
                                        @click="select($el.id)" @mousedown.prevent @focus="select($el.id)"
                                        type="button" :tabindex="isSelected($el.id) ? 0 : -1"
                                        :aria-selected="isSelected($el.id)"
                                        :class="isSelected($el.id) ? 'text-primary border-primary-gray/20' :
                                            'text-primary-gray border-transparent'"
                                        class="cursor-pointer font-semibold hover:text-primary inline-flex rounded-t-sm border-t border-r border-l px-5 py-2.5"
                                        role="tab">العنوان</button>
                                </li>
                            </ul>

                            <!-- Panels -->
                            <div role="tabpanels" class="bg-white rounded-sm pt-3 pb-10 px-6"
                                style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25)">
                                <!-- Panel -->
                                <dl x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                                    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
                                    <x-properties.details.rooms />
                                </dl>
                                <dl x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                                    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
                                    <x-properties.details.services />
                                </dl>
                                <dl x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                                    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
                                    <x-properties.details.facilities />
                                </dl>
                                <dl x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
                                    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))" role="tabpanel">
                                    <x-properties.details.location />
                                </dl>
                            </div>
                        </div>
                    </div>
                    <aside class="col-span-3 grid gap-8">
                        <x-properties.details.aside />
                        <div class="grid gap-6">
                            <x-properties.share />
                            <x-properties.enquiry />
                        </div>
                    </aside>
                </section>
            </article>
        </section>
    </x-slot:main>
</x-layout-alt>
