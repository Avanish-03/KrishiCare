<!-- Notification Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Notification</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Push notifications-rafiki.svg" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold">Notification received</h1>
        </div>
    </div>
    <div class="my-8 h-fit w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php
        echo "<div class='w-full h-fit px-4 py-3 dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-700'>";
        if ($soilrequestdata == null) {
            echo "<div>No Notifications</div>";
        } else {
            $soilrequestdatasize = count($soilrequestdata);
            for ($i = 0; $i < $soilrequestdatasize; $i++) {
                // Accessing values of the nested array at index $i
                $nested_array = $soilrequestdata[$i];
                if ($nested_array["status"] !== 'Approved') {
                } else {
                    echo "<h1>Dear, </h1>";
                    echo "<h1 class='w-fit px-6 py-4 text-justify'>
                We're truly thankful to you to selecting our laboratory for soil testing. Your trust is invaluable, and we're committed to providing accurate results to support your farming needs. Together, let's cultivate success and sustainability in agriculture.
                Your request for a soil test has been duly <span class='border-b'>" . $nested_array["status"] . "</span>.</h1>";
                    echo "Thank you for your continued trust and support.<br><div class='text-right pr-7 py-4'>Warm regards,<br>";
                    echo $nested_array["lab_name"] . "<br>";
                    echo $nested_array["ownership"] . "<br>";
                    echo $nested_array["email"] . "<br>";
                    echo $nested_array["city"] . " " . $nested_array["state"] . "</div>";
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