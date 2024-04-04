<?php session_start(); ?>

<!-- dashboard -->
<section class="h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300 duration-700">Dashboard</h1>
    <div class="bg-gray-200 dark:bg-slate-600 w-full h-32 rounded my-2 px-8 flex items-center">
        <div class="h-full flex justify-center">
            <img class="h-full w-full" src="../img/Hello-rafiki.png" alt="">
            <div class="h-5 w-[45%] blur-2xl shadow-2xl"></div>
            <h1 class="text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-700 to-gray-400">Admin</h1>
        </div>
    </div>
    <div class="lg:h-96 h-fit w-full my-3 rounded-md bg-gray-200 dark:bg-slate-600 grid grid-cols-1 md:grid-cols-2">
        <div class="w-full h-full rounded-md flex items-center justify-center relative">
            <div class="h-80 w-80 blur-xl rounded-full shadow-2xl shadow-fuchsia-900 absolute  "></div>
            <img class="h-96 w-96 z-10" src="../img/Admin-bro.svg" alt="">
        </div>
        <div class="w-full h-full px-8 py-2 flex flex-col justify-center items-center relative rounded-md">
            <div class="h-full w-full">
                <?php include("chart.php") ?>
            </div>
            <div class="z-10 text-5xl font-bold text-center transition-all duration-1000 hover:scale-110 text-green-700 dark:text-gray-300 peer"></div>
            <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute  "></div>
            <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300"></h1>
        </div>
    </div>
    <div class=" h-7">
    </div>
</section>