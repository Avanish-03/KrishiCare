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
        <h1 class="text-2xl font-bold">Setting > <span class="text-gray-700 dark:text-gray-200 text-lg">Security</span>
        </h1>
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

    <!-- notification setting -->
    <div class="h-48 w-full text-gray-600 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700 transition-all duration-300 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/setting-pana.png" alt="">
        </div>
        <div class="w-[100%] h-full flex items-center">
            <div class="relative h-32 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
                <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
                </div>
                <h1 class="z-10 h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">Notification Details</h1>
            </div>
        </div>
    </div>
    <div class="h-fit w-full text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-slate-600 my-8 px-8 py-8 rounded-md">
        <div class="px-12 py-12 bg-gray-300 dark:bg-slate-700 rounded-md">
            <h1 class="text-3xl font-bold">Notification Settings</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque.</p>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Comments</h1>
            <div class="flex justify-between mr-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque.</p>
                <div class="flex flex-col mt-8">
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-gray-400 h-5 w-9 rounded-xl mr-2 ">
                            <p class="h-5 w-5 rounded-full bg-white"></p>
                        </div>
                        Push
                    </button>
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2 ">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Email
                    </button>
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-gray-400 h-5 w-9 rounded-xl mr-2 ">
                            <p class="h-5 w-5 rounded-full bg-white "></p>
                        </div>
                        SMS
                    </button>
                </div>
            </div>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Updates</h1>
            <div class="flex justify-between mr-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque.</p>
                <div class="flex flex-col mt-8">
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-gray-400 h-5 w-9 rounded-xl mr-2 ">
                            <p class="h-5 w-5 rounded-full bg-white"></p>
                        </div>
                        Push
                    </button>
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2 ">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Email
                    </button>
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2 ">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        SMS
                    </button>
                </div>
            </div>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Teams & Conditions</h1>
            <p>We, the lab, agree to collect soil samples responsibly and conduct testing with diligence and accuracy.
                We will maintain strict confidentiality regarding all farmer information and soil testing results.
                Our reports will be provided in a timely manner and will offer clear and understandable insights into
                soil health.
                <br>
                The lab reserves the right to adjust testing methods and procedures as necessary to ensure accuracy and
                quality.
            </p>
        </div>
    </div>

    <div class="h-7"></div>
</section>