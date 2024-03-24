<?php
session_start();
?>
<section class="h-full w-full min-w-96 mx-auto my-8 p-8 pb-28 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Dashboard</h1>
    <div class="bg-gray-200 dark:bg-gray-600 w-full h-36 rounded my-2 px-8 flex items-center relative">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full min-w-fit" src="../img/Welcome-bro.svg" alt="">
        </div>
        <div class="h-full">
            <div class="top-24 h-5 w-[30%] blur-2xl shadow-2xl bg-fuchsia-500 absolute"></div>
            <h1 class="text-xl sm:text-5xl md:text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500 duration-1000">LABORATORY</h1>
        </div>
    </div>
    <div class="lg:h-96 h-fit w-full mt-6 rounded-md bg-gray-200 dark:bg-slate-700 grid grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-200 dark:bg-slate-700 w-full h-full px-8 flex flex-col justify-center items-center relative rounded-md">
            <div class="z-10 text-xl sm:text-5xl md:text-5xl font-bold text-center transition-all duration-500 text-green-700 dark:text-gray-300 peer">"Helping farmers grow better! Boost your crops with our simple and effective solutions for a successful harvest!"</div>
            <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute"></div>
            <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300"></h1>
        </div>
        <div class="w-full h-full rounded-md flex items-center justify-center relative">
            <img class="h-96 w-96 z-10" src="../img/lab-illustrater.png" alt="">
        </div>
    </div>
    <div class="relative md:h-32 h-fit py-2 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
        <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  "></div>
        <h1 class="z-10 font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500 text-xl sm:text-5xl md:text-7xl">Laboratory Nutrient</h1>
    </div>
    <div class="h-fit w-full grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Chart -->
        <div class="w-full h-fit rounded-lg dark:bg-slate-700">
            <div class="flex flex-col items-center w-full p-6 pb-6 mt-10 dark:text-white  rounded-lg shadow-xl sm:p-8">
                <h2 class="text-xl font-bold">Monthly Revenue</h2>
                <span class="text-sm font-semibold text-gray-500">2020</span>
                <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$37,500</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-8 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-6 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-16 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Jan</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-6 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Feb</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Mar</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-6 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-24 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Apr</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-10 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">May</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-24 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Jun</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-16 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-20 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Jul</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-10 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-24 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Aug</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-10 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-32 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Sep</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-12 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-12 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow bg-green-400 h-28"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Oct</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                        <div class="flex items-end w-full">
                            <div class="relative flex justify-center flex-grow h-8 bg-green-200"></div>
                            <div class="relative flex justify-center flex-grow h-8 bg-green-300"></div>
                            <div class="relative flex justify-center flex-grow h-40 bg-green-400"></div>
                        </div>
                        <span class="absolute bottom-0 text-xs font-bold">Nov</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
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
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
    </div>
    <div class="h-7"></div>
</section>