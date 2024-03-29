<?php
session_start();
?>
<!-- Settings Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md min-w-96">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300 transition-all duration-300">Settings</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 transition-all duration-300 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Update-pana.svg" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-white text-4xl font-bold">Update Details</h1>
        </div>
    </div>
    <div class="h-20 w-full my-8 rounded-md bg-gray-200 dark:bg-slate-700 transition-all duration-300 grid grid-cols-1 sm:grid-cols-3">
        <div onclick="loadUpdateForm('updateProfile','<?php echo $_SESSION['farmer']; ?>')" class="w-[50%] h-full rounded-lg bg-gray-300 dark:bg-slate-600 flex justify-center items-center text-black dark:text-white text-xl">Update Profile Details</div>
        <div onclick="loadUpdateForm('updatePassword','<?php echo $_SESSION['farmer']; ?>')" class="w-[50%] h-full rounded-lg bg-gray-300 dark:bg-slate-600 flex justify-center items-center text-black dark:text-white text-xl">Update Password</div>
        <!-- <div onclick="" class="w-[50%] h-full rounded-lg bg-gray-300 dark:bg-slate-600 flex justify-center items-center text-black dark:text-gray-300 text-xl">Unsubscribe Us</div> -->
    </div>
    <div class="h-full w-full my-8 grid grid-cols-1 lg:grid-cols-2">
        <div class="h-full w-full flex justify-center items-center">
            <img class="h-[80%] w-[80%]" src="../img/strelitzia plant-pana.svg" alt="">
        </div>
        <div id="loadUpdateForm" class="h-full w-full rounded-md transition-all duration-300 flex justify-center"></div>
    </div>
    <!-- <div class="h-7"></div> -->
</section>