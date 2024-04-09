<!-- Notification Section -->
<section class="w-full h-full mx-auto my-8 px-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Report</h1>
    <!-- information Section -->
    <div class="h-48 w-full dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center">
        <div class="w-fit h-full flex justify-start px-8">
            <img class="h-full w-full" src="../img/reqest-data.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold">Reports</h1>
        </div>
    </div>
    
    <div class="relative h-fit w-full my-5 flex items-center bg-gray-200 dark:bg-slate-600 rounded-md">
        <div class="w-full m-2 p-2 h-full">
            <div class="p-4 bg-gray-100 dark:bg-gray-900 rounded-md overflow-x-scroll">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mb-2">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block pt-2 ps-10 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Requests">
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Report Id</th>
                            <th scope="col" class="px-6 py-3">Sample Collected date</th>
                            <th scope="col" class="px-6 py-3">Farmer Id</th>
                            <th scope="col" class="px-6 py-3">Farmer Name</th>
                            <th scope="col" class="px-6 py-3">Farmer Email</th>
                            <th scope="col" class="px-6 py-3">Farmer Address</th>
                            <th scope="col" class="px-6 py-3">Farmer City</th>
                            <th scope="col" class="px-6 py-3">Farmer State</th>
                            <th scope="col" class="px-6 py-3">Lab Id</th>
                            <th scope="col" class="px-6 py-3">Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($reportrequestdata == null) {
                        } else {
                            $reportrequestdatasize = count($reportrequestdata);
                            for ($i = 0; $i < $reportrequestdatasize; $i++) {
                                // Accessing values of the nested array at index $i
                                $nested_array = $reportrequestdata[$i];
                                echo "<tr class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>";
                                echo "<td class='px-6 py-4 font-medium whitespace-nowrap' >" . $nested_array["report_id"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["collected_date"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["farmer_id"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["first_name"] . " " . $nested_array["middle_name"] . " " . $nested_array["last_name"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["email"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["address"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["city"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["state"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["lab_id"] . "</td>";
                                echo "<td class='px-6 py-4 text-green-400'>" . ( $nested_array["status"] == 'Generated' ?  $nested_array["status"] : 'Processing') . "</td>";
                            //     echo "<td class='px-6 py-2'>
                            // <button onclick='acceptRequest(" . $nested_array["farmer_id"] . "," . $_SESSION['laboratory'] . ")' class='px-6 py-2 rounded-lg bg-green-300 hover:bg-green-400 text-gray-50 dark:text-gray-700'>
                            // " . ($nested_array["status"] ? "Accepted" : "Accept") . "</button>
                            // </td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <input type="hidden" name="requestStatus" id="requestStatus">
            </div>
        </div>
    </div>
    <div class="my-8 h-fit bg-gray-200 dark:bg-slate-600 p-8 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="w-fit h-fit rounded-lg">
            <div class="max-w-2xl mx-auto">
                <div class="bg-gray-300 shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-slate-700 dark:border-slate-700">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-gray-300">Number of reports are published on krishicare and help to the farmers</h5>
                        </a>
                        <p class="font-normal text-gray-700 mb-3 dark:text-gray-300">Here are the report for the krish yadav. who have request for the test of soil </p>
                        <a href="#" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-7"></div>
</section>