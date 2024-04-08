<!-- Notification Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Notification</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/New notifications-bro.png" alt="">
        </div>
        <div class="relative h-32 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
            <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
            </div>
            <h1 class="z-10 h-full flex justify-center items-center text-7xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
                Notification received</h1>
        </div>
    </div>
    <div class="my-8 h-fit w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        if ($soilrequestdata == null && $sampledata == null) {
            echo "<div class='w-full h-fit px-4 py-3 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700'>No Notifications</div>";
        } else {
            if ($soilrequestdata != null) {
                foreach ($soilrequestdata as $nested_array) {
                    if ($nested_array["report_status"] == 'Generated') {
                        echo "<div class='w-full h-fit px-4 py-3 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700'>";
                        echo "<h1>Dear, </h1>";
                        // echo "<h1 class='w-fit px-6 py-4 text-justify'>We're truly thankful to you for selecting our laboratory for soil testing. Your trust is invaluable, and we're committed to providing accurate results to support your farming needs. Together, let's cultivate success and sustainability in agriculture.</h1>";
                        echo "<h1 class='w-fit px-6 text-justify'> Your request for a soil test has been <span class='border-b border-slate-700 dark:border-gray-200'>" . $nested_array["report_status"] . "</span>.</h1>";
                        // echo "Thank you for your continued trust and support.<br><div class='text-right pr-7 py-4'>Warm regards,<br>";
                        // echo $nested_array["lab_name"] . "<br>";
                        // echo $nested_array["ownership"] . "<br>";
                        // echo $nested_array["email"] . "<br>";
                        // echo $nested_array["city"] . " " . $nested_array["state"] . "</div>";
                        echo " </div>";
                    }
                    if ($nested_array["request_status"] == 'Approved') {
                        echo "<div class='w-full h-fit px-4 py-3 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700'>";
                        echo "<h1>Dear, </h1>";
                        // echo "<h1 class='w-fit px-6 py-4 text-justify'>We're truly thankful to you for selecting our laboratory for soil testing. Your trust is invaluable, and we're committed to providing accurate results to support your farming needs. Together, let's cultivate success and sustainability in agriculture.</h1>";
                        echo "<h1 class='w-fit px-6 text-justify'> Your request for a soil test has been <span class='border-b border-slate-700 dark:border-gray-200'>" . $nested_array["request_status"] . "</span>.</h1>";
                        // echo "Thank you for your continued trust and support.<br><div class='text-right pr-7 py-4'>Warm regards,<br>";
                        // echo $nested_array["lab_name"] . "<br>";
                        // echo $nested_array["ownership"] . "<br>";
                        // echo $nested_array["email"] . "<br>";
                        // echo $nested_array["city"] . " " . $nested_array["state"] . "</div>";
                        echo " </div>";
                    }
                }
            }
            if ($sampledata != null) {
                foreach ($sampledata as $nested_array) {
                    if ($nested_array["status"] !== 'Collected') {
                        continue; // Skip if status is not 'Collected'
                    }
                    echo "<div class='w-full h-fit px-4 py-3 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700'>";
                    echo "<h1>Dear, </h1>";
                    // echo "<h1 class='w-fit px-6 py-4 text-justify'>We're truly thankful to you for selecting our laboratory for soil testing. Your trust is invaluable, and we're committed to providing accurate results to support your farming needs. Together, let's cultivate success and sustainability in agriculture.</h1>";
                    echo "<h1 class='w-fit px-6 text-justify'>Sample request for soil test has been <span class='border-b border-slate-700 dark:border-gray-200'>" . $nested_array["status"] . "</span>.</h1>";
                    // echo "Thank you for your continued trust and support.<br><div class='text-right pr-7 py-4'>Warm regards,<br>";
                    // echo $nested_array["lab_id"] . "<br>";
                    // echo $nested_array["request_id"] . "<br>";
                    // echo $nested_array["sample_id"] . "<br>";
                    // echo $nested_array["farmer_id"] . " " . $nested_array["collected_date"] . "</div>";
                    echo " </div>";
                }
            }
        }
        ?>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
    </div>
    <div class="h-7"></div>
</section>