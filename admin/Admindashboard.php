<?php
session_start();

if ($_SESSION["admin"] == null) {
    header('Location: ' . '../dist/Login.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/4140/4140048.png?ga=GA1.1.253096211.1707907143&">
    <title>Admin</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../tailwind.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
    <script src="../tailwind.js"></script>
</head>

<body onload="adminMenuLoader('dashboard')" class="">
    <div class="h-screen w-screen sm:min-w-96 sm:min-h-screen">
        <header class="sticky w-full h-[10%]">
            <div class="bg-gray-800 w-full h-full text-white flex justify-around items-center">
                <div class="flex justify-center items-center sm:w-[20%]">
                    <img src="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais" class="sm:h-10 h-6" alt="">
                    <h1 class="sm:text-3xl font-serif cursor-pointer">KrishiCare</h1>
                </div>
                <div class="flex justify-around items-center sm:w-[80%]">
                    <div class="flex sm:mx-4 w-[60%]">
                        <label name="search" class="sm:text-2xl cursor-pointer hover:bg-gray-900 rounded-md p-1 mr-1">🔎</label>
                        <input name="search" type="text" placeholder="Search..." class="outline-none bg-gray-900 rounded-md font-light sm:text-lg text-xs px-2 w-[80%]">
                    </div>
                    <div class="flex justify-center items-center sm:mx-4 ">
                        <div class="toggle-btn sm:w-10 sm:h-6 w-5 h-3 bg-gray-500 bg-opacity-50 rounded-full flex items-start">
                            <input type="checkbox" id="checkbox" class="hidden">
                            <label for="checkbox" class="sm:w-6 sm:h-6 w-3 h-3 bg-gray-100 rounded-full relative inline-block cursor-pointer">
                                <span class="toggle-ball absolute translate-x-2"></span>
                            </label>
                        </div>
                        <div class="hidden sm:block">
                            <button><i class="hover:bg-gray-900 rounded-md text-2xl fa-regular fa-bell px-2"></i></button>
                        </div>
                        <div class="hidden sm:block">
                            <button><i class="hover:bg-gray-900 rounded-md text-2xl fa-solid fa-comment-dots px-2"></i></button>
                        </div>
                        <div class="hidden sm:block w-full">
                            <div class="flex justify-end items-center ml-16 text-right ">
                                <div>
                                    <h2 class="font-mono">Avanish Yadav</h2>
                                    <span class="text-[12px]">avanish123@gmail.com</span>
                                </div>
                                <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center " type="button">
                                    <img src="../img/avanish.jpg" class="h-12 w-12 rounded-full" alt="">
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownDivider" class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-md text-gray-700 dark:text-gray-200 text-start" aria-labelledby="dropdownDividerButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                        </li>
                                    </ul>
                                    <div class="py-2 rounded-md dark:hover:bg-gray-600 text-center">
                                        <a href="" class="rounded-md text-white font-mono"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="w-full h-[90%] flex">
            <!-- side navbar -->
            <div class="sm:w-[16%] w-[18%] h-full bg-gray-800">
                <div class="sm:h-[70%] h-[60%] pt-4">
                    <div class="flex justify-start px-2 items-center text-white my-2 sm:hidden">
                        <img src="../img/avanish.jpg" class="sm:h-12 sm:w-12 h-8 w-8 rounded-full sm:mr-3" alt="">
                    </div>
                    <!-- MENU -->
                    <div>
                        <h1 class="font-light sm:text-xl text-gray-500 sm:px-8 hidden sm:block">MENU</h1>
                    </div>
                    <ul class="sm:mb-8 sm:px-8">
                        <li onclick="adminMenuLoader('dashboard')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-house"></i>
                            <div class="cursor-pointer hidden sm:block">Dashboard</div>
                        </li>
                        <li onclick="adminMenuLoader('farmer')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-person-digging"></i>
                            <div class="cursor-pointer hidden sm:block">Farmer</div>
                        </li>
                        <li onclick="adminMenuLoader('laboratory')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-flask-vial"></i>
                            <div class="cursor-pointer hidden sm:block">Laboratory</div>
                        </li>
                        <li onclick="adminMenuLoader('report')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-solid fa-file-lines"></i>
                            <div class="cursor-pointer hidden sm:block">Report</div>
                        </li>
                        <li onclick="adminMenuLoader('messages')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-brands fa-facebook-messenger"></i>
                            <div class="cursor-pointer hidden sm:block"> Messages</div>
                        </li>
                        <li onclick="adminMenuLoader('notification')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 font-bold">
                            <i class="sm:mr-2 sm:text-xl fa-regular fa-bell"></i>
                            <div class="cursor-pointer hidden sm:block"> Notification</div>
                        </li>
                    </ul>
                </div>
                <div class="sm:h-[30%] h-[40%]">
                    <div>
                        <h1 class="font-light sm:text-xl text-gray-500 sm:px-8 hidden sm:block">SETTING</h1>
                    </div>
                    <li onclick="adminMenuLoader('profile')" class="flex rounded-lg py-3 mb-1 sm:mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                        <i class="sm:mr-2 sm:text-xl fa-solid fa-user"></i>
                        <div class="cursor-pointer hidden sm:block">Profile</div>
                    </li>
                    <li onclick="adminMenuLoader('setting')" class="flex rounded-lg py-3 mb-1 sm:mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                        <i class="sm:mr-2 sm:text-xl fa-solid fa-gear"></i>
                        <div class="cursor-pointer hidden sm:block">Setting</div>
                    </li>
                    <li onclick="logoutUser('admin')" class="flex rounded-lg py-3 mb-3 sm:mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                        <i class="sm:mr-2 sm:text-xl fa-solid fa-right-from-bracket"></i>
                        <div class="cursor-pointer hidden sm:block">Logout</div>
                    </li>
                </div>
            </div>
            <!-- main contents -->
            <div class="w-full h-full">
                <div id="adminProcess" class="h-full w-full bg-gray-700 text-white overflow-y-scroll">
                </div>
            </div>
        </main>
    </div>
</body>

</html>