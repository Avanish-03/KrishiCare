<?php
session_start();

if ($_SESSION["admin"] == null) {
    header('Location: ' . 'http://localhost/Krishicare/dist/Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/4140/4140048.png?ga=GA1.1.253096211.1707907143&">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></script>

</head>

<body class="bg-gray-300">

    <div class="">
        <!-- side navbar -->
        <div class="w-[15%] md:block hidden h-screen fixed bg-white md:text-xl text-gray-500 list pt-6 shadow-md">
            <div class="flex items-center mb-4 -mt-4">
                <img src="https://cdn-icons-png.freepik.com/256/4140/4140048.png?ga=GA1.1.253096211.1707907143&" alt="" class="h-10 px-4">
                <h3 class="text-black font-mono text-xl">Avanish Yadav
                    <span class="text-xs font-bold">avanishyadav123@gmail.com</span>
                </h3>
            </div>
            <ul class="mb-72">
                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">
                    <button id="am1" class="flex px-10" onclick="showContent('ao1', 'am1')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/747/747327.png?ga=GA1.1.1583059735.1708077775&semt=ais" alt="">
                        Dashboard
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am2" class="flex px-10" onclick="showContent('ao2', 'am2')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/652/652076.png?ga=GA1.1.253096211.1707907143&" alt="">
                        Farmer
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am3" class="flex px-10" onclick="showContent('ao3', 'am3')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/2022/2022301.png?ga=GA1.1.253096211.1707907143&" alt="">
                        Laboratory
                    </button>
                </li>

                <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                    <button id="am4" class="flex px-10" onclick="showContent('ao4', 'am4')">
                        <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/944/944053.png?ga=GA1.1.253096211.1707907143&" alt="">
                        Report
                    </button>
                </li>

            </ul>

            <li class="py-4 flex text-black cursor-pointer hover:bg-gray-300">

                <button id="am5" class="flex px-10" onclick="showContent('ao5', 'am5')">
                    <img class="h-6 pr-2" src="https://cdn-icons-png.freepik.com/256/2040/2040504.png?ga=GA1.1.253096211.1707907143&" alt="">
                    Setting
                </button>
            </li>
            <a href="../Backend/logout.php" class="border-2 border-black px-2 py-1 rounded mx-10 text-white bg-black font-mono">Logout</a>

        </div>

        <div class="h-full md:w-[85%] w-full md:ml-[15%]">
            <div class="sticky top-0">
                <nav class="bg-white md:h-20 h-10 text-md shadow-md">
                    <ul class="flex justify-around mx-1 px-1 md:py-5">
                        <li>
                            <h1 class="md:text-2xl md:ml-44 text-lg font-bold mt-2">WELLCOME TO ADMIN PANEL - ADMIN</h1>
                        </li>
                        <li class="md:hidden block">
                            <button><img src="https://cdn-icons-png.freepik.com/256/3889/3889524.png?ga=GA1.1.253096211.1707907143&semt=ais" alt="" class="h-6 mt-2"></button>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- main content -->
            <div class="text-justify md:mx-10 md:my-4">

                <!-- dashboard -->
                <div id="ao1" class="content">

                    <?php include('dashboard.php'); ?>
                </div>
            </div>
            <!-- page 2 -->
            <div id="ao2" class="content hidden">
                <?php include('farmer.php'); ?>
            </div>

            <!-- page 3 -->
            <div id="ao3" class="content hidden">
                <?php include('lab.php'); ?>
            </div>

            <!-- page 4 -->
            <div id="ao4" class="content hidden">
                <?php include('report.php'); ?>
            </div>

            <!-- page 5 -->
            <div id="ao5" class="content hidden">
                <?php include('setting.php'); ?>
            </div>

        </div>
    </div>

    </div>

    <!-- java script -->
    <script>
        // button change code
        var display = 0;

        function showContent(contentId, buttonId) {
            // Hide all content 
            var contentDivs = document.getElementsByClassName('content');
            for (var i = 0; i < contentDivs.length; i++) {
                contentDivs[i].classList.add('hidden');
            }

            // Deactivate all buttons
            var buttonElements = document.getElementsByTagName('button');
            for (var i = 0; i < buttonElements.length; i++) {
                buttonElements[i].classList.remove('active');
            }

            // Show the selected content and activate the corresponding button
            document.getElementById(contentId).classList.remove('hidden');
            document.getElementById(buttonId).classList.add('active');

            // Store the active button in local storage
            localStorage.setItem('activeButtonId', buttonId);

        }
        document.addEventListener("DOMContentLoaded", function() {
            var activeButtonId = localStorage.getItem('activeButtonId');

            if (activeButtonId) {
                // Activate the last active button
                document.getElementById(activeButtonId).classList.add('active');

                // Show the corresponding content
                showContent('content' + activeButtonId.slice(-1), activeButtonId);
            } else {
                // If no active button found, show the default content and activate the default button
                showContent('ao1', 'am1');
            }
        });
    </script>
</body>

</html>