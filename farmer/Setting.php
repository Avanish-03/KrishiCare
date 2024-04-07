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
    <div class="h-fit w-full text-gray-600 dark:text-gray-300 my-8 px-8 rounded-md bg-gray-200 dark:bg-slate-600 duration-700 py-8">
        <!-- Update Form -->
        <h1 class="text-4xl text-gray-600 dark:text-gray-300 my-2 rounded-md bg-gray-200 dark:bg-slate-600 duration-700 font-serif"><b>Change Password</b></h1>
        <h1 class="text-2xl font-bold">Setting > <span class="text-lg">Security</span></h1>
        <p>Protect Your Data</p>
        <div class="bg-gray-300 dark:bg-slate-700 h-fit rounded-lg px-16 flex justify-around items-center">
            <div class="">
                <img src="../img/Security-setting.png" class="h-[60vh]" alt="">
            </div>
            <div>
                <p class="py-2 text-xl">Update password !</p>
                <form id="updateFarmerPassword" class="flex flex-col justify-center items-center ">
                    <div class="w-full">
                        <label for="oldpass" class="text-xl pr-2 font-bold">Old password</label>
                        <input type="password" name="oldpass" id="oldpass" class="w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanoldpass" class="text-red-500 text-sm"></span>
                        <br>
                        <label for="pwd" class="text-xl pr-2 font-bold">New password</label>
                        <input type="password" name="pwd" id="pwd" class="w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spanpass" class="text-red-500 text-sm"></span>
                        <br>
                        <label for="cpwd" class="text-xl pr-2 font-bold">Confirm password</label>
                        <input type="password" name="cpwd" id="cpwd" class="w-3/4 rounded-lg bg-transparent border-gray-500 border-2 p-2"><br>
                        <span id="spancpass" class="text-red-500 text-sm"></span>
                    </div>
                    <br>
                    <input class="p-2 rounded-lg w-[30%] -ml-20 cursor-pointer bg-green-400 hover:bg-green-500 dark:bg-green-500 dark:hover:bg-green-600" onclick="return updateFarmerPassword('<?php echo $_SESSION['farmer'] ?>')" type="button" value="Update">
                </form>
            </div>
            <input type="hidden" name="updateFarmerPassword" id="updateFarmerPassword">
        </div>
    </div>
    <div class="h-48 w-full text-gray-600 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700 transition-all duration-300 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/setting-pana.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-white text-slate-700 text-4xl font-bold">Notification Details</h1>
        </div>
    </div>
    <div class="h-fit w-full text-gray-600 dark:text-gray-300 bg-gray-200 dark:bg-slate-600 my-8 px-8 py-8 rounded-md">
        <div class="px-12 py-12 bg-gray-300 dark:bg-gray-700 rounded-md">
            <h1 class="text-3xl font-bold">Notification Settings</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque.</p>
            <hr class="border-1 my-8 border-gray-500">

        <div class="h-fit w-full dark:text-gray-100 bg-gray-200 dark:bg-slate-600 my-8 px-8 py-8 rounded-md">
            <div class="px-12 py-12 bg-gray-300 dark:bg-gray-700 rounded-md">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque.</p>
            </div>
        </div>

        <div class="h-auto w-full my-8 px-8 rounded-md dark:text-gray-100 bg-gray-200 dark:bg-slate-600 duration-700 py-8">
            <!-- Update Form -->
            <h1 class="text-2xl font-bold">Setting > <span
                    class="text-gray-700 dark:text-gray-200 text-lg">Security</span></h1>
            <p>Protect Your Data</p>
            <div class="bg-gray-300 dark:bg-slate-700 h-fit rounded-lg px-16 mt-4 flex justify-around items-center">
                <div class="">
                    <img src="../img/Security-setting.png" class="h-[60vh]" alt="">
                </div>
                <div class="dark:text-gray-100 text-gray-600">
                    <h1 class="text-4xl font-serif"><b>Change Password</b></h1>
                    <p class=" text-xl">Update password !</p>
                    <form action="#" class="flex flex-col justify-center items-center my-10">
                        <div class="">
                            <label for="" class="font-mono text-xl pr-2 font-bold">Old password</label>
                            <input type="" name=""
                                class="rounded-lg bg-transparent border-gray-500 border-2 p-2"><br><br>
                            <label for="" class="font-mono text-xl pr-2 font-bold">New password</label>
                            <input type="" name="" class="rounded-lg bg-transparent border-gray-500 border-2 p-2">

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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, cumque.</p>
        </div>
    </div>
    <div class="h-7"></div>
</section>