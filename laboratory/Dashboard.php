<!-- Soil Information Section -->
<section class="h-full mx-auto my-8 p-8 pb-28 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Dashboard</h1>
    <div class="bg-gray-200 dark:bg-gray-600 w-full h-48 rounded my-2 px-8 flex items-center relative">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Welcome-bro.svg" alt="">
        </div>
        <div class="h-full">
            <div class="top-24 h-5 w-[45%] blur-2xl shadow-2xl bg-fuchsia-500 absolute"></div>
            <h1 class="text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">LABORATORY</h1>
        </div>
    </div>
    <div class="h-96 w-full mt-6 flex rounded-md bg-gray-200 dark:bg-slate-700 ">
        <div class="w-[50%] h-full rounded-md flex items-center justify-center relative">
            <div class="-top-2 h-96 w-96 blur-xl rounded-full shadow-2xl shadow-fuchsia-900 absolute"></div>
            <img class="h-full w-full z-10" src="../img/lab-illustrater.png" alt="">
        </div>
        <div class="bg-gray-200 dark:bg-slate-700 w-[50%] h-full px-8 flex flex-col justify-center items-center relative rounded-md">
            <!-- <h1>Farming is a proffession of hope</h1> -->
            <div class="z-10 text-5xl font-bold text-center transition-all duration-500 hover:scale-110 text-green-700 dark:text-gray-300 peer">"Helping farmers grow better! Boost your crops with our simple and effective solutions for a successful harvest!"</div>
            <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute"></div>
            <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300"></h1>
        </div>
    </div>
    <div class="relative h-fit w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 rounded-md">
        <div class="w-full m-2 p-2 h-full">
            <div class="p-4 bg-white dark:bg-gray-900 rounded-md">
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
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Farmer Id</th>
                            <th scope="col" class="px-6 py-3">Request date</th>
                            <th scope="col" class="px-6 py-3">Farmer Name</th>
                            <th scope="col" class="px-6 py-3">Farmer Email</th>
                            <th scope="col" class="px-6 py-3">Farmer Address</th>
                            <th scope="col" class="px-6 py-3">Farmer City</th>
                            <th scope="col" class="px-6 py-3">Farmer State</th>
                            <!-- <th scope="col" class="px-6 py-3">Lab Ownership</th> -->
                            <th scope="col" class="px-6 py-3">Accept Request</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $soilrequestdatasize = count($soilrequestdata);
                        for ($i = 0; $i < $soilrequestdatasize; $i++) {
                            // Accessing values of the nested array at index $i
                            $nested_array = $soilrequestdata[$i];
                            echo "<tr class='bg-white dark:text-gary-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>";
                            echo "<td class='px-6 py-4 font-medium whitespace-nowrap>" . $nested_array["request_id"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["farmer_id"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["request_date"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["first_name"] . " " . $nested_array["middle_name"] . " " . $nested_array["last_name"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["email"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["address"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["city"] . "</td>";
                            echo "<td class='px-6 py-4'>" . $nested_array["state"] . "</td>";
                            // echo "<td class='px-6 py-4'>" . $nested_array["status"] . "</td>";
                            echo "<td class='px-6 py-2'>
                            <button onclick='acceptRequest(" . $nested_array["farmer_id"] . ")' class='px-6 py-2 rounded-lg bg-green-300 hover:bg-green-400 text-gray-50 dark:text-gray-700'>Accept</button>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <input type="hidden" name="requestStatus" id="requestStatus">
            </div>
        </div>
    </div>
    <div class="relative h-60 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
        <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  "></div>
        <h1 class="z-10 text-7xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">Laboratory Reports</h1>
    </div>
    <div class="my-8 h-full w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-700"></div>
    </div>
    <div class="h-7"></div>
</section>