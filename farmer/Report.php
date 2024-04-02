<?php
session_start();
?>
<!-- Report Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Report</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Attached files-rafiki.svg" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-gray-100 text-4xl font-bold">Reports</h1>
        </div>
    </div>
    <div class="my-8 h-fit w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <div class="w-full h-fit flex flex-col py-4 bg-gray-200 rounded-lg dark:bg-slate-700">
            <div class="h-full w-full flex justify-center items-center">
                <img class="h-80 w-80" src="../img/Download-rafiki.svg" alt="">
            </div>
            <div class="h-full w-full flex justify-center items-center gap-x-4">
                <form action="../Backend/Reports/SoilTestReport/ViewReport.php" method="POST">
                    <input type="hidden" name="farmerid" value='<?php echo $_SESSION["farmer"]; ?>' />
                    <input type="submit" class="bg-green-600 cursor-pointer text-white rounded-lg p-2" name="viewReport" value="View Report">
                </form>
                <form action="../Backend/Reports/SoilTestReport/DownloadReport.php" method="POST" class="relative">
                    <input type="submit" class="bg-red-600 cursor-pointer text-white rounded-lg pl-4 pr-8 py-2" name="downloadReport" value="Download Report">
                    <input type="hidden" name="farmerid" value='<?php echo $_SESSION["farmer"]; ?>' />
                    <i class="fa-solid fa-download absolute py-3 text-white right-2"></i>
                </form>
            </div>
        </div>
        <!-- <div class="p-8 bg-gray-200 dark:bg-slate-700 rounded-lg">
            <h1 class="text-2xl dark:text-gray-100 font-bold">Download Your Report</h1>
            <p class="dark:text-gray-200 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam delectus quam sint consequuntur iure incidunt obcaecati quidem aperiam expedita perspiciatis, magnam voluptates harum possimus doloribus minima, sapiente numquam voluptas praesentium rerum tempora, eius ipsam distinctio architecto? Facilis reprehenderit iste labore pariatur unde. Nam incidunt ab soluta nemo, harum dolor, velit pariatur porro voluptates earum, similique rerum. Cum suscipit tenetur laboriosam nam voluptatum ducimus debitis vitae iste odit optio. Aspernatur aliquam ad voluptatum dolores, temporibus vitae maxime nostrum eligendi nemo asperiores soluta quos vel illum alias nam nisi pariatur officiis. Natus officiis ex reiciendis. Eum in reiciendis nesciunt odio magni nobis.</p>
        </div> -->
    </div>

    <div class="h-fit w-full my-8 bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <!-- Reports data -->
        <div class="relative h-fit w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 rounded-md">
            <div class="w-full m-2 p-2 h-full">
                <div class="w-full p-4 bg-gray-100 dark:bg-gray-900 rounded-md">
                    <div class="relative mb-2">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block pt-2 ps-10 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Requests">
                    </div>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3">Farmer Id</th>
                                <th scope="col" class="px-6 py-3">Request Id</th>
                                <th scope="col" class="px-6 py-3">Request date</th>
                                <th scope="col" class="px-6 py-3">Lab Name</th>
                                <th scope="col" class="px-6 py-3">Lab Email</th>
                                <th scope="col" class="px-6 py-3">Lab Address</th>
                                <th scope="col" class="px-6 py-3">Lab City</th>
                                <th scope="col" class="px-6 py-3">Lab State</th>
                                <th scope="col" class="px-6 py-3">Lab Ownership</th>
                                <th scope="col" class="px-6 py-3">Request Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($soilrequestdata == null) {
                            } else {
                                $soilrequestdatasize = count($soilrequestdata);
                                for ($i = 0; $i < $soilrequestdatasize; $i++) {
                                    // Accessing values of the nested array at index $i
                                    $nested_array = $soilrequestdata[$i];
                                    echo "<tr class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>";
                                    echo "<td class='px-6 py-4 font-medium whitespace-nowrap>" . $nested_array["request_id"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["farmer_id"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["request_id"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["request_date"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["lab_name"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["email"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["lab_add"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["city"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["state"] . "</td>";
                                    echo "<td class='px-6 py-4'>" . $nested_array["ownership"] . "</td>";

                                    if ($nested_array["report_status"] == 'Generated') {
                                        echo "<td class='px-6 py-4 font-bold text-green-500'>" . $nested_array["report_status"] . "</td>";
                                    } else if ($nested_array["sample_status" == 'Collected']) {
                                        echo "<td class='px-6 py-4 font-bold text-green-500'>" . $nested_array["sample_status"] . "</td>";
                                    } else if ($nested_array["request_status"] == 'Approved') {
                                        echo "<td class='px-6 py-4 font-bold text-green-500'>" . $nested_array["request_status"] . "</td>";
                                    } else {
                                        echo "<td class='px-6 py-4 text-red-500'>Pending</td>";
                                    }
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="h-7"></div>
</section>