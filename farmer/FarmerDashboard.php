<!DOCTYPE html>
<html lang="en" id="html" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../src/Js/code.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.3.2/cdn.js'></script>
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="../dist/output.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>
    <div class="h-screen w-screen min-w-96 min-h-screen">
        <div class="w-full h-[10%] outline-none">
            <!-- navbar -->
            <div class="bg-slate-200 dark:bg-slate-900 h-full px-4 flex items-center duration-500">
                <div class="w-[50%] flex items-center h-fit py-auto">
                    <img id="" class="h-full text-center duration-500" src="../img/icons8-tree-planting-48.png" alt="">
                    <h1 class="ml-3 text-2xl duration-500 text-green-700 dark:text-white font-[poppling]">KrishiCare
                    </h1>
                </div>
                <div class="w-[50%] h-full flex justify-end">
                    <!-- <div class="w-[50%] h-full"></div> -->
                    <div class="w-[50%] h-full flex items-center justify-end">
                        <div class="lg:inline-flex hidden md:w-[75%] md:inline-flex text-right">
                            <div class="w-full">
                                <h1 class="text-black dark:text-white font-bold">Suraj Dubey</h1>
                                <p class="text-sm text-slate-400">suraj@gmail.com</p>
                            </div>
                        </div>
                        <div onclick="toggleMode()" class="h-full md:w-auto sm:w-full p-3 cursor-pointer flex items-center justify-end duration-700">
                            <img id="mode" src="../img/dark-bulb.png" class="h-full p-1 bg-none dark:bg-gray-500 rounded-full rotate-180 duration-500" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[90%] flex">
            <!-- Sidebar -->
            <div id="sidebar" class="bg-slate-200 dark:bg-slate-900 h-full p-5 w-72 relative duration-500">
                <!-- arrow icon -->
                <div onclick="toggleSidebar()" class="bg-white w-fit rounded-full px-0.5 absolute -right-3 top-4 cursor-pointer shadow-lg">
                    <svg id="arrow" xmlns="http://www.w3.org/2000/svg" class="h-7 p-1 duration-500" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                </div>
                <div class="lg:inline-flex md:flex my-2 h-[15%] w-full gap-2">
                    <img id="profile" class="h-10" src="../img/profile.png" alt="">
                    <div class="w-full duration-300 heading" id="">
                        <h1 class="text-black font-bold dark:text-white">Suraj Dubey</h1>
                        <p class="text-sm text-slate-400">suraj@gmail.com</p>
                    </div>
                </div>
                <div class="w-full h-[60%]">
                    <div class="w-full h-[15%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img class="h-5" src="../img/home.png" alt="">
                        <div class="heading duration-300">Home</div>
                    </div>
                    <div class="w-full h-[15%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img class="h-5" src="../img/bell.png" alt="">
                        <div class="heading duration-300">Notification</div>
                    </div>
                    <div class="w-full h-[15%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img class="h-5" src="../img/shovel.png" alt="">
                        <div class="heading duration-300">Soil</div>
                    </div>
                    <div class="w-full h-[15%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img class="h-5" src="../img/wheat.png" alt="">
                        <div class="heading duration-300">Crop</div>
                    </div>
                    <div class="w-full h-[15%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img class="h-5" src="../img/cloudy.png" alt="">
                        <div class="heading duration-300">Weather</div>
                    </div>
                </div>
                <div class="w-full h-[25%]">
                    <div class="w-full h-[35%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img src="../img/settings.png" class="h-5" alt="">
                        <div class="heading duration-300">Settings</div>
                    </div>
                    <div class="w-full h-[35%] space-x-2 text-black dark:text-white hover:rounded flex items-center px-2 hover:bg-slate-300 dark:hover:bg-slate-700">
                        <img src="../img/logout.png" class="h-5" alt="">
                        <div class="heading duration-300">Logout</div>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div id="maincontent" class="w-full h-full bg-gray-100 dark:bg-slate-800 overflow-y-auto static">
                <div class="absolute bottom-2 right-8 m-2 bg-white px-1.5 py-1 w-fit rounded-full text-black cursor-pointer animate-bounce shadow-lg">
                    <a href="#section-1">
                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" class="h-5 duration-500 rotate-90" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                    </a>
                </div>
                <div class="h-full flex justify-center items-center duration-1000" id="section-1">Home</div>
                <div class="h-full flex justify-center items-center" id="section-2">Dashboard</div>
                <div class="h-full flex justify-center items-center" id="section-3">about</div>
                <div class="h-full flex justify-center items-center" id="section-4">Contact</div>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var arrow = document.getElementById("arrow");
            // var heading = document.getElementById("heading");
            // var logo = document.getElementById("logo");

            var opensidebar = sidebar.classList.contains("w-72");
            if (opensidebar) {
                sidebar.classList.add("w-20");
                sidebar.classList.remove("w-72");
                arrow.classList.add("rotate-180");
                // heading.classList.add("scale-0");
                // logo.classList.add("rotate-[360deg]");
                toggleheadings(opensidebar);
            } else {
                sidebar.classList.add("w-72");
                sidebar.classList.remove("w-20");
                arrow.classList.remove("rotate-180");
                // heading.classList.remove("scale-0");
                toggleheadings(opensidebar);
                // logo.classList.remove("rotate-[360deg]");
            }
        }

        function toggleheadings(opensidebar) {
            var headings = document.getElementsByClassName("heading");
            for (let i = 0; i < headings.length; i++) {
                if (opensidebar) {
                    headings[i].classList.add("scale-0");
                } else {
                    headings[i].classList.remove("scale-0");
                }
            }
        }

        function toggleMode() {
            var html = document.getElementById("html");
            var img = document.getElementById("mode");

            var mode = html.classList.contains("dark");
            if (mode) {
                console.log(mode);
                html.classList.remove("dark");
                img.src = "../img/light-bulb.png";
            } else {
                console.log(mode);
                html.classList.add("dark");
                img.src = "../img/dark-bulb.png";
            }
        }
    </script>
</body>

</html>