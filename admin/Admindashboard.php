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
                    <div class=" rounded-full flex justify-around items-center">
                        <button><i class="hover:bg-gray-900 text-2xl rounded-md fa-solid fa-lightbulb px-2"></i></button>
                    </div>
                    <div class="">
                        <button><i class="hover:bg-gray-900 rounded-md text-2xl fa-regular fa-bell px-2"></i></button>
                    </div>
                    <div class="">
                        <button><i class="hover:bg-gray-900 rounded-md text-2xl fa-solid fa-comment-dots px-2"></i></button>
                    </div>
                    <div class="flex justify-end items-center ml-16 text-right">
                        <div>
                            <h1 class="text-sm font-bold">Avanish Yadav</h1>
                            <h6 class="font-mono">avanishyadav@gmail.com</h6>
                        </div>
                        <div>
                            <img src="https://cdn-icons-png.freepik.com/256/4140/4140048.png?ga=GA1.1.253096211.1707907143&" class="rounded-full h-12" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="w-[100%]">
        <!-- side navbar -->
        <div class="w-[20%] h-[89vh] fixed bg-gray-800">
            <ul class="mb-80 px-8">
                <li class="flex justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am1" class="flex w-full h-auto" onclick="showContent('ao1', 'am1')">
                        <i class="mr-2 text-xl fa-solid fa-house"></i>
                        Dashboard
                    </button>
                </li>

                <li class="flex justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am2" class="flex w-full h-auto" onclick="showContent('ao2', 'am2')">
                        <i class="mr-2 text-xl fa-solid fa-person-digging"></i>
                        Farmer
                    </button>
                </li>

                <li class="flex justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am3" class="flex w-full h-auto" onclick="showContent('ao3', 'am3')">
                        <i class="mr-2 text-xl fa-solid fa-flask-vial"></i>
                        Laboratory
                    </button>
                </li>

                <li class="flex justify-center items-center py-3 px-4 text-gray-100 cursor-pointer hover:bg-gray-700 hover:bg-opacity-50  hover:text-white font-bold">
                    <button id="am4" class="flex w-full h-auto" onclick="showContent('ao4', 'am4')">
                        <i class="mr-2 text-xl fa-solid fa-file-lines"></i>
                        Report
                    </button>
                </li>

            </ul>
        </div>

        <!-- main contents -->
        <div class="w-[80%] ml-[20%]">

        </div>
    </main>

</body>

</html>