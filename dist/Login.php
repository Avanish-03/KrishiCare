<?php include('Header.php'); ?>

<section class="text-gray-600 body-font">
<<<<<<< HEAD
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
=======
    <div class="container px-96 py-24 mx-auto flex flex-wrap items-center bg-fixed bg-cover" style="background-image: url('../img/9RA-img1.jpg');">
        <div class="flex justify-center items-center px-44">
            <div class="w-full max-w-xs border-2 bg-white shadow-xl rounded pb-4">
                <div class="text-center font-bold bg-green-800 p-2 text-white text-2xl">ADMIN LOGIN PANEL</div>
                <form method="post" action="admindashbord.html" class="px-8 pt-6 mb-4">
                    <div class="mb-4 flex justify-center items-center">
                        <img class="h-10 bg-gray-200 rounded border p-3 mr-1" src="https://cdn-icons-png.freepik.com/256/12000/12000759.png?uid=R129996386&ga=GA1.2.1933265658.1701935286&semt=ais" alt="">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 foucs:outline-none focus:shadow-outline" id="uname" type="text" placeholder="Username">
                    </div>
                    <div class="mb-4 flex justify-center items-center">
                        <img class="h-10 bg-gray-200 rounded border p-3 mr-1" src="https://cdn-icons-png.freepik.com/256/1828/1828471.png?uid=R129996386&ga=GA1.2.1933265658.1701935286&semt=ais" alt="">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  foucs:outline-none foucs:shadow-outline" id="pwd" type="password">
                    </div>
                    <div class="flex items-center justify-center pb-2">
                        <button class="bg-green-800 hover:bg-green-900 text-white font-bold py-1 px-4 rounded focus:outline-none" type="submit">
                            LogIn
                        </button>
                    </div>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-700" href="#">
                        Forgot Password ?
                    </a>
                </form>
            </div>
>>>>>>> 3dc3f9c069cb990dd2ea5c5f45169c3952c1d6ca
        </div>
    </div>
</section>

<?php include('Footer.php'); ?>
<!-- <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:mx-auto w-full mt-10 md:mt-0">
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
        <button onclick="return validateUser()" class="text-white border-0 py-2 px-8 focus:outline-none bg-green-700 rounded text-lg">Login</button>
        <p class="text-sm text-gray-500 mt-3">If you don't have an account ? <a href="Register.php" class="text-blue-800 underline italic">Register</a></p>
    </form>
    <input type="hidden" id="status" class="bg-black text-white">
</div> -->