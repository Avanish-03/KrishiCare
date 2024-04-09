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
            <div class="relative h-32 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
                <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
                </div>
                <h1 class="z-10 h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
                    Settings</h1>
            </div>
        </div>
    </div>
    <div class="h-fit w-full my-8 grid grid-cols-1 py-3 lg:grid-cols-2 rounded-md bg-gray-200 dark:bg-slate-700">
        <div class="h-full w-full flex justify-center items-center relative">
            <img class="h-[80%] w-[80%]" src="../img/strelitzia plant-pana.svg" alt="">
            <div class="absolute h-40 w-full top-0 my-8 px-4 rounded-md transition-all duration-300 grid grid-rows-1 sm:grid-rows-3 gap-4">
                <div onclick="loadUpdateForm('updateProfile','<?php echo $_SESSION['farmer']; ?>')" class="w-[50%] h-full rounded-lg cursor-pointer bg-gray-300/60 hover:bg-gray-400/40 dark:bg-slate-600/60 dark:hover:bg-slate-600/40 duration-300 flex justify-center items-center text-black dark:text-white text-lg">
                    Update Profile Details</div>
                <!-- <div onclick="loadUpdateForm('updatePassword','<?php echo $_SESSION['farmer']; ?>')" class="w-[50%] h-full rounded-lg cursor-pointer bg-gray-300/60 hover:bg-gray-400/40 dark:bg-slate-600/60 dark:hover:bg-slate-600/40 duration-300 flex justify-center items-center text-black dark:text-white text-lg"> -->
                <!-- Update Password</div> -->
                <!-- <div onclick="" class="w-[50%] h-full rounded-lg cursor-pointer bg-gray-300/60 hover:bg-gray-400/40 dark:bg-slate-600/60 dark:hover:bg-slate-600/40 duration-300 flex justify-center items-center text-black dark:text-gray-300 text-xl">Unsubscribe Us</div> -->
            </div>
        </div>
        <div id="loadUpdateForm" class="h-full w-full dark:text-gray-300 rounded-md transition-all duration-300 flex justify-center"></div>
    </div>
    <div class="h-fit w-full text-slate-600 dark:text-gray-300 my-8 px-8 rounded-md bg-gray-200 dark:bg-slate-600 duration-700 py-8">
        <!-- Update Form -->
        <h1 class="text-4xl text-gray-600 dark:text-gray-300 my-2 rounded-md bg-gray-200 dark:bg-slate-600 duration-700 font-serif">
            <b>Change Password</b>
        </h1>
        <h1 class="text-2xl font-bold">Setting > <span class="text-lg">Security</span></h1>
        <p>Protect Your Data</p>
        <div class="bg-gray-300 dark:bg-slate-700 h-fit rounded-lg px-16 py-4 grid grid-cols-1 md:grid-cols-2">
            <div class="">
                <img src="../img/Security-setting.png" class="h-[60vh]" alt="">
            </div>
            <div class="h-full flex flex-col justify-center items-center">
                <p class="py-2 text-xl">Update password !</p>
                <form id="updateFarmerPassword" class="flex flex-col justify-center items-center ">
                    <div class="w-full">
                        <label for="oldpass" class="text-xl pr-2 font-bold">Old password</label>
                        <input type="password" name="oldpass" id="oldpass" class="w-full md:w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanoldpass" class="text-red-500 text-sm"></span>
                        <br>
                        <label for="pwd" class="text-xl pr-2 font-bold">New password</label>
                        <input type="password" name="pwd" id="pwd" class="w-full md:w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanpass" class="text-red-500 text-sm"></span>
                        <br>
                        <label for="cpwd" class="text-xl pr-2 font-bold">Confirm password</label>
                        <input type="password" name="cpwd" id="cpwd" class="w-full md:w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spancpass" class="text-red-500 text-sm"></span>
                    </div>
                    <br>
                    <input class="py-2 px-6  rounded-lg w-fit md:w-[30%] -ml-20 cursor-pointer bg-green-400 hover:bg-green-500 dark:bg-green-500 dark:hover:bg-green-600" onclick="return updateFarmerPassword('<?php echo $_SESSION['farmer'] ?>')" type="button" value="Update">
                </form>
            </div>
            <input type="hidden" name="updateFarmerPassword" id="updateFarmerPassword">
        </div>
    </div>
    <!-- notification settings -->
    <div class="h-48 w-full text-gray-600 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700 transition-all duration-300 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/setting-pana.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-white text-slate-700 text-4xl font-bold">Notification Details</h1>
        </div>
    </div>
    <div class="h-fit w-full text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-slate-600 my-8 px-8 py-8 rounded-md">
        <div class="px-12 py-12 bg-gray-300 dark:bg-slate-700 rounded-md">
            <h1 class="text-3xl font-bold">Notification Settings</h1>
            <p>All Notification handale by you as you want to notify you then all buttons are active if you want not to notify then push it to silent </p>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Reports</h1>
            <div class="flex justify-between mr-8">
                <p>Notify when lab approve the reqests</p>
                <div class="flex flex-col mt-8">
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                </div>
            </div>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">New Tecnology Information</h1>
            <div class="flex justify-between mr-8">
                <p>Notify when new tecnologis are in trends in farming sector the reqests</p>
                <div class="flex flex-col mt-8">
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                </div>
            </div>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Updates</h1>
            <div class="flex justify-between mr-8">
                <p>New Updates in Farming Sectors</p>
                <div class="flex flex-col mt-8">
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                    <button class="flex justify-center items-center my-1 ">
                        <div class="bg-green-500 h-5 w-9 rounded-xl mr-2">
                            <p class="h-5 w-5 rounded-full bg-white ml-4"></p>
                        </div>
                        Notification
                    </button>
                </div>
            </div>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Teams & Conditions</h1>
            <p>By engaging with Krishicare's soil testing services, farmers consent to have their soil tested.
                Farmers understand that their data will be kept confidential and used only for the purpose of soil
                analysis.
                The lab's testing process may have limitations, and farmers acknowledge that results may vary based on
                factors beyond the lab's control.<br>
                Farmers agree to provide accurate information and samples for testing and understand that additional
                fees may apply for certain services.
            </p>
        </div>
    </div>
    <div class="h-7"></div>
</section>