<div x-data="{ open: false }" class="flex justify-center">
    <!-- Trigger -->
    <button x-on:click="open = true" type="button"
        class="cursor-pointer group inline-flex items-center justify-center space-x-3 w-full rounded-sm py-4 px-3 bg-primary hover:bg-white transition ease-in duration-75 "
        style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25)">
        <span class="text-white group-hover:text-primary text-lg font-bold">استفسار عن
            العقار</span>
        <svg class="size-6 text-white group-hover:text-primary" data-slot="icon" aria-hidden="true" fill="none"
            stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"
                stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </button>

    <!-- Modal -->
    <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog"
        aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-50 overflow-y-auto">
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black/40"></div>

        <!-- Panel -->
        <div x-show="open" x-transition x-on:click="open = false"
            class="relative flex min-h-screen items-center justify-center p-4">
            <div x-on:click.stop x-trap.noscroll.inert="open"
                class="relative min-w-96 max-w-xl rounded-sm bg-white shadow-lg py-6">
                <!-- Title -->
                <h2 class="font-medium text-gray-800 pb-4 px-6 border-b border-gray-300" :id="$id('modal-title')">
                    استفسار عن
                    الإعلان رقم: #2024-23232</h2>

                <!-- Content -->
                <div class="mt-6 text-gray-500 max-w-xs mx-auto px-6 space-y-6">
                    <input type="text" name="name"
                        class="w-full appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded-sm shadow focus:ring-primary"
                        placeholder="{{ __('content.name') }}" />
                    <input type="text" name="message" value=""
                        class="w-full appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded-sm shadow focus:ring-primary"
                        placeholder="{{ __('content.message.phone_number') }}" />
                    <textarea placeholder="{{ __('content.message.body') }}" rows="2" cols=""
                        class="w-full appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded-sm shadow focus:ring-primary"></textarea>
                </div>

                <!-- Buttons -->
                <div class="mt-8 px-6 flex justify-end space-x-2">
                    <button type="button" x-on:click="open = false"
                        class="cursor-pointer relative flex items-center justify-center gap-2 whitespace-nowrap rounded-sm border border-transparent bg-transparent px-4 py-2 text-gray-800 hover:bg-gray-800/10">إلغاء</button>

                    <button type="button" x-on:click="open = false"
                        class="cursor-pointer relative flex items-center justify-center gap-2 whitespace-nowrap rounded-sm border border-transparent bg-primary px-4 py-2 text-white hover:bg-white hover:text-primary hover:border-primary transition ease-in duration-75">إرسال</button>
                </div>
            </div>
        </div>
    </div>
</div>
