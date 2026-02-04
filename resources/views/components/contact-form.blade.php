<div class="bg-white rounded pt-10 px-16 md:px-10 pb-4 grid gap-y-6 justify-items-center items-start content-start">
    <input type="text" name="name"
        class="appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded shadow"
        placeholder="{{ __('content.name') }}" />
    <input type="text" name="message" value=""
        class="appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded shadow"
        placeholder="{{ __('content.message.title') }}" />
    <textarea placeholder="{{ __('content.message.body') }}" rows="2" cols=""
        class="appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded shadow"></textarea>
    <button type="submit" class="bg-primary text-white py-3 px-12 rounded shadow font-semibold">ارسال</button>
</div>
