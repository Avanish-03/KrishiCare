<?php include("Header.php") ?>
<section class="h-screen ">
    <div class="h-3/4 flex items-center justify-center">
        <div class="min-h-full py-6 flex flex-col justify-center sm:py-12 mt-8">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-green-300 to-green-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="w-96 max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Login Form</h1>
                        </div>
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
                                    <div class="w-full flex justify-between">
                                        <div class="flex gap-2 ">
                                            <input class="outline-none" type="radio" name="user" id="farmer"><label for="farmer">Farmer</label>
                                        </div>
                                        <div class="flex gap-2 ">
                                            <input class="outline-none" type="radio" name="user" id="laboratory"><label for="laboratory">Laboratory</label>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <input type="button" onclick="return validateUser()" class="outline-none bg-gradient-to-r cursor-pointer from-green-300 to-green-500 text-white rounded-md px-2 py-1 w-1/3" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <input type="hidden" name="result" id="status">
                    </div>

                    <!-- forgot password -->
                    <div>

                        <!-- Modal toggle -->
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-blue-700 font-medium rounded-lg text-sm py-2.5 text-center " type="button">
                            Forgot Password ?
                        </button>

                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full ">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Sign in to our platform
                                        </h3>
                                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4" action="#">
                                            <div>
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                                            </div>
                                            <div>
                                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                                            </div>
                                            <div class="flex justify-between">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                                    </div>
                                                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                                </div>
                                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                            </div>
                                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("Footer.php") ?>
</section>