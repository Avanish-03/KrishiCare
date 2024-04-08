<?php
session_start();
?>
<!-- Reports Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Reports</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/reqest-data.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold dark:text-gray-300">Reports</h1>
        </div>
    </div>
    <!-- Report Data -->
    <div class="relative h-32 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
        <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  "></div>
        <h1 class="z-10 h-full flex justify-center items-center text-7xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">Genrated Reports</h1>
    </div>
    <div class="relative h-fit w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 rounded-md">
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
    <!-- Submit Report Form -->
    <div class="relative md:h-32 h-fit py-2 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
        <h1 class="z-10 text-xl sm:text-3xl md:text-5xl font-bold px-8 text-slate-700 dark:text-gray-300">Upload Report</h1>
    </div>
    <div class="bg-slate-200 dark:bg-slate-700 w-full h-fit rounded my-8 py-8 relative grid grid-cols-1 md:grid-cols-2">
        <div class="h-full w-full flex justify-center items-center">
            <img class="h-96" src="../img/Upload-amico.svg" alt="">
        </div>
        <div class="h-full w-full flex justify-center items-center px-2">
            <div class="max-w-xl w-full mx-auto bg-slate-50 dark:bg-slate-800 p-8 rounded-lg shadow-xl">
                <form id="uploadReportForm" class="">
                    <div class="relative z-0 w-full my-5 group">
                        <label for="farmername" class=" text-gray-500 dark:text-gray-400 " inputmode="text">Farmer Name : </label>
                        <select name="farmername" id="farmername" class="bg-transparent border-b-2 border-gray-300 dark:border-gray-600 pb-1 text-slate-700 dark:text-gray-400 w-full">
                            <option value="default">Select Farmer</option>
                            <?php
                            $data_size = count($samplerequestdata);
                            for ($i = 0; $i < $data_size; $i++) {
                                $nested_array = $samplerequestdata[$i];
                                echo "<option value='" . $nested_array["farmer_id"] . "'>" . $nested_array["first_name"] . " " . $nested_array["middle_name"] . " " . $nested_array["last_name"] . "</option>";
                            }
                            ?>
                        </select>
                        <span id="spanfarmername" class="text-red-500"></span>
                    </div>
                    <div class="relative z-0 w-full my-5 group">
                        <label for="email" class=" text-gray-500 dark:text-gray-400 " inputmode="text">Farmer Email : </label>
                        <select name="email" id="email" class="bg-transparent border-b-2 border-gray-300 dark:border-gray-600 pb-1 text-slate-700 dark:text-gray-400 w-full">
                            <option value="default">Select Email</option>
                            <?php
                            $data_size = count($samplerequestdata);
                            for ($i = 0; $i < $data_size; $i++) {
                                $nested_array = $samplerequestdata[$i];
                                echo "<option value='" . $nested_array["email"] . "'>" . $nested_array["email"] . "</option>";
                            }
                            ?>
                        </select>
                        <span id="spanemail" class="text-red-500"></span>
                    </div>
                    <div class="relative z-0 w-full my-5 group">
                        <label for="sampleid" class=" text-gray-500 dark:text-gray-400 " inputmode="numeric">Sample Id : </label>
                        <select name="sampleid" id="sampleid" class="bg-transparent border-b-2 border-gray-300 dark:border-gray-600 pb-1 text-slate-700 dark:text-gray-400 w-full">
                            <option value="default">Select Sample ID</option>
                            <?php
                            $data_size = count($samplerequestdata);
                            for ($i = 0; $i < $data_size; $i++) {
                                $nested_array = $samplerequestdata[$i];
                                echo "<option value='" . $nested_array["sample_id"] . "'>" . $nested_array["sample_id"] . " </option>";
                            }
                            ?>
                        </select>
                        <span id="spansampleid" class="text-red-500"></span>
                    </div>
                    <button type="button" name="uploadReportbtn" onclick="return uploadReport('<?php echo $_SESSION['laboratory'] ?>')" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Upload Report</button>
                </form>
            </div>
        </div>
        <input type="hidden" name="uploadReport" id="uploadReport">
    </div>
    <img src="https://www.researchgate.net/publication/226624983/figure/fig2/AS:267538726649926@1440797611896/Example-of-Cornell-Soil-Health-Test-report.png" alt="">
    <!-- <div class="my-8 h-full w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
    </div> -->
    <div class="h-7"></div>
</section>