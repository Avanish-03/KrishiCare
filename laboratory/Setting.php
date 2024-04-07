<?php
session_start();
?>
<!-- Settings Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Settings</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/setting-pana.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold dark:text-gray-100">Privacy Setting</h1>
        </div>
    </div>
    <div class="h-auto w-full dark:text-gray-100 my-8 px-4 rounded-md bg-gray-200 dark:bg-slate-600 duration-700 py-4">
        <!-- Update Form -->
        <h1 class="text-2xl font-bold">Setting > <span class="text-gray-700 dark:text-gray-200 text-lg">Security</span></h1>
        <p>Protect Your Data</p>
        <div class="bg-gray-300 dark:bg-slate-700 h-fit rounded-lg px-16 mt-4 grid grid-cols-1 md:grid-cols-2">
            <div class="">
                <img src="../img/Security-setting.png" class="h-[60vh]" alt="">
            </div>
            <div class="dark:text-gray-300 text-gray-600 py-4 h-full flex flex-col justify-center items-center">
                <h1 class="text-4xl font-serif"><b>Change Password</b></h1>
                <p class="text-xl">Update password !</p>
                <form id="updateLabPasswordform" class="flex flex-col justify-center items-center mt-3">
                    <div class="w-full">
                        <label for="oldpass" class="text-xl pr-2 font-bold">Old password</label>
                        <input type="password" id="oldpass" name="oldpass" class="w-full md:w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanoldpass" class="text-red-500 text-sm"></span>
                        <br>
                        <label for="pwd" class="text-xl pr-2 font-bold">New password</label>
                        <input type="password" id="pwd" name="pwd" class="w-full md:w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanpass" class="text-red-500 text-sm"></span>
                        <br>
                        <label for="cpwd" class="text-xl pr-2 font-bold">Confirm password</label>
                        <input type="password" id="cpwd" name="cpwd" class="w-full md:w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spancpass" class="text-red-500 text-sm"></span>
                    </div>
                    <br>
                    <button onclick="return updateLabPassword('<?php echo $_SESSION['laboratory'] ?>')" class="border-green-500 -ml-20 border-2 w-1/2 rounded-full text-green-500 hover:text-white hover:bg-green-500 p-2 mt-2 font-bold font-mono">Change</button>
                </form>
            </div>
            <input type="hidden" name="updateLabPassword" id="updateLabPassword">
        </div>
    </div>
    <div class="h-7"></div>
</section>