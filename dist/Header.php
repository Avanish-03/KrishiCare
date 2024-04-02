<header>
    <div class="h-10 w-full bg-slate-200 flex justify-around items-center">
        <div class="flex justify-start items-center font-mono">
            <p class="px-2 flex">
                <a href="" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pr-1" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm90.7 96.7c9.7-2.6 19.9 2.3 23.7 11.6l20 48c3.4 8.2 1 17.6-5.8 23.2L168 231.7c16.6 35.2 45.1 63.7 80.3 80.3l20.2-24.7c5.6-6.8 15-9.2 23.2-5.8l48 20c9.3 3.9 14.2 14 11.6 23.7l-12 44C336.9 378 329 384 320 384C196.3 384 96 283.7 96 160c0-9 6-16.9 14.7-19.3l44-12z" />
                    </svg>
                </a>
                +91-635-592-3490
            </p>
            <p class="px-2 flex">
                <a href="" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pr-1" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                </a>
                krishicare@gmail.com
            </p>
            
        </div>
        <div>
            <span class="flex  items-center">
                <a class="text-gray-600">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 cursor-pointer" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-600">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 cursor-pointer" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-600">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 cursor-pointer" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-600">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-4 h-4 cursor-pointer" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </div>
</header>
<?php

$path = $_SERVER['REQUEST_URI'];
$path = explode('/', $path);
$path = end($path);

?>

<!-- NAVBAAR! -->
<section class="sticky top-0 z-50 min-w-96">
    <nav class="bg-white border-gray-200 dark:bg-white shadow-lg">
        <div class="flex flex-wrap md:items-center justify-between mx-auto p-3">
            <a href="Home.php" class="flex md:items-center space-x-2 rtl:space-x-reverse sm:w-fit md:ml-10">
                <img src="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais" alt="" class="h-10 lg:block sm:hidden hidden">
                <p class="self-center text-3xl font-serif font-bold dark:text-black ">KrishiCare</p>
            </a>
            <div class="flex items-center md:items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse lg:pr-2">
                <button type="button" data-dropdown-toggle="register-dropdown-menu" class="hidden mx-2 sm:inline-flex items-center hover:text-green-900 text-lg font-bold hover:border-b-2 border-black">Register</button>
                <!--Register Dropdown -->
                <div class="z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-white" id="register-dropdown-menu">
                    <ul class="font-medium" role="none">
                        <li>
                            <a href="farmer_reg.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">Farmer</div>
                            </a>
                        </li>
                        <li>
                            <a href="lab_reg.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">Laboratory</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <span class="hidden sm:flex text-lg font-bold px-2">|</span>
                <button type="button" data-dropdown-toggle="login-dropdown-menu" class="hidden mx-2 sm:inline-flex items-center hover:text-green-900 text-lg font-bold hover:border-b-2 border-black">Login</button>
                <!--Login Dropdown -->
                <div class="z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-white" id="login-dropdown-menu">
                    <ul class="font-medium" role="none">
                        <li>
                            <a href="FarmerLogin.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">Farmer</div>
                            </a>
                        </li>
                        <li>
                            <a href="LabLogin.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">Laboratory</div>
                            </a>
                        </li>
                        <li>
                            <a href="Login.php" class="block px-4 py-2 text-md text-gray-900 hover:bg-gray-100 dark:text-black dark:hover:bg-gray-300 dark:hover:text-gray-700" role="menuitem">
                                <div class="inline-flex items-center">Admin</div>
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
                                                                                                                                            //} 
                                                                                                                                            ?> ">Services</a>
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
                        <a href="../dist/farmer_reg.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'farmer_reg.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Register</a>
                    </li>
                    <li class="sm:hidden py-2 md:py-0">
                        <a href="../dist/FarmerLogin.php" class="mr-3 hover:text-green-900 text-lg font-bold hover:border-b-2 border-black <?php if ($path == 'FarmerLogin.php') {
                                                                                                                                                echo "border-b-2 border-black text-black";
                                                                                                                                            } ?> ">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>