<?php //session_start();   ?>
<!-- Settings Section -->
<section class="w-full h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Settings</h1>
    <!-- information Section -->
    <div class="h-48 w-full dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/setting-pana.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="text-md sm:text-4xl font-bold">Setting</h1>
        </div>
    </div>
    <div class="h-fit w-full text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-slate-600 my-8 px-8 py-8 rounded-md">
        <div class="px-12 py-12 bg-gray-300 dark:bg-slate-700 rounded-md">
            <h1 class="text-3xl font-bold">Notification Settings</h1>
            <p>All notifacation handale by you as you want to notify you then all buttons are active if you want not to
                notify then push it to silent </p>
            <hr class="border-1 my-8 border-gray-500">
            <h1 class="text-xl font-bold">Comments</h1>
            <div class="flex justify-between mr-8">
                <p>Notify when lab approve the reqests</p>
                <div class="flex flex-col mt-8">
                    <button class="flex justify-center items-center my-1">
                        <div class="bg-gray-400 h-5 w-9 rounded-xl mr-2">
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
                <p>New Updates in Farming Sectors</p>
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
    <div
        class="h-auto w-full my-8 px-8 rounded-md text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-slate-600 duration-700 py-8">
        <!-- Update Form -->
        <h1 class="text-2xl font-bold">Setting > <span class="text-lg">Security</span></h1>
        <p>Protect Your Data</p>
        <div class="bg-gray-300 dark:bg-slate-700 h-fit rounded-lg px-16 mt-4 flex justify-around items-center">
            <div class="">
                <img src="../img/Security-setting.png" class="h-[60vh]" alt="">
            </div>
            <div class="dark:text-gray-300 text-gray-600">
                <h1 class="text-4xl font-serif"><b>Change Password</b></h1>
                <p class=" text-xl">Update password !</p>
                <form id="updateAdminPasswordform" class="flex flex-col justify-center items-center my-10">
                    <div class="w-full">
                        <label for="oldpass" class="text-xl pr-2 font-bold">Old password</label>
                        <input type="password" name="oldpass" id="oldpass"
                            class="rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanoldpass" class="text-sm text-red-500"></span>
                        <br>
                        <label for="pwd" class="text-xl pr-2 font-bold">New password</label>
                        <input type="password" name="pwd" id="pwd"
                            class="rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanpass" class="text-sm text-red-500"></span>
                        <br>
                        <label for="cpwd" class="text-xl pr-2 font-bold">New password</label>
                        <input type="password" name="cpwd" id="cpwd"
                            class="rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spancpass" class="text-sm text-red-500"></span>
                    </div>
                    <br>
                    <button onclick="return updateAdminPassword('<?php echo $_SESSION['admin'] ?>')"
                        class="border-green-500 border-2 w-1/2 rounded-full text-green-500 hover:text-white hover:bg-green-500 p-2 mt-2 font-bold font-mono">Change</button>
                </form>
            </div>
            <input type="hidden" name="updateAdminPassword" id="updateAdminPassword">
        </div>
    </div>
    <div class="h-7"></div>
</section>