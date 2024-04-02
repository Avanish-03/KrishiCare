<?php
session_start();
?>
<!-- Settings Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md min-w-96">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300 transition-all duration-300">Settings</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 transition-all duration-300 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/setting-pana.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-white text-4xl font-bold">Update Details</h1>
        </div>
    </div>

    <div class="h-full w-full my-8 grid grid-cols-1 lg:grid-cols-2">
        <div class="h-full w-full flex justify-center items-center relative">
            <img class="h-[80%] w-[80%]" src="../img/strelitzia plant-pana.svg" alt="">
            <div class="absolute h-40 w-full top-0 my-8 rounded-md transition-all duration-300 grid grid-rows-1 sm:grid-rows-3 gap-4">
                <div onclick="loadUpdateForm('updateProfile','<?php echo $_SESSION['farmer']; ?>')" class="w-[50%] h-full rounded-lg cursor-pointer bg-gray-300/60 hover:bg-gray-400/40 dark:bg-slate-600/60 dark:hover:bg-slate-600/40 duration-300 flex justify-center items-center text-black dark:text-white text-lg">Update Profile Details</div>
                <div onclick="loadUpdateForm('updatePassword','<?php echo $_SESSION['farmer']; ?>')" class="w-[50%] h-full rounded-lg cursor-pointer bg-gray-300/60 hover:bg-gray-400/40 dark:bg-slate-600/60 dark:hover:bg-slate-600/40 duration-300 flex justify-center items-center text-black dark:text-white text-lg">Update Password</div>
                <!-- <div onclick="" class="w-[50%] h-full rounded-lg cursor-pointer bg-gray-300/60 hover:bg-gray-400/40 dark:bg-slate-600/60 dark:hover:bg-slate-600/40 duration-300 flex justify-center items-center text-black dark:text-gray-300 text-xl">Unsubscribe Us</div> -->
            </div>
        </div>
        <div id="loadUpdateForm" class="h-full w-full dark:text-gray-300 rounded-md transition-all duration-300 flex justify-center"></div>
    </div>
    <!-- <div class="h-7"></div> -->
</section>