<?php include('Header.php'); ?>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center bg-fixed bg-cover" style="background-image: url('../img/9RA-img1.jpg');">
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:mx-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>
            <form action="#" method="post" id="loginForm">
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button onclick="return validateUser()" class="text-white border-0 py-2 px-8 focus:outline-none bg-green-600 hover:bg-green-700 active:bg-greeen-700 rounded text-lg">Login</button>
                <p class="text-sm text-gray-500 mt-3">If you don't have an account ? <a href="Register.php" class="text-blue-800 underline italic">Register</a></p>
            </form>
            <input type="hidden" id="status" class="bg-black text-white">
        </div>
    </div>
</section>

<?php include('Footer.php'); ?>