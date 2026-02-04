<header class="bg-white">
    <nav class="flex items-center justify-between px-6 lg:px-10 py-6 lg:rounded-b mx-auto w-full lg:max-w-[1440px] bg-primary text-white"
        style="box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.16)">
        <a href="{{ route('homepage') }}">
            <x-svgs.logo-white />
        </a>
        <button type="button" class="lg:hidden size-8">
            <svg class="text-white" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.5"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round">
                </path>
            </svg>
        </button>
        <ul class="hidden lg:flex items-center space-x-6 font-bold">
            <li class="">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">الرئيسية</span>
                </span>
            </li>

            <li class="">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">سكني</span>
                </span>
            </li>
            <li class="">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">تجاري</span>
                </span>
            </li>
            <li class="">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">شقق</span>
                </span>
            </li>
            <li class="">
                <span
                    class="relative inline-block after:absolute after:-bottom-2 after:rounded-full after:left-1/2 after:-translate-x-1/2 after:w-8 after:h-[0.5px] after:bg-white after:content-['']">
                    <span class="relative">تواصل معنا</span>
                </span>
            </li>
        </ul>
    </nav>
</header>
