<?php
session_start();
include("../Backend/config.php");
if ($_SESSION["farmer"] == false) {
    header("location: ../dist/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en" id="html" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <!-- <link rel="stylesheet" href="../tailwind.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="../src/Js/code.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body onload="farmerMenuLoader('dashboard','<?php echo $_SESSION['farmer'] ?>'); loadChart();">
    <?php
    $id = $_SESSION["farmer"];
    // echo $id;
    $sql = "SELECT `farmer_id`,`first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state` FROM `farmer_detail` WHERE `farmer_id`= '$id';";

    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["farmer_id"] . " - Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
            // $data[] = $row;
    ?>
            <div class="h-screen w-screen min-w-96 min-h-screen">
                <div class="w-full h-[10%] outline-none">
                    <!-- navbar -->
                    <div class="bg-slate-200 dark:bg-slate-900 h-full px-4 flex items-center duration-500">
                        <div class="w-[50%] flex items-center h-fit py-auto">
                            <img src="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais" class="sm:h-10 h-6" alt="">
                            <h1 class="sm:text-3xl font-serif cursor-pointer text-gray-500 dark:text-gray-300">KrishiCare</h1>
                        </div>
                        <div class="w-[50%] h-full flex justify-end">
                            <!-- <div class="w-[50%] h-full"></div> -->
                            <div class="w-[50%] h-full flex items-center justify-end">
                                <div class="lg:inline-flex hidden md:w-[75%] md:inline-flex text-right">
                                    <div class="w-full">
                                        <h1 class="text-black dark:text-white font-bold"><?php echo $row["first_name"] . " " . $row["middle_name"]; ?></h1>
                                        <p class="text-sm text-slate-400"><?php echo $row["email"] ?></p>
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
                        <div onclick="toggleSidebar()" class="z-20 bg-white w-fit rounded-full px-0.5 absolute -right-3 top-2 cursor-pointer shadow-lg">
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" class="h-7 p-1 duration-500" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>
                        </div>
                        <div class="lg:inline-flex md:flex my-2 h-[15%] w-full pt-4 gap-2">
                            <img id="profile" class="h-10" src="../img/profile.png" alt="">
                            <div class="w-full duration-300 heading" id="">
                                <h1 class="text-black font-bold dark:text-white"><?php echo $row["first_name"] . " " . $row["middle_name"]; ?></h1>
                                <p class="text-sm text-slate-400"><?php echo $row["email"] ?></p>
                            </div>
                        </div>
                        <div class="w-full h-[60%]">
                            <div onclick="farmerMenuLoader('dashboard','<?php echo $_SESSION['farmer'] ?>'); loadChart()" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-house"></i>
                                <div class="heading duration-300 cursor-pointer">Home</div>
                            </div>
                            <div onclick="farmerMenuLoader('notification','<?php echo $_SESSION['farmer'] ?>')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-bell"></i>
                                <div class="heading duration-300 cursor-pointer">Notification</div>
                            </div>
                            <div onclick="farmerMenuLoader('soil','<?php echo $_SESSION['farmer'] ?>')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="rotate-180 fa-solid fa-icicles"></i>
                                <div class="heading duration-300 cursor-pointer">Soil</div>
                            </div>
                            <div onclick="farmerMenuLoader('crop','<?php echo $_SESSION['farmer'] ?>')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-wheat-awn"></i>
                                <div class="heading duration-300 cursor-pointer">Crop</div>
                            </div>
                            <div onclick="farmerMenuLoader('weather','<?php echo $_SESSION['farmer'] ?>')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-cloud-bolt"></i>
                                <div class="heading duration-300 cursor-pointer">Weather</div>
                            </div>
                        </div>
                        <div class="w-full h-[25%]">
                            <div onclick="farmerMenuLoader('profile','<?php echo $_SESSION['farmer'] ?>')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-user"></i>
                                <div class="heading duration-300 cursor-pointer">Profile</div>
                            </div>
                            <div onclick="farmerMenuLoader('setting','<?php echo $_SESSION['farmer'] ?>')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-gear"></i>
                                <div class="heading duration-300 cursor-pointer">Settings</div>
                            </div>
                            <div onclick="logoutUser('farmer')" class="w-full py-3 space-x-2 text-black dark:text-white hover:rounded flex items-center px-3 hover:bg-slate-300 dark:hover:bg-slate-700">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <div class="heading duration-300 cursor-pointer">Logout</div>
                            </div>
                        </div>
                    </div>
                    <!-- Content -->
                    <div id="maincontent" class="w-full h-full bg-gray-100 dark:bg-slate-800 overflow-y-auto static">
                        <div class="z-20 absolute bottom-2 right-8 m-2 bg-white px-1.5 py-1 w-fit rounded-full text-black cursor-pointer animate-bounce shadow-lg">
                            <a href="#section">
                                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" class="h-5 duration-500 rotate-90" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                </svg>
                            </a>
                        </div>
                        <div class="h-full flex justify-center items-center duration-1000" id="section">
                            <!-- <p class="text-gray-300"> <?php echo "Farmer id -: " . $_SESSION["farmer"]; ?></p> -->
                            <?php include("Dashboard.php") ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo "No user found";
    }
    ?>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>