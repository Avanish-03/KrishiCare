<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <title>KrishiCare</title>
    <!-- <link rel="stylesheet" href="../tailwind.css"> -->
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="../flowbite.js"></script>
</head>

<body onload="loadStates()">
    <!-- (1)NAVBAAR! -->
    <?php

    $path = $_SERVER['REQUEST_URI'];
    $path = explode('/', $path);
    $path = end($path);

    ?>

    <section class="sticky top-0 z-50 min-w-96">
        <nav class="bg-white border-gray-200 dark:bg-white shadow-lg">
            <div class=" flex flex-wrap md:items-center justify-between mx-auto p-3">
                <a href="Home.php" class="flex md:items-center space-x-2 rtl:space-x-reverse sm:w-fit md:ml-10">
                    <img src="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais" alt="" class="h-10 lg:block sm:hidden hidden">
                    <p class="self-center text-3xl font-serif font-bold dark:text-black ">KrishiCare</p>
                </a>
                <div class="flex items-center md:items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse lg:pr-2">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu" class="hidden mx-2 sm:inline-flex items-center hover:text-green-900 text-lg font-bold hover:border-b-2 border-black">Register</button>
                    <span class="hidden sm:flex text-lg font-bold px-2">|</span>
                    <a role="button" href="Login.php" class="hidden mx-2 sm:inline-flex items-center hover:text-green-900 text-lg font-bold hover:border-b-2 border-black">Login</a>
                    <!--Register Dropdown -->
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
                    <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-500 dark:hover:text-gray-100 dark:hover:bg-gray-900 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 dark:text-black dark:bg-white" id="navbar-language">
                    <ul class="flex flex-col font-medium p-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-100 md:dark:bg-white dark:border-gray-700">
                        <li class="py-2 md:py-0">
                            <a href="../dist/Home.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Home.php') {
                                                                                                                                            echo "border-b-2 border-black text-black";
                                                                                                                                        } ?> ">Home</a>
                        </li>
                        <li class="py-2 md:py-0">
                            <a href="../dist/Weather.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Weather.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Weather</a>
                        </li>
                        <!-- <li class="py-2 md:py-0">
                            <a href="../dist/Services.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php //if ($path == 'Services.php') {
                                                                                                                                                    //echo "border-b-2 border-black text-black";
                                                                                                                                                //} ?> ">Services</a>
                        </li> -->
                        <li class="py-2 md:py-0">
                            <a href="../dist/About.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'About.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">About</a>
                        </li>
                        <li class="py-2 md:py-0">
                            <a href="../dist/Contact.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Contact.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Contact</a>
                        </li>
                        <li class="py-2 md:py-0">
                            <a href="../dist/Faq.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Faq.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">FAQ</a>
                        </li>
                        <li class="sm:hidden py-2 md:py-0">
                            <a href="../dist/farmer_reg.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Contact.php') {
                                                                                                                                                    echo "border-b-2 border-black text-black";
                                                                                                                                                } ?> ">Register</a>
                        </li>
                        <li class="sm:hidden py-2 md:py-0">
                            <a href="../dist/Login.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'Contact.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>