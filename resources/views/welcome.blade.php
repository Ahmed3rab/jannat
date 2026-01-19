<x-layout>
    <x-slot:header>
        @include('components.header')
    </x-slot:header>
    <x-slot:main>
        <section class="mx-auto w-full max-w-[1440px]">
            <div class="flex items-center justify-between space-x-20">
                <button class="flex items-center justify-center h-12 w-12 bg-white rounded shadow text-blue-800">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7284 19.5L8.23877 12L15.7284 4.5" stroke="#004274" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="flex-1 flex items-center justify-start -space-x-14">
                    <img class="rounded h-[522px] w-[696px]"
                        src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />

                    <div class="flex-1">
                        <div class=" px-8 py-9 bg-white rounded-md shadow-lg">
                            <dl class="flex items-center justify-between">
                                <dt class="text-2xl font-semibold">Villa With two stories</dt>
                                <dd class="flex items-center space-x-2">
                                    <span class="bg-blue-400 px-4 py-1.5 text-gray-700 font-medium text-sm">For
                                        Sale</span>
                                    <span class="bg-blue-400 px-4 py-1.5 text-gray-700 font-medium text-sm">For
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
                                <p class="font-bold text-blue-700">
                                    200,0000 LYD
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="flex items-center justify-center h-12 w-12 bg-white rounded shadow text-blue-800">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.23853 4.5L15.7281 12L8.23853 19.5" stroke="#004274" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="mt-10 flex items-center justify-center space-x-1.5">
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
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="8" fill="#004274" />
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
                        <img class="h-[364px] w-full object-cover rounded-t-md"
                            src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
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
    </x-slot:main>
</x-layout>
