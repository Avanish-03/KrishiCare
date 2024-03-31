<?php include("Header.php") ?>
<section class="h-screen w-screen">
    <div class="h-fit md:h-[60%] w-full flex items-center justify-center my-9">
        <div class="h-full w-full py-6 flex flex-col justify-center sm:py-12 mt-8">
            <div>
                <h1 class="text-xl w-full text-center font-semibold">Welcome Back</h1>
                <h1 class="text-lg w-full text-center font-semibold my-4">We are <span class="text-green-500 border-b-2 py-1 border-green-500">Happy</span> to see you back</h1>
            </div>
            <div class="relative px-4 w-full h-full sm:mx-auto flex justify-center">
                <div class="relative min-w-96 px-4 py-10 w-[50%] shadow-lg sm:rounded-3xl sm:p-20 md:p-4 grid grid-cols-1 md:grid-cols-2">
                    <div class="w-full h-full mx-auto flex justify-center items-center">
                        <img class="h-full md:h-80 p-4 w-full" src="../img/Admin-bro.svg" alt="">
                    </div>
                    <div class="w-full h-full mx-auto pl-4">
                        <form id="ValidateUser" method="post" action="#">
                            <div class="divide-y divide-gray-200">
                                <div class="pt-8 pb-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="relative">
                                        <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Email</label>
                                    </div>
                                    <div class="relative w-full">
                                        <div class="relative flex justify-end items-center">
                                            <img id="eyeImg" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('eyeImg','pwd')">
                                            <input autocomplete="off" id="pwd" name="pwd" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                            <label for="pwd" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Password</label>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <input type="button" onclick="return varifyAdmin()" class="outline-none bg-gradient-to-r cursor-pointer from-green-300 to-green-500 text-white rounded-md px-2 py-1 w-full sm:w-full md:w-1/3" value="Verify Admin">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <input type="hidden" class="border" name="result" id="varifyAdmin">
                        <form id="varifyAdminForm">
                            <div class="relative my-2">
                                <input autocomplete="off" id="verifyotp" name="verifyotp" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Enter OTP" />
                                <label for="verifyotp" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Enter OTP</label>
                            </div>
                            <div class="relative">
                                <input type="button" onclick="return validateUser('admin')" class="outline-none bg-gradient-to-r cursor-pointer from-green-300 to-green-500 text-white rounded-md px-2 py-1 w-full sm:w-full md:w-1/3" value="Submit">
                            </div>
                        </form>
                        <div class="w-full h-7 flex justify-end text-sm items-center">
                            <p><a class="text-green-400 hover:text-green-600 hover:border-b-2 pb-0.5 hover:border-green-600 duration-100" href="AdminPassword.php">Change Password</a></p>
                        </div>
                        <input type="hidden" class="border" name="result" id="status">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("Footer.php") ?>
</section>