<?php
session_start();
?>
<section class="h-full w-full min-w-96 mx-auto my-8 p-8 pb-28 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Dashboard</h1>
    <div class="bg-gray-200 dark:bg-gray-600 w-full h-36 rounded my-2 px-8 flex items-center relative">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full min-w-fit" src="https://cdn.pixabay.com/photo/2019/03/18/17/23/hello-4063591_640.png" alt="">
        </div>
        <div class="h-full">
            <div class="top-24 h-5 w-[30%] blur-2xl shadow-2xl bg-fuchsia-500 absolute"></div>
            <h1 class="text-xl sm:text-5xl md:text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500 duration-1000">LABORATORY</h1>
        </div>
    </div>
    <div class="lg:h-96 h-fit w-full mt-6 rounded-md bg-gray-200 dark:bg-slate-700 grid grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-200 dark:bg-slate-700 w-full h-full px-8 flex flex-col justify-center items-center relative rounded-md">
            <div class="z-10 text-xl sm:text-5xl md:text-5xl font-bold text-center transition-all duration-500 text-green-700 dark:text-gray-300 peer">
                "Helping farmers grow better! Boost your crops with our simple and effective solutions for a successful
                harvest!"</div>
            <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute">
            </div>
            <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300"></h1>
        </div>
        <div class="w-full h-full rounded-md flex items-center justify-center relative">
            <img class="h-96 w-96 z-10" src="../img/lab-illustrater.png" alt="">
        </div>
    </div>
    <div class="relative md:h-32 h-fit py-2 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
        <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
        </div>
        <h1 class="z-10 font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500 text-xl sm:text-5xl md:text-7xl">Laboratory Activity</h1>
    </div>

    <div class="h-fit w-full grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- 1st Chart -->
        <div class="w-full h-fit rounded-lg dark:bg-slate-700">
            <div class="flex flex-col items-center w-full p-6 pb-6 mt-10 dark:text-white  rounded-lg shadow-xl sm:p-8">
                <h2 class="text-xl font-bold">Monthly Reports Genrated</h2>
                <span class="text-sm font-semibold text-gray-500">2020</span>
                <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">22</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-8 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-6 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-16 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Jan</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">46</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-6 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Feb</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">34</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Mar</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">16</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-6 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-24 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Apr</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">26</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">May</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">37</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-24 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Jun</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">19</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-16 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Jul</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">38</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-10 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-24 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Aug</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">45</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-10 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-32 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Sep</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">43</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-12 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow bg-green-400 h-28"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Oct</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">54</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-8 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-40 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Nov</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">54</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-40 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Dec</span>
                    </div>
                </div>
                <div class="flex w-full mt-3">
                    <div class="flex items-center ml-auto">
                        <span class="block w-4 h-4 bg-green-400"></span>
                        <span class="ml-1 text-xs font-medium">Existing</span>
                    </div>
                    <div class="flex items-center ml-4">
                        <span class="block w-4  h-4 bg-green-300"></span>
                        <span class="ml-1 text-xs font-medium">Upgrades</span>
                    </div>
                    <div class="flex items-center ml-4">
                        <span class="block w-4  h-4 bg-green-200"></span>
                        <span class="ml-1 text-xs font-medium">New</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2nd Chart -->
        <div class="w-full h-full flex justify-center items-center bg-gray-200 rounded-lg dark:bg-slate-700">
            <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between">
                    <div>
                        <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">32 ↑</h5>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Farmer Requests This Week</p>
                    </div>
                    <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                        12%
                        <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                        </svg>
                    </div>
                </div>
                <div id="area-chart"></div>
                <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                    <div class="flex justify-between items-center pt-5">
                        <!-- Button -->
                        <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white" type="button">
                            Last 7 days
                            <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last7 days</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last30 days</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last90 days</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">Users Report
                            <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-7"></div>
</section>



<!-- <div class="h-7">
    3rd chart
    <div class="bg-gray-900 rounded-md flex items-center justify-center px-5 py-5 my-10">
        <div class="bg-gray-800 text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2"
            x-data="{chartData:chartData()}" x-init="chartData.fetch()">
            <div class="flex flex-wrap items-end">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold leading-tight">Users</h3>
                </div>
                <div class="relative" @click.away="chartData.showDropdown=false">
                    <button class="text-xs hover:text-gray-300 h-6 focus:outline-none"
                        @click="chartData.showDropdown=!chartData.showDropdown">
                        <span x-text="chartData.options[chartData.selectedOption].label"></span><i
                            class="ml-1 mdi mdi-chevron-down"></i>
                    </button>
                    <div class="bg-gray-700 shadow-lg rounded text-sm absolute top-auto right-0 min-w-full w-32 z-30 mt-1 -mr-3"
                        x-show="chartData.showDropdown" style="display: none;"
                        x-transition:enter="transition ease duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease duration-300 transform"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4">
                        <span
                            class="absolute top-0 right-0 w-3 h-3 bg-gray-700 transform rotate-45 -mt-1 mr-3"></span>
                        <div class="bg-gray-700 rounded w-full relative z-10 py-1">
                            <ul class="list-reset text-xs">
                                <template x-for="(item,index) in chartData.options">
                                    <li class="px-4 py-2 hover:bg-gray-600 hover:text-white transition-colors duration-100 cursor-pointer"
                                        :class="{'text-white':index==chartData.selectedOption}"
                                        @click="chartData.selectOption(index);chartData.showDropdown=false">
                                        <span x-text="item.label"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-end mb-5">
                <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2"
                    x-text="'$'+(chartData.data?chartData.data[chartData.date].total.comma_formatter():0)">0</h4>
                <span class="inline-block"
                    :class="chartData.data&&chartData.data[chartData.date].upDown<0?'text-red-500':'text-green-500'"><span
                        x-text="chartData.data&&chartData.data[chartData.date].upDown<0?'▼':'▲'">0</span> <span
                        x-text="chartData.data?chartData.data[chartData.date].upDown:0">0</span>%</span>
            </div>
            <div>
                <canvas id="chart" class="w-full"></canvas>
            </div>
        </div>
    </div>
</div> -->