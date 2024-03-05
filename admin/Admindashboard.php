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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
    <script src="../tailwind.js"></script>
</head>

<body onload="adminMenuLoader('dashboard')" class="">
    <div class="h-screen w-screen min-w-96 min-h-screen">
        <header class="sticky w-full h-[10%]">
            <div class="bg-gray-800 w-full h-full text-white flex justify-around items-center">
                <div class="flex justify-center items-center w-[20%]">
                    <img src="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais" class="h-10" alt="">
                    <h1 class="text-3xl font-serif cursor-pointer">KrishiCare</h1>
                </div>
                <div class="flex justify-around items-center w-[80%]">
                    <div class="flex mx-4 w-[60%]">
                        <label name="search" class="text-2xl cursor-pointer hover:bg-gray-900 rounded-md p-1 mr-1">🔎</label>
                        <input name="search" type="text" placeholder="Search..." class="outline-none bg-gray-900 rounded-md font-light text-lg px-2 w-[80%]">
                    </div>
                    <div class="flex justify-center items-center mx-4 ">
                        <div class="toggle-btn w-10 h-6 bg-gray-500 bg-opacity-50 rounded-full flex items-start">
                            <input type="checkbox" id="checkbox" class="hidden">
                            <label for="checkbox" class="w-6 h-6 bg-gray-100 rounded-full relative inline-block cursor-pointer">
                                <span class="toggle-ball absolute translate-x-2"></span>
                            </label>
                        </div>
                        <div class="">
                            <button><i class="hover:bg-gray-900 rounded-md text-2xl fa-regular fa-bell px-2"></i></button>
                        </div>
                        <div class="">
                            <button><i class="hover:bg-gray-900 rounded-md text-2xl fa-solid fa-comment-dots px-2"></i></button>
                        </div>
                        <div class="flex justify-end items-center ml-16 text-right">
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
                            <div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700 dark:divide-gray-600">
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
        </header>
        <main class="w-full h-[90%] flex">
            <!-- side navbar -->
            <div class="w-[20%] h-full bg-gray-800">
                <div class="h-[70%] pt-4">
                    <div>
                        <h1 class="font-light text-xl text-gray-500 px-8">MENU</h1>
                    </div>
                    <ul class="mb-8 px-8">
                        <li onclick="adminMenuLoader('dashboard')" class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                            <button id="am1" class="flex w-full h-full">
                                <i class="mr-2 text-xl fa-solid fa-house"></i>
                                Dashboard
                            </button>
                        </li>

                        <li onclick="adminMenuLoader('farmer')" class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                            <button id="am2" class="flex w-full h-full">
                                <i class="mr-2 text-xl fa-solid fa-person-digging"></i>
                                Farmer
                            </button>
                        </li>

                        <li onclick="adminMenuLoader('laboratory')" class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                            <button id="am3" class="flex w-full h-full">
                                <i class="mr-2 text-xl fa-solid fa-flask-vial"></i>
                                Laboratory
                            </button>
                        </li>

                        <li onclick="adminMenuLoader('report')" class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                            <button id="am4" class="flex w-full h-full">
                                <i class="mr-2 text-xl fa-solid fa-file-lines"></i>
                                Report
                            </button>
                        </li>
                        <!-- <li onclick="adminMenuLoader('messages')" class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                        <button id="am5" class="flex w-full h-full">
                            <i class="mr-2 text-xl fa-brands fa-facebook-messenger"></i>
                            Messages
                        </button>
                    </li> -->
                    </ul>
                </div>
                <div class="h-[30%]">
                    <div>
                        <h1 class="font-light text-xl text-gray-500 px-8">SETTING</h1>
                    </div>
                    <li onclick="adminMenuLoader('profile')" class="flex rounded-lg py-3 mb-1 mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                        <button id="am5" class="flex justify-start items-center w-full h-full">
                            <i class="mr-2 text-xl fa-solid fa-user"></i>
                            Profile
                        </button>
                    </li>
                    <li onclick="adminMenuLoader('setting')" class="flex rounded-lg py-3 mb-1 mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                        <button id="am5" class="flex justify-start items-center w-full h-full">
                            <i class="mr-2 text-xl fa-solid fa-gear"></i>
                            Setting
                        </button>
                    </li>
                    <li onclick="logoutUser()" class="flex rounded-lg py-3 mb-3 mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                        <button id="am5" class="flex justify-start items-center w-full h-full">
                            <i class="mr-2 text-xl fa-solid fa-right-from-bracket"></i>
                            Logout
                        </button>
                    </li>
                </div>
            </div>
            <!-- main contents -->
            <div class="w-[80%] h-full">
                <div id="adminProcess" class="h-full w-full bg-gray-700 text-white overflow-y-scroll">
                </div>
            </div>
        </main>
    </div>
</body>

</html>