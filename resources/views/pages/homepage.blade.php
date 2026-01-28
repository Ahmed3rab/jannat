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
                        <div class="relative text-gray-800 px-8 py-9 bg-white rounded-se-md rounded-b-md"
                            style="box-shadow: 0px 3px 14px 2px rgba(0, 66, 116, 0.28);">
                            <div
                                class="absolute bottom-full start-0 bg-promoted-badge text-primary font-semibold px-6 py-2 rounded-t">
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
                            <div class="mt-6 flex items-center justify-between">
                                <dl class="flex items-center space-x-6">
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg class="size-5 text-slate-500" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 21.4V2.6C2 2.26863 2.26863 2 2.6 2H21.4C21.7314 2 22 2.26863 22 2.6V9.4C22 9.73137 21.7314 10 21.4 10H10.6C10.2686 10 10 10.2686 10 10.6V21.4C10 21.7314 9.73137 22 9.4 22H2.6C2.26863 22 2 21.7314 2 21.4Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16 10V7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10V7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 16H7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10H7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            400 SM
                                        </dd>
                                    </div>
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg class="size-5 text-slate-500" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 21V3.6C3 3.26863 3.26863 3 3.6 3H21" stroke="currentColor"
                                                    stroke-width="1.5" />
                                                <path d="M17 21H20.4C20.7314 21 21 20.7314 21 20.4V17"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M21 7V9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 12V14" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 21H9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 21H14" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 4C3.55228 4 4 3.55228 4 3C4 2.44772 3.55228 2 3 2C2.44772 2 2 2.44772 2 3C2 3.55228 2.44772 4 3 4Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M21 4C21.5523 4 22 3.55228 22 3C22 2.44772 21.5523 2 21 2C20.4477 2 20 2.44772 20 3C20 3.55228 20.4477 4 21 4Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </dt>
                                        <dd>
                                            220 SM
                                        </dd>
                                    </div>
                                    <div class="text-sm flex items-center space-x-1.5">
                                        <dt>
                                            <svg class="size-5 text-slate-500" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 4V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3 8H11V6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 8H13V6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            3
                                        </dd>
                                    </div>
                                </dl>
                                <p class="font-bold text-primary text-lg">
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
        <section id="latest" class="relative  flex flex-col justify-center mt-44 w-full bg-primary">
            <div class="absolute inset-0 overflow-hidden">
                <svg class="pointer-events-none absolute bottom-0 right-0 h-[200%] w-auto translate-x-1/3 translate-y-1/4 opacity-90"
                    width="1104" height="1140" viewBox="0 0 1104 1140" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.09"
                        d="M1031.24 1103.58L1008.55 1139.6L868.972 1051.68C924.803 1054.9 980.631 1071.7 1031.24 1103.58ZM540.293 844.629C546.311 835.076 548.288 823.524 545.788 812.513C543.288 801.503 536.517 791.937 526.964 785.919C517.411 779.901 505.859 777.925 494.849 780.424C483.838 782.924 474.272 789.695 468.254 799.248L394.594 752.847C394.033 659.912 370.058 568.618 324.886 487.399C279.713 406.18 214.799 337.655 136.142 288.157L158.832 252.137C170.899 259.738 182.738 267.7 194.058 276.088L194.852 274.827C200.87 265.274 202.846 253.722 200.346 242.712C197.847 231.702 191.076 222.135 181.523 216.117L204.213 180.098C222.072 191.348 235.116 208.83 240.814 229.154C246.511 249.477 244.457 271.192 235.049 290.087C265.329 274.855 296.849 262.226 329.269 252.336C329.286 223.509 321.985 195.15 308.05 169.915C294.114 144.681 274.001 123.397 249.594 108.059L272.284 72.0392C301.134 90.1817 325.2 114.993 342.455 144.382C359.711 173.771 369.649 206.877 371.434 240.911C399.141 234.466 427.495 230.189 455.841 227.921C452.114 181.803 437.685 137.19 413.698 97.6247C389.712 58.0597 356.83 24.6331 317.665 3.09184e-05L457.24 87.9251C480.78 130.426 494.579 177.608 498.604 225.929C526.944 225.669 555.57 227.349 584.075 231.219C582.889 207.936 579.802 184.789 574.844 162.009L623.471 192.641C625.222 207.832 626.386 223.156 626.963 238.613C655.821 244.717 684.199 252.783 712.049 263.283C712.337 258.433 712.445 253.469 712.259 248.573L785.919 294.974L785.125 296.235C810.175 309.65 834.247 324.814 857.164 341.616L857.958 340.355L931.618 386.757L918.261 393.185C939.938 413.884 959.646 436.11 977.433 459.39C991.444 453.122 1005.95 447.669 1020.59 442.802L1069.03 473.32C1046.35 478.686 1024.13 485.896 1002.62 494.88C1018.42 518.92 1032.41 543.834 1044.48 569.801C1089.74 552.346 1138.2 544.711 1186.64 547.404L1326.21 635.329C1243.73 583.369 1145.47 576.815 1060.97 609.118C1071.16 635.665 1079.55 663.086 1085.7 690.86C1117.17 677.773 1151.32 672.442 1185.28 675.315C1219.24 678.188 1252.01 689.181 1280.83 707.369L1258.14 743.388C1233.78 728.047 1205.92 719.134 1177.18 717.481C1148.44 715.828 1119.74 721.49 1093.78 733.938C1098.72 767.235 1100.9 801.312 1100.24 835.109C1113.22 818.464 1131.92 807.234 1152.71 803.598C1173.5 799.961 1194.9 804.177 1212.76 815.427L1190.07 851.447C1185.23 848.396 1179.83 846.351 1174.19 845.433C1168.54 844.516 1162.77 844.745 1157.22 846.107C1151.67 847.468 1146.44 849.935 1141.86 853.359C1137.29 856.783 1133.44 861.095 1130.57 866.037C1143.09 872.745 1155.36 879.893 1167.38 887.466L1144.69 923.486C979 819.11 778.891 813.301 613.953 891.031L540.293 844.629ZM139.576 592.199L-7.20024e-05 504.274L22.6902 468.254C73.2977 500.134 112.742 543.346 139.576 592.199ZM1099.31 995.525L1076.62 1031.54C975.764 968.012 858.721 952.141 751.368 977.594L702.742 946.962C830.979 904.729 976.302 918.038 1099.31 995.525ZM305.626 696.801L257.18 666.283C233.781 558.464 168.926 459.748 68.0709 396.215L90.7613 360.196C213.768 437.683 288.524 563.013 305.626 696.801ZM580.491 859.889C610.771 844.657 642.291 832.028 674.711 822.137C674.752 793.317 667.478 764.959 653.57 739.717C639.661 714.475 619.574 693.176 595.189 677.815C570.805 662.454 542.92 653.533 514.147 651.888C485.374 650.243 456.655 655.928 430.678 668.41C435.614 701.707 437.794 735.785 437.133 769.581C450.112 752.934 468.811 741.701 489.604 738.063C510.397 734.424 531.8 738.64 549.66 749.891C567.52 761.142 580.565 778.626 586.261 798.951C591.958 819.277 589.902 840.994 580.491 859.889ZM972.404 808.415C1001.26 814.519 1029.64 822.584 1057.49 833.084C1059.48 737.653 1036.75 643.33 991.503 559.285C946.254 475.24 880.029 404.332 799.266 353.456C718.503 302.58 625.951 273.466 530.606 268.945C435.261 264.425 340.369 284.651 255.155 327.657C276.831 348.356 296.54 370.583 314.327 393.863C384.572 362.566 461.449 349.067 538.154 354.562C614.859 360.056 689.027 384.374 754.095 425.363C819.162 466.351 873.123 522.748 911.201 589.56C949.279 656.373 970.3 731.542 972.404 808.415ZM843.866 795.617C872.385 795.47 900.831 797.038 929.517 801.02C926.263 732.645 906.552 666.066 872.059 606.939C837.567 547.813 789.311 497.886 731.393 461.4C673.475 424.915 607.605 402.95 539.381 397.37C471.156 391.791 402.593 402.762 339.516 429.353C355.315 453.393 369.305 478.306 381.375 504.273C430.901 485.006 484.252 477.612 537.152 482.683C590.051 487.754 641.027 505.149 685.991 533.474C730.955 561.799 768.657 600.265 796.073 645.789C823.49 691.312 839.858 742.627 843.866 795.617ZM716.875 810.712C744.582 804.267 772.936 799.991 801.283 797.722C797.609 751.576 783.22 706.924 759.259 667.315C735.298 627.707 702.426 594.235 663.258 569.561C624.09 544.887 579.705 529.692 533.633 525.183C487.561 520.675 441.072 526.978 397.864 543.591C408.058 570.138 416.444 597.558 422.596 625.332C454.064 612.195 488.231 606.82 522.213 609.658C556.196 612.497 588.997 623.467 617.85 641.643C646.703 659.819 670.762 684.667 687.996 714.092C705.231 743.517 715.136 776.656 716.875 810.712Z"
                        fill="url(#paint0_linear_14_607)" />
                    <defs>
                        <linearGradient id="paint0_linear_14_607" x1="761.567" y1="148.269" x2="504.274"
                            y2="821.939" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                            <stop offset="1" stop-color="#999999" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="relative z-20 -mt-16 mx-auto w-full max-w-7xl bg-white px-8 pb-10 pt-12 rounded-lg shadow-lg"
                style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);">
                <form class="flex items-center space-x-12">
                    <div class="flex-1 flex items-center justify-between">
                        <select
                            class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-48 rounded focus:ring-primary focus:outline-0">
                            <option value="test">Select City</option>
                        </select>
                        <select
                            class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-48 rounded focus:ring-primary focus:outline-0">
                            <option value="test">Select Town</option>
                        </select>
                        <select
                            class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-semibold w-56 rounded focus:ring-primary focus:outline-0">
                            <option value="test">Select Property Type</option>
                        </select>
                        <input type="text" name="min"
                            class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] w-32 rounded focus:ring-primary focus:outline-0"
                            placeholder="Min Price">
                        <input type="text" name="min"
                            class="appearance-none border-0 bg-[#F1F1F1] text-[#475057] font-smeibold placeholder:font-semibold placeholder-[#475057] w-32 rounded focus:ring-primary focus:outline-0"
                            placeholder="Max Price">
                    </div>
                    <button type="submit"
                        class="appearance-none rounded-md bg-primary text-white font-bold py-2.5 px-8 uppercase text-sm">
                        Filter Results
                    </button>
                </form>
            </div>
            <div class="relative z-10 grid grid-cols-3 gap-13 mt-16 mx-40 -mb-20">
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-[500px] rounded-md shadow-xl bg-white">
                        <div class="relative">
                            <div class="absolute inset-0 rounded-t-md bg-black/20 z-10"></div>
                            <div class="absolute top-6 end-6 z-20">
                                <dl class="flex items-center justify-between">
                                    <dt class="invisible">Tags</dt>
                                    <dd class="flex items-center space-x-2">
                                        <span class="rounded bg-badge px-4 py-1.5 font-semibold text-sm">For
                                            Sale</span>
                                        <span class="rounded bg-badge px-4 py-1.5 font-semibold text-sm">For
                                            Sale</span>
                                    </dd>
                                </dl>
                            </div>
                            <img class="h-[364px] w-full object-cover rounded-t-md"
                                src="https://plus.unsplash.com/premium_photo-1661964014750-963a28aeddea?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" />
                        </div>
                        <div class="pb-8 px-8 pt-8 text-gray-800">
                            <a href="#" class="text-xl font-semibold">Villa With Two Stories</a>
                            <p class="mt-3 font-normal">Near Masjid Al-Hassan & Al-Hussain, Bawabet Al-Jebs, Tripoli.
                            </p>

                            <div class="mt-6 flex items-center justify-between">
                                <dl class="flex items-center space-x-6">
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg class="size-5 text-slate-500" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 21.4V2.6C2 2.26863 2.26863 2 2.6 2H21.4C21.7314 2 22 2.26863 22 2.6V9.4C22 9.73137 21.7314 10 21.4 10H10.6C10.2686 10 10 10.2686 10 10.6V21.4C10 21.7314 9.73137 22 9.4 22H2.6C2.26863 22 2 21.7314 2 21.4Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16 10V7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10V7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 16H7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 10H7" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            400 SM
                                        </dd>
                                    </div>
                                    <div class="flex items-center space-x-1.5">
                                        <dt>
                                            <svg class="size-5 text-slate-500" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 21V3.6C3 3.26863 3.26863 3 3.6 3H21" stroke="currentColor"
                                                    stroke-width="1.5" />
                                                <path d="M17 21H20.4C20.7314 21 21 20.7314 21 20.4V17"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M21 7V9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 12V14" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 21H9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 21H14" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 4C3.55228 4 4 3.55228 4 3C4 2.44772 3.55228 2 3 2C2.44772 2 2 2.44772 2 3C2 3.55228 2.44772 4 3 4Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 22C3.55228 22 4 21.5523 4 21C4 20.4477 3.55228 20 3 20C2.44772 20 2 20.4477 2 21C2 21.5523 2.44772 22 3 22Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M21 4C21.5523 4 22 3.55228 22 3C22 2.44772 21.5523 2 21 2C20.4477 2 20 2.44772 20 3C20 3.55228 20.4477 4 21 4Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </dt>
                                        <dd>
                                            220 SM
                                        </dd>
                                    </div>
                                    <div class="text-sm flex items-center space-x-1.5">
                                        <dt>
                                            <svg class="size-5 text-slate-500" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 4V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V4C3 2.89543 3.89543 2 5 2H19C20.1046 2 21 2.89543 21 4Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3 8H11V6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 8H13V6" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </dt>
                                        <dd>
                                            3
                                        </dd>
                                    </div>
                                </dl>
                                <p class="font-bold text-primary text-lg">
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
                    <div class="text-primary self-center grid justify-items-center">
                        <h3 class="text-5xl font-bold">اكتشف بالمدينة</h3>
                        <svg class="my-8" width="203" height="1" viewBox="0 0 203 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="202.675" y1="0.5" x2="0.000183148" y2="0.500018" stroke="#2270AB" />
                        </svg>
                        <p class="font-semibold text-gray-800 text-xl text-center max-w-xs">ابحث بالمدينة أو المنطقة
                            لتجد العقار المناسب لك</p>
                    </div>
                    <div class="relative rounded-md h-[624px] w-[400px] row-span-2"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-md h-[296px] w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                    <div class="relative rounded-md h-[296px] w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-md h-[296px] w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                </div>
                <div class="grid grid-cols-3 grid-rows-2 gap-y-8 gap-x-10 justify-items-center">
                    <div class="relative rounded-md h-[296px] w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="relative rounded-md h-[296px] w-[400px]"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                    <div class="row-span-2 text-primary self-center grid justify-items-center">
                        <h3 class="text-5xl font-bold">اكتشف بالمدينة</h3>
                        <svg class="my-8" width="203" height="1" viewBox="0 0 203 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="202.675" y1="0.5" x2="0.000183148" y2="0.500018" stroke="#2270AB" />
                        </svg>
                        <p class="font-semibold text-gray-800 text-xl text-center max-w-xs">ابحث بالمدينة أو المنطقة
                            لتجد العقار المناسب لك</p>
                    </div>
                    <div class="col-span-2 rounded-md relative h-[296px] w-full"
                        style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <div class="rounded-md absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 z-20 flex items-center justify-center">
                            <span class="text-white text-4xl font-semibold">طرابلس</span>
                        </div>
                        <img class="rounded-md object-cover h-full w-full"
                            src="https://plus.unsplash.com/premium_photo-1680836316227-ef17dbbcfb27?q=80&w=627&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>

                </div>
            </div>
        </section>
        <section id="contact" class="relative mt-50 w-full max-w-[1440px] mx-auto rounded shadow-md bg-linear-[280deg] rtl:from-primary rtl:to-[#2270AB] ltr:to-primary ltr:from-[#2270AB]" style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);">
            <div class="absolute inset-0 overflow-hidden">
                <x-svgs.contact/>
            </div>
            <div class="absolute start-14 -top-16">
                <div class="bg-white p-10 font-bold text-4xl rounded text-primary"
                    style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25)">كن على تواصل</div>
            </div>
            <div class="relative z-10 px-28 py-28 grid grid-cols-3 justify-items-center gap-24 items-center">
                <x-contact-info />
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
                <x-contact-form />
            </div>
        </section>
    </x-slot:main>
</x-layout>
