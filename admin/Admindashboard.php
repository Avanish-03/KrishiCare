<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/4140/4140048.png?ga=GA1.1.253096211.1707907143&">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950">

    <header class="sticky">
        <div class="bg-gray-800 h-20 text-white flex justify-around items-center">
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
                        <div class="hs-dropdown relative inline-flex">
                            <button id="hs-dropdown-custom-trigger" type="button" class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <img class="w-10 h-10 rounded-full" src="../img/avanish.jpg" alt="Maria">
                                <span class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-gray-400">Avanish</span>
                                ▽
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700" aria-labelledby="hs-dropdown-custom-trigger">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="#">
                                    Newsletter
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="#">
                                    Purchases
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="#">
                                    Downloads
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="#">
                                    Team Account
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="w-[100%]">
        <!-- side navbar -->
        <div class="w-[20%] h-[89vh] fixed bg-gray-800">
            <div>
                <h1 class="font-light text-xl text-gray-500 px-8">MENU</h1>
            </div>
            <ul class="mb-8 px-8">
                <li class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am1" class="flex w-full h-auto" onclick="showContent('ao1', 'am1')">
                        <i class="mr-2 text-xl fa-solid fa-house"></i>
                        Dashboard
                    </button>
                </li>

                <li class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am2" class="flex w-full h-auto" onclick="showContent('ao2', 'am2')">
                        <i class="mr-2 text-xl fa-solid fa-person-digging"></i>
                        Farmer
                    </button>
                </li>

                <li class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am3" class="flex w-full h-auto" onclick="showContent('ao3', 'am3')">
                        <i class="mr-2 text-xl fa-solid fa-flask-vial"></i>
                        Laboratory
                    </button>
                </li>

                <li class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am4" class="flex w-full h-auto" onclick="showContent('ao4', 'am4')">
                        <i class="mr-2 text-xl fa-solid fa-file-lines"></i>
                        Report
                    </button>
                </li>
                <li class="flex rounded-lg justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am5" class="flex w-full h-auto" onclick="showContent('ao5', 'am5')">
                        <i class="mr-2 text-xl fa-brands fa-facebook-messenger"></i>
                        Messages
                    </button>
                </li>
            </ul>
            <div>
                <h1 class="font-light text-xl text-gray-500 px-8">SETTING</h1>
            </div>
            <li class="flex rounded-lg py-3 mb-1 mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                <button id="am5" class="flex justify-start items-center w-full h-auto" onclick="showContent('ao5', 'am5')">
                    <i class="mr-2 text-xl fa-solid fa-user"></i>
                    Profile
                </button>
            </li>
            <li class="flex rounded-lg py-3 mb-3 mx-8 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50 font-bold">
                <button id="am5" class="flex justify-start items-center w-full h-auto" onclick="showContent('ao5', 'am5')">
                    <i class="mr-2 text-xl fa-solid fa-gear"></i>
                    Setting
                </button>
            </li>
            <div>
                <a href="../Backend/logout.php" class="border-2  px-2 py-1 rounded mx-10 text-white font-mono"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>

        </div>

        <!-- main contents -->
        <div class="w-[80%] ml-[20%]">
            <div class="h-screen">hello </div>
        </div>
    </main>

</body>

</html>