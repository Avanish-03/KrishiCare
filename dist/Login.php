<?php include("Header.php") ?>
<section class="h-screen">
    <div class="h-3/4 flex items-center justify-center">
        <div class="min-h-full py-6 flex flex-col justify-center sm:py-12 mt-8">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-green-300 to-green-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Login Form with Floating Labels</h1>
                        </div>
                        <form id="ValidateUser" method="post" action="#">
                            <div class="divide-y divide-gray-200">
                                <div class="pt-8 pb-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="relative">
                                        <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                                        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Email
                                            Address</label>
                                    </div>
                                    <div class="relative w-full">
                                        <div class="relative flex justify-end items-center">
                                            <img id="eyeImg" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('eyeImg','pwd')">
                                            <input autocomplete="off" id="pwd" name="pwd" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                            <label for="pwd" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm duration-700">Password</label>
                                        </div>
                                    </div>
                                    <div class="w-full flex justify-between">
                                        <div class="flex gap-2 ">
                                            <input type="radio" name="user" id="farmer"><label for="farmer">Farmer</label>
                                        </div>
                                        <div class="flex gap-2 ">
                                            <input type="radio" name="user" id="laboratory"><label for="laboratory">Laboratory</label>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <input type="button" onclick="return validateUser()" class="bg-gradient-to-r cursor-pointer from-green-300 to-green-500 text-white rounded-md px-2 py-1 w-1/3" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <input type="hidden" name="result" id="status">
                    </div>
                    <div>
                        <p class="text-blue-600 cursor-pointer">Forgot password? </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("Footer.php") ?>
</section>