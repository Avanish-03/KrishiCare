<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <title>KrishiCare - Farmer Information System</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
</head>

<body onload="loadStates()">

    <?php include("Header.php") ?>
    <!-- Farmer resiter page -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center bg-fixed bg-cover" style="background-image: url('../img/dron-img.jpg');">
        <div class="mx-auto">
            <div>
                <h2 class="font-semibold text-5xl font-serif text-gray-600">Farmer Register form</h2>
                <p class="text-gray-700 text-xl mb-6">Get started with us</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Farmer Details</p>
                            <p>Please fill out all the fields.</p>
                            <img src="../img/Sign up-amico.png" class="h-fit" alt="">
                        </div>
                        <div class="lg:col-span-2">
                            <form id="farmForm" method="post" action="#">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                    <div class="md:col-span-4">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" id="firstname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        <span class="text-red-500" id="spanfirstname"></span>
                                    </div>

                                    <div class="md:col-span-4">
                                        <label for="middlename">Middle Name</label>
                                        <input type="text" name="middlename" id="middlename" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        <span class="text-red-500" id="spanmiddlename"></span>
                                    </div>

                                    <div class="md:col-span-4">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        <span class="text-red-500" id="spanlastname"></span>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                        <span class="text-red-500" id="spanemail"></span>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="contact">Contact</label>
                                        <input type="text" name="contact" id="contact" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        <span class="text-red-500" id="spancontact"></span>
                                    </div>

                                    <div class="md:col-span-4">
                                        <label for="address">Address / Street</label>
                                        <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        <span class="text-red-500" id="spanaddress"></span>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="state">State</label>
                                        <!-- <input type="text" name="state" id="state" class="state h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" /> -->
                                        <select type="text" name="state" id="state" class="state h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" onchange="loadCities()"></select>
                                        <span class="text-red-500" id="spanstate"></span>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="city">City</label>
                                        <!-- <input type="text" name="city" id="city" class="city h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" /> -->
                                        <select type="text" name="city" id="city" class="city h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder=""></select>
                                        <span class="text-red-500" id="spancity"></span>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="pwd">Password</label>
                                        <div class="relative flex justify-end items-center">
                                            <img id="imgpwd" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('imgpwd','pwd')">
                                            <input type="password" name="pwd" id="pwd" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>
                                        <span class="text-red-500" id="spanpass"></span>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="cpwd">Confirm Password</label>
                                        <div class="relative flex justify-end items-center">
                                            <img id="imgcpwd" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('imgcpwd','cpwd')">
                                            <input type="password" name="cpwd" id="cpwd" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>
                                        <span class="text-red-500" id="spancpass"></span>
                                    </div>

                                    <div class="md:col-span-5 text-left">
                                        <div class="inline-flex items-center">
                                            <button class="outline-none cursor-pointer bg-green-600 hover:bg-green-700 text-lg text-white font-serif py-2 px-16 rounded-md  w-full sm:w-full md:w-fit" onclick="return registerFarmer()">Register</button>
                                        </div>
                                        <p class="text-sm mt-3">If you Already registered ? <a class="text-green-400 hover:text-green-600 hover:border-b-2 pb-0.5 hover:border-green-600 duration-100 hover:italic" href="FarmerLogin.php">Login</a></p>
                                    </div>
                                </div>
                            </form>
                            <input type="hidden" id="status" class="bg-black text-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("Footer.php"); ?>

</body>

</html>