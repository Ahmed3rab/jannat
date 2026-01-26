<x-layout>
    <x-slot:header>
        @include('components.header')
    </x-slot:header>
    <x-slot:main>
        <section class="mx-auto w-full max-w-[1440px]">
            <div class="flex items-center justify-between space-x-20">
                <button type="button" style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                    class="cursor-pointer flex items-center justify-center h-12 w-12 bg-white rounded text-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7284 19.5L8.23877 12L15.7284 4.5" stroke="#004274" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="flex-1 flex items-center justify-start -space-x-14">
                    <div class="rounded h-[522px] w-[696px] relative"
                        style="box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.25)">
                        <div class="rounded absolute inset-0 bg-black/20"></div>
                        <img class="rounded h-full w-full object-cover"
                            src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                    </div>
                    <div class="z-20 flex-1">
                        <div class="relative text-primary-gray px-8 py-9 bg-white rounded-tr-md rounded-b-md" style="box-shadow: 0px 3px 14px 2px rgba(0, 66, 116, 0.28);">
                            <div class="absolute bottom-full start-0 bg-promoted-badge text-primary font-semibold px-6 py-2 rounded-t">
                                <span>مميز</span>
                            </div>
                            <dl class="flex items-center justify-between">
                                <dt class="text-2xl font-semibold text-gray-800">Villa With two stories</dt>
                                <dd class="flex items-center space-x-2">
                                    <span class="rounded bg-badge px-4 py-1.5 font-semibold text-sm">For
                                        Sale</span>
                                    <span class="rounded bg-badge px-4 py-1.5 font-semibold text-sm">For
                                        Sale</span>
                                </dd>
                            </dl>
                            <p class="my-6">Near Masjid Al-Hassan & Al-Hussain, Bawabet Al-Jebs, Tripoli.</p>
                            <div class="flex items-center justify-between">
                                <dl class="flex items-center space-x-6">
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 21.4V2.6C2 2.26863 2.26863 2 2.6 2H21.4C21.7314 2 22 2.26863 22 2.6V9.4C22 9.73137 21.7314 10 21.4 10H10.6C10.2686 10 10 10.2686 10 10.6V21.4C10 21.7314 9.73137 22 9.4 22H2.6C2.26863 22 2 21.7314 2 21.4Z"
                                                    stroke="#004274" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16 10V7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10V7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 16H7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10H7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            400 SM
                                        </dd>
                                    </div>
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 21V3.6C3 3.26863 3.26863 3 3.6 3H21" stroke="#004274"
                                                    stroke-width="1.5" />
                                                <path d="M17 21H20.4C20.7314 21 21 20.7314 21 20.4V17" stroke="#004274"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 7V9" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 12V14" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 21H9" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 21H14" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 4C3.55228 4 4 3.55228 4 3C4 2.44772 3.55228 2 3 2C2.44772 2 2 2.44772 2 3C2 3.55228 2.44772 4 3 4Z"
                                                    fill="#004274" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z"
                                                    fill="#004274" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M21 4C21.5523 4 22 3.55228 22 3C22 2.44772 21.5523 2 21 2C20.4477 2 20 2.44772 20 3C20 3.55228 20.4477 4 21 4Z"
                                                    fill="#004274" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </dt>
                                        <dd>
                                            220 SM
                                        </dd>
                                    </div>
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 4V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4Z"
                                                    stroke="#004274" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3 8H11V6" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 8H13V6" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            3
                                        </dd>
                                    </div>
                                </dl>
                                <p class="text-xl font-bold text-primary">
                                    200,0000 LYD
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" style="box-shadow: 0px 1px 1px 1px rgba(0, 66, 116, 0.19)"
                    class="cursor-pointer flex items-center justify-center h-12 w-12 bg-white rounded text-primary">
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
        <section id="latest" class="flex flex-col justify-center mt-44 w-full bg-blue-800">
            <div class="-mt-20 flex flex-col">
                <div
                    class="mx-auto w-full max-w-[531px] bg-black flex justify-center px-4 py-4 -mb-8 z-20 rounded-lg shadow-lg">
                    <div>
                        <div class="grid grid-cols-1 sm:hidden">
                            <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                            <select aria-label="Select a tab"
                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-2 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                                <option>My Account</option>
                                <option>Company</option>
                                <option selected>Team Members</option>
                                <option>Billing</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true"
                                class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end fill-gray-500">
                                <path
                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="hidden sm:block">
                            <nav aria-label="Tabs" class="flex space-x-4">
                                <!-- Current: "bg-indigo-100 text-indigo-700", Default: "text-gray-500 hover:text-gray-700" -->
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">My
                                    Account</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Company</a>
                                <a href="#" aria-current="page"
                                    class="rounded-md bg-indigo-100 px-3 py-2 text-sm font-medium text-indigo-700">Team
                                    Members</a>
                                <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">Billing</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="mx-auto w-full max-w-7xl bg-amber-300 px-8 pb-10 pt-12 rounded-lg shadow-lg">
                    <form class="flex items-center space-x-12">
                        <div class="flex items-center space-x-6">
                            <select
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-52 rounded focus:ring-blue-800 focus:outline-0">
                                <option value="test">Select City</option>
                            </select>
                            <select
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-52 rounded focus:ring-blue-800 focus:outline-0">
                                <option value="test">Select Town</option>
                            </select>
                            <select
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-52 rounded focus:ring-blue-800 focus:outline-0">
                                <option value="test">Select Property Type</option>
                            </select>
                            <input type="text" name="min"
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] w-32 rounded focus:ring-blue-800 focus:outline-0"
                                placeholder="Min Price">
                            <input type="text" name="min"
                                class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] w-32 rounded focus:ring-blue-800 focus:outline-0"
                                placeholder="Max Price">
                        </div>
                        <button type="submit"
                            class="appearance-none rounded-md bg-blue-800 text-white font-bold py-2.5 px-8">
                            Filter Results
                        </button>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-13 mt-16 mx-40 -mb-20">
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-[500px] rounded-md shadow-xl bg-white">
                        <div class="relative">
                            <div class="absolute inset-0 rounded-t-md bg-black/40 z-10"></div>
                            <div class="absolute top-6 end-6 z-20">
                                <dl class="flex items-center justify-between">
                                    <dd class="flex items-center space-x-2">
                                        <span class="bg-blue-400 px-4 py-1.5 text-gray-700 font-medium text-sm">For
                                            Sale</span>
                                        <span class="bg-blue-400 px-4 py-1.5 text-gray-700 font-medium text-sm">For
                                            Sale</span>
                                    </dd>
                                </dl>
                            </div>
                            <img class="h-[364px] w-full object-cover rounded-t-md"
                                src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" />
                        </div>
                        <div class="pb-10 px-8 pt-6">
                            <a href="#" class="text-xl font-semibold">Villa With Two Stories</a>
                            <p class="mt-2 font-normal">Near Masjid Al-Hassan & Al-Hussain, Bawabet Al-Jebs, Tripoli.
                            </p>

                            <div class="mt-6 flex items-center justify-between">
                                <dl class="flex items-center space-x-6">
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 21.4V2.6C2 2.26863 2.26863 2 2.6 2H21.4C21.7314 2 22 2.26863 22 2.6V9.4C22 9.73137 21.7314 10 21.4 10H10.6C10.2686 10 10 10.2686 10 10.6V21.4C10 21.7314 9.73137 22 9.4 22H2.6C2.26863 22 2 21.7314 2 21.4Z"
                                                    stroke="#004274" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16 10V7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10V7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 16H7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10H7" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            400 SM
                                        </dd>
                                    </div>
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 21V3.6C3 3.26863 3.26863 3 3.6 3H21" stroke="#004274"
                                                    stroke-width="1.5" />
                                                <path d="M17 21H20.4C20.7314 21 21 20.7314 21 20.4V17" stroke="#004274"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M21 7V9" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 12V14" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 21H9" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 21H14" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 4C3.55228 4 4 3.55228 4 3C4 2.44772 3.55228 2 3 2C2.44772 2 2 2.44772 2 3C2 3.55228 2.44772 4 3 4Z"
                                                    fill="#004274" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z"
                                                    fill="#004274" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M21 4C21.5523 4 22 3.55228 22 3C22 2.44772 21.5523 2 21 2C20.4477 2 20 2.44772 20 3C20 3.55228 20.4477 4 21 4Z"
                                                    fill="#004274" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </dt>
                                        <dd>
                                            220 SM
                                        </dd>
                                    </div>
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 4V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4Z"
                                                    stroke="#004274" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3 8H11V6" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 8H13V6" stroke="#004274" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            3
                                        </dd>
                                    </div>
                                </dl>
                                <p class="font-bold text-blue-700">
                                    200,0000 LYD
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
        <section id="bento" class="mt-56 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 grid-row-2 gap-20">
                <div class="grid grid-cols-3 grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="bg-blue-600  h-60 w-60 @if ($i == 1) h-full row-span-2 @endif">
                        </div>
                    @endfor
                </div>

                <div class="grid grid-cols-3 grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="bg-blue-600  h-60 w-60 @if ($i == 0) h-full row-span-2 @endif @if ($i == 3) w-full col-span-2 @endif">
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        <section id="contact" class="relative mt-50 w-full max-w-[1440px] mx-auto bg-blue-900 rounded shadow-md">
            <div class="absolute start-14 -top-16">
                <div class="bg-white p-10 font-bold text-4xl rounded text-blue-900"
                    style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">كن على تواصل</div>
            </div>
            <div class="px-28 py-28 grid grid-cols-3 justify-items-center gap-24 items-center">
                <dl class="grid grid-cols-1 gap-8 justify-items-start items-start">
                    <div class="flex items-center space-x-8 text-white font-semibold">
                        <dt>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 14C20 15.0609 19.5786 16.0783 18.8284 16.8284C18.0783 17.5786 17.0609 18 16 18C14.9391 18 13.9217 17.5786 13.1716 16.8284C12.4214 16.0783 12 15.0609 12 14C12 12.9391 12.4214 11.9217 13.1716 11.1716C13.9217 10.4214 14.9391 10 16 10C17.0609 10 18.0783 10.4214 18.8284 11.1716C19.5786 11.9217 20 12.9391 20 14Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M26 14C26 23.5227 16 29 16 29C16 29 6 23.5227 6 14C6 11.3478 7.05357 8.8043 8.92893 6.92893C10.8043 5.05357 13.3478 4 16 4C18.6522 4 21.1957 5.05357 23.0711 6.92893C24.9464 8.8043 26 11.3478 26 14Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </dt>
                        <dd>شارع القبب، السياحية، طرابلس، ليبا.</dd>
                    </div>
                    <div class="flex items-center space-x-8 text-white font-semibold">
                        <dt>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 9C3 20.0453 11.9547 29 23 29H26C26.7957 29 27.5587 28.6839 28.1213 28.1213C28.6839 27.5587 29 26.7957 29 26V24.1707C29 23.4827 28.532 22.8827 27.864 22.716L21.9667 21.2413C21.38 21.0947 20.764 21.3147 20.4027 21.7973L19.1093 23.5213C18.7333 24.0227 18.084 24.244 17.496 24.028C15.3132 23.2255 13.3309 21.9581 11.6864 20.3136C10.0419 18.6691 8.7745 16.6868 7.972 14.504C7.756 13.916 7.97733 13.2667 8.47867 12.8907L10.2027 11.5973C10.6867 11.236 10.9053 10.6187 10.7587 10.0333L9.284 4.136C9.20285 3.81159 9.01563 3.5236 8.75207 3.31778C8.48851 3.11196 8.16374 3.00011 7.82933 3H6C5.20435 3 4.44129 3.31607 3.87868 3.87868C3.31607 4.44129 3 5.20435 3 6V9Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </dt>
                        <dd>+218-911234567</dd>
                    </div>
                    <div class="flex items-center space-x-8 text-white font-semibold">
                        <dt>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 9C3 20.0453 11.9547 29 23 29H26C26.7957 29 27.5587 28.6839 28.1213 28.1213C28.6839 27.5587 29 26.7957 29 26V24.1707C29 23.4827 28.532 22.8827 27.864 22.716L21.9667 21.2413C21.38 21.0947 20.764 21.3147 20.4027 21.7973L19.1093 23.5213C18.7333 24.0227 18.084 24.244 17.496 24.028C15.3132 23.2255 13.3309 21.9581 11.6864 20.3136C10.0419 18.6691 8.7745 16.6868 7.972 14.504C7.756 13.916 7.97733 13.2667 8.47867 12.8907L10.2027 11.5973C10.6867 11.236 10.9053 10.6187 10.7587 10.0333L9.284 4.136C9.20285 3.81159 9.01563 3.5236 8.75207 3.31778C8.48851 3.11196 8.16374 3.00011 7.82933 3H6C5.20435 3 4.44129 3.31607 3.87868 3.87868C3.31607 4.44129 3 5.20435 3 6V9Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </dt>
                        <dd>+218-911234567</dd>
                    </div>
                    <div class="flex items-center space-x-8 text-white font-semibold">
                        <dt>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29 9V23C29 23.7956 28.6839 24.5587 28.1213 25.1213C27.5587 25.6839 26.7957 26 26 26H6C5.20435 26 4.44129 25.6839 3.87868 25.1213C3.31607 24.5587 3 23.7956 3 23V9M29 9C29 8.20435 28.6839 7.44129 28.1213 6.87868C27.5587 6.31607 26.7957 6 26 6H6C5.20435 6 4.44129 6.31607 3.87868 6.87868C3.31607 7.44129 3 8.20435 3 9M29 9V9.324C29.0001 9.83619 28.869 10.3399 28.6192 10.7871C28.3695 11.2342 28.0094 11.61 27.5733 11.8787L17.5733 18.032C17.1003 18.3234 16.5556 18.4777 16 18.4777C15.4444 18.4777 14.8997 18.3234 14.4267 18.032L4.42667 11.88C3.99056 11.6114 3.63049 11.2356 3.38076 10.7884C3.13102 10.3412 2.99994 9.83753 3 9.32533V9"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </dt>
                        <dd>info@jannatlibya.ly</dd>
                    </div>
                </dl>
                <svg width="2" height="324" viewBox="0 0 2 324" fill="none"
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
                <div class="bg-white pt-10 px-16 pb-4 grid gap-y-6 justify-items-center items-start content-start">
                    <input type="text" name="name" value=""
                        class="appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded shadow"
                        placeholder="الاسم" />
                    <input type="text" name="name" value=""
                        class="appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded shadow"
                        placeholder="عنوان الرسالة" />
                    <textarea placeholder="الرسالة" rows="2" cols=""
                        class="appearance-none bg-[#f1f1f1] placeholder:text-[#475057] border-0 p-4 rounded shadow"></textarea>
                    <button type="submit"
                        class="bg-blue-900 text-white py-3 px-12 rounded shadow font-semibold">ارسال</button>
                </div>
            </div>
        </section>
    </x-slot:main>
</x-layout>
