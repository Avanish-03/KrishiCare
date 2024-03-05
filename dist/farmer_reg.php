<?php include("Header.php"); ?>
<!-- Farmer resiter page -->
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center bg-fixed bg-cover" style="background-image: url('../img/dron-img.jpg');">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-5xl font-serif text-gray-600">Farmer Register form</h2>
            <p class="text-gray-700 text-xl mb-6">Get started with us</p>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Farmer Details</p>
                        <p>Please fill out all the fields.</p>
                    </div>

                    <div class="lg:col-span-2">
                        <form id="farmForm" method="post" action="#">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                <div class="md:col-span-4">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-4">
                                    <label for="middlename">Middle Name</label>
                                    <input type="text" name="middlename" id="middlename" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-4">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" id="contact" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-4">
                                    <label for="address">Address / Street</label>
                                    <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="state">State</label>
                                    <select type="text" name="state" id="state" class="state h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" onchange="loadCities()"></select>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">City</label>
                                    <select type="text" name="city" id="city" class="city h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder=""></select>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="pwd">Password</label>
                                    <input type="password" name="pwd" id="pwd" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="cpwd">Confirm Password</label>
                                    <input type="password" name="cpwd" id="cpwd" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-5 text-left">
                                    <div class="inline-flex items-center">
                                        <button class="bg-green-700 text-lg text-white font-serif py-2 px-16 rounded" onclick="return registerFarmer()">Submit</button>
                                    </div>
                                    <p class="text-sm mt-3">If you Already registered ? <a href="Login.php" class="text-blue-800 underline italic">Login</a></p>
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