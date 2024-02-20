<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KrishiCare</title>
    <script src="../src/flowbite.min.js"></script>
    <script src="../src/tailwind.min.js"></script>
    <script src="../src/Js/code.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.3.2/cdn.js'></script>
</head>

<body>
    <!-- (1)NAVBAAR! -->
    <?php

    $path = $_SERVER['REQUEST_URI'];
    $path = explode('/', $path);
    $path = end($path);

    ?>

    <section class="sticky top-0 z-50">
        <nav class="bg-white border-gray-200 dark:bg-white">
            <div class=" flex flex-wrap md:items-center justify-between mx-auto p-3">
                <a href="Home.php" class="flex md:items-center space-x-2 rtl:space-x-reverse sm:w-fit md:ml-10">
                    <img src="https://cdn-icons-png.freepik.com/256/11887/11887410.png?uid=R129996386&ga=GA1.2.1933265658.1701935286&semt=ais" alt="" class="h-10 lg:block sm:hidden hidden">
                    <p class="self-center text-3xl font-mono font-bold dark:text-black ">KrishiCare</p>
                </a>
                <div class="flex md:items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-bold justify-center px-4 py-2 text-lg dark:text-gray-900 text-black rounded-lg cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-200 dark:hover:text-black">Register ▼
                    </button>
                    <!-- Dropdown -->
                    <div class="z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-white" id="language-dropdown-menu">
                        <ul class="font-medium" role="none">
                            <li>
                                <a href="lab_reg.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                    <div class="inline-flex items-center">Laboratory</div>
                                </a>
                            </li>
                            <li>
                                <a href="farmer_reg.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                    <div class="inline-flex items-center">Farmer</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-500 dark:hover:text-gray-100 dark:hover:bg-gray-900 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 dark:text-black dark:bg-white" id="navbar-language">
                    <ul class="flex flex-col font-medium p-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-100 md:dark:bg-white dark:border-gray-700">
                        <li>
                            <a href="../dist/Home.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Home.php') {
                                                                                                                                            echo "border-b-2 border-black text-black";
                                                                                                                                        } ?> ">Home</a>
                        </li>
                        <li>
                            <a href="../dist/Weather.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php if ($path == 'Weather.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Weather</a>
                        </li>
                        <!-- <li>
                            <a href="../dist/Crop.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php //if ($path == 'Crop.php') {
                                                                                                                                            //echo "border-b-2 border-black text-black";
                                                                                                                                        //} ?> ">Crop</a>
                        </li> -->
                        <!-- <li>
                            <a href="../dist/Soil.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php //if ($path == 'Soil.php') {
                                                                                                                                           // echo "border-b-2 border-black text-black";
                                                                                                                                       // } ?> ">Soil</a>
                        </li> -->
                        <li>
                            <a href="../dist/Services.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php if ($path == 'Services.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Services</a>
                        </li>
                        <li>
                            <a href="../dist/About.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php if ($path == 'About.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">About</a>
                        </li>
                        <li>
                            <a href="../dist/Contact.php" class="mr-3 hover:text-gray-900 text-lg font-bold hover:border-b-2 border-black  <?php if ($path == 'Contact.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Contact</a>
                        </li>
                        <button type="button" data-dropdown-toggle="dropdown" class="inline-flex md:items-center items-start font-bold md:justify-center text-lg dark:text-gray-900 text-black rounded-lg cursor-pointer ">More ⊽
                        </button>
                        <div class="z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-white" id="dropdown">
                            <ul class=" font-medium items-start" role="none">
                                <li>
                                    <a href="./Techno.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                        <div class="inline-flex items-start md:items-center">Technology</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                        <div class="inline-flex items-start md:items-center">page</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>