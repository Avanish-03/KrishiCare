<?php require('Header.php'); ?>

<section class="text-gray-600 h-screen body-font">
    <div class="container h-3/4 mx-auto flex flex-wrap items-center justify-center bg-fixed bg-cover" style="background-image: url('../img/9RA-img1.jpg');">
        <div class="flex justify-center items-center px-44">
            <div class="w-full max-w-xs border-2 bg-white shadow-xl rounded pb-4">
                <div class="text-center font-bold bg-green-800 p-2 text-white text-2xl">ADMIN LOGIN PANEL</div>
                <form id="ValidateAdmin" class="px-8 pt-6 mb-4">
                    <div class="mb-4 flex justify-center items-center">
                        <img class="h-10 bg-gray-200 rounded border p-3 mr-1" src="https://cdn-icons-png.freepik.com/256/12000/12000759.png?uid=R129996386&ga=GA1.2.1933265658.1701935286&semt=ais" alt="">
                        <input id="email" name="email" type="text" placeholder="Email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 foucs:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4 flex justify-center items-center">
                        <img id="eyeImg" class="h-10 bg-gray-200 rounded border p-3 mr-1" src="../img/eye.png" alt="" onclick="togglepassword('eyeImg','pwd')">
                        <input id="pwd" name="pwd" type="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  foucs:outline-none foucs:shadow-outline">
                    </div>
                    <div class="flex items-center justify-center pb-2">
                        <input onclick="validateAdmin()" name="adminlogin" value="LogIn" type="button" class="bg-green-800 hover:bg-green-900 text-white font-bold py-1 px-4 rounded focus:outline-none">
                    </div>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-700" href="#">
                        Forgot Password ?
                    </a>
                </form>
                <input type="hidden" name="result" id="status">
            </div>
        </div>
    </div>
    <?php include('Footer.php'); ?>
</section>