<div
    class="w-110 bg-white rounded-sm pt-10 px-16 md:px-10 pb-4 grid gap-y-6 justify-items-center items-start content-start">
    <input type="text" name="name"
        class="w-full appearance-none bg-[#f1f1f1] placeholder:text-primary-gray border-0 p-4 rounded-sm shadow capitalize"
        placeholder="{{ __('content.name') }}" />
    <input type="text" name="message" value=""
        class="w-full appearance-none bg-[#f1f1f1] placeholder:text-primary-gray border-0 p-4 rounded-sm shadow capitalize"
        placeholder="{{ __('content.message.title') }}" />
    <textarea placeholder="{{ __('content.message.body') }}" rows="2" cols=""
        class="w-full appearance-none bg-[#f1f1f1] placeholder:text-primary-gray border-0 p-4 rounded-sm shadow capitalize"></textarea>
    <button type="submit"
        class="bg-primary text-white py-3 px-12 rounded-sm shadow font-semibold uppercase">{{ __('content.send') }}</button>
</div>
