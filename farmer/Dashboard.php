<?php

// print_r($data);
$data_size = count($farmerdata);
// $id = $_SESSION["farmer"];
// echo $id;
for ($i = 0; $i < $data_size; $i++) {
    // Accessing values of the nested array at index $i
    $nested_array = $farmerdata[$i];
    // echo $nested_array["farmer_id"];
?>

    <!-- Soil Information Section -->
    <section class="h-full w-full min-w-96 mx-auto my-8 p-8 rounded-md">
        <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Dashboard</h1>
        <div class="bg-gray-200 dark:bg-gray-600 w-full h-48 rounded my-2 px-8 flex items-center relative">
            <div class="w-fit h-full flex justify-start">
                <img class="h-full w-full" src="../img/Welcome-bro.svg" alt="">
            </div>
            <div class="h-full">
                <div class="top-24 h-5 w-[45%] blur-2xl shadow-2xl bg-fuchsia-500 absolute  "></div>
                <h1 class="text-xl sm:text-5xl md:text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                    <?php echo $nested_array["first_name"] . " " . $nested_array["middle_name"] . " " . $nested_array["last_name"]; ?></h1>
            </div>
        </div>
        <div class="lg:h-96 h-fit w-full mt-6 rounded-md bg-gray-200 dark:bg-slate-700 grid grid-cols-1 md:grid-cols-2">
            <div class="w-full h-full rounded-md flex items-center justify-center relative">
                <div class="h-80 w-80 blur-xl rounded-full shadow-2xl shadow-fuchsia-900 absolute  "></div>
                <img class="h-96 w-96 z-10" src="../img/rice field-bro.svg" alt="">
            </div>
            <div class="w-full h-full px-8 py-2 flex flex-col justify-center items-center relative rounded-md">
                <!-- <h1>Farming is a proffession of hope</h1> -->
                <div class="z-10 text-5xl font-bold text-center transition-all duration-1000 hover:scale-110 text-green-700 dark:text-gray-300 peer">"The good farmer is a craftsman of the highest order, a kind of artist." </div>
                <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute  "></div>
                <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300">अच्छा किसान सर्वोच्च कोटि का शिल्पकार, एक प्रकार का कलाकार होता है</h1>
            </div>
        </div>
        <!-- data -->
        <!--  <div class="h-96 w-full my-5 flex bg-gray-200 dark:bg-slate-700 rounded-md">
            <div class="w-[50%] h-full flex items-center">
                 <div class="h-full w-[90%] space-y-2 py-0.5">
                <div class="h-28 w-full sm:my-2 bg-gray-200 dark:bg-gray-600 border border-black rounded-xl flex justify-center items-center text-4xl">1</div>
                <div class="h-28 w-full sm:my-2 bg-gray-200 dark:bg-gray-600 border border-black rounded-xl flex justify-center items-center text-4xl">2</div>
                <div class="h-28 w-full sm:my-2 bg-gray-200 dark:bg-gray-600 border border-black rounded-xl flex justify-center items-center text-4xl">3</div>
            </div>
          <div class="h-full w-[50%]">
                <div class="sm:h-[50%] flex px-3 py-2">
                    <div class="w-[50%] h-full bg-gray-100 border border-black rounded-xl flex justify-center items-center text-4xl mr-3">9</div>
                    <div class="w-[50%] h-full bg-gray-100 border border-black rounded-xl flex justify-center items-center text-4xl">8</div>
                </div>
                <div class="sm:h-[50%] flex px-3 py-2">
                    <div class="w-[50%] h-full bg-gray-100 border border-black rounded-xl flex justify-center items-center text-4xl mr-3">7</div>
                    <div class="w-[50%] h-full bg-gray-100 border border-black rounded-xl flex justify-center items-center text-4xl">6</div>
                </div>
            </div>
            </div>
            <div class="w-[50%] h-full flex justify-center items-center p-4 bg-gray-200 dark:bg-slate-700">
                 <div id="chartContainer" class="h-full w-full bg-gray-200 dark:bg-gray-600"></div> 
            </div>
        </div>-->
        <!-- <a href="https://www.behance.net/gallery/150172499/Agricultural-Dashboard-UI-Design?tracking_source=search_projects|agricultural+dashboard&l=39">Image</a> -->
        <div class="h-48 w-full my-8 bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
            <div class="w-fit h-full flex justify-start">
                <img class="h-full w-full" src="../img/Attached files-rafiki.svg" alt="">
            </div>
            <div class="w-[50%] h-full flex items-center">
                <h1 class="text-4xl font-bold">Reports</h1>
            </div>
        </div>
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
                                    echo "<td class='px-6 py-4'>" . ($nested_array["status"] == 'Approved' ? 'Generating Report' : $nested_array["status"]) . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="relative h-fit py-6 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
            <!-- <img class="absolute h-full w-full rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUGAPxvg9Az-96-mrVDSJUtgkL0jRjDulUyw&usqp=CAU" alt=""> -->
            <div class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  "></div>
            <h1 class="z-10 text-xl sm:text-5xl md:text-7xl font-bold px-8 transition-all duration-1000 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">Farmer Portals</h1>
        </div>
        <!-- <img class="h-full w-full" src="https://366pi.com/wp-content/uploads/2020/07/OnDemandReports-Agri.png" alt="Agri Image"> -->
        <!-- Soil Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-5">
            <!-- Soil Type 1 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/PM-KISAN.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Pradhan Mantri Kisan Samman Nidhi (PM-KISAN)</h2>
                <p class="text-gray-700 dark:text-gray-200">PM-KISAN is a central sector scheme launched on 24th February 2019 to supplement financial needs of land holding farmers, subject to exclusions. <a href="https://pmkisan.gov.in/" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 2 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/PM-MANDAN.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Pradhan Mantri Kisan MaanDhan Yojana (PM-KMY)</h2>
                <p class="text-gray-700 dark:text-gray-200">Pradhan Mantri Kisan Maandhan Yojna (PMKMY) is a central sector scheme launched on 12th September 2019 to provide security to the most vulnerable farmer families. <a href="https://maandhan.in/" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 3 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/PM-FASAL.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Pradhan Mantri Fasal Bima Yojana (PMFBY)</h2>
                <p class="text-gray-700 dark:text-gray-200">PMFBY was launched in 2016 in order to provide a simple and affordable crop insurance product to ensure comprehensive risk cover for crops to farmers against all non-preventable natural risks from pre-sowing to post-harvest and to provide adequate claim amount. <a href="https://pmfby.gov.in/" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>
            <!-- Soil Type 1 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/PM-KISAN.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Modified Interest Subvention Scheme (MISS)</h2>
                <p class="text-gray-700 dark:text-gray-200">The Interest Subvention Scheme (ISS) provides concessional short term agri-loans to the farmers practicing crop husbandry and other allied activities like animal husbandry, dairying and fisheries. <a href="https://www.legacyias.com/modified-interest-subvention-scheme/" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 2 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/AIF-FUND.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Agriculture Infrastructure Fund (AIF)</h2>
                <p class="text-gray-700 dark:text-gray-200">Agri Infra Fund was launched under Aatmanirbhar Bharat Package. AIF was introduced with a vision to transform the agriculture infrastructure landscape of the country. <a href="https://vikaspedia.in/schemesall/schemes-for-farmers/agriculture-infrastructure-fund" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 3 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/PM-KISAN.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Formation & Promotion of new 10,000 FPOs</h2>
                <p class="text-gray-700 dark:text-gray-200">The Government of India launched the Central Sector Scheme (CSS) for “Formation and Promotion of 10,000 Farmer Producer Organizations (FPOs)” in the year 2020. <a href="https://pib.gov.in/PressReleaseIframePage.aspx?PRID=1988649#:~:text=The%20Government%20of%20India%20has%20launched%20the%20Central,thus%20playing%20a%20major%20role%20towards%20sustainable%20incomes." target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>
            <!-- Soil Type 1 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/NBHM.jpeg" class="rounded-md mb-2 w-full" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">National beekeeping and Honey Mission (NBHM)</h2>
                <p class="text-gray-700 dark:text-gray-200">National Beekeeping & Honey Mission (NBHM) was launched in 2020 under Atma Nirbhar Bharat Abhiyan for its implementation in the field for overall promotion and development of scientific beekeeping & to achieve the goal of “Sweet Revolution”. <a href="https://nbb.gov.in/default.html" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 2 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/MIS-PSS.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Market Intervention Scheme and Price support Scheme (MIS-PSS)</h2>
                <p class="text-gray-700 dark:text-gray-200">Ministry of Agriculture & Farmers Welfare implements the Price Support Scheme (PSS) for procurement of pulses, oilseeds and copra. <a href="https://pib.gov.in/PressReleaseIframePage.aspx?PRID=1809685" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 3 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/NMO-DRON-DID.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Namo Drone Didi</h2>
                <p class="text-gray-700 dark:text-gray-200">The Government has recently approved a Central Sector Scheme for providing drones to the Women Self Help Group (SHGs) for the period from 2024-25 to 2025-26 with an outlay of Rs. 1261 Crores. <a href="https://www.gktoday.in/namo-drone-didi-scheme/#google_vignette" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>
            <!-- Soil Type 1 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/RKVY-DPR.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Rastriya Krishi Vikas Yojana-Detailed Project Report based schemes (RKVY- DPR)</h2>
                <p class="text-gray-700 dark:text-gray-200">The scheme focuses on creation of pre & post-harvest infrastructure in agriculture and allied sectors that help in supply of quality inputs, market facilities, etc to farmers. <a href="https://rkvy.nic.in/" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 2 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/SOIL-HEALTH_CARD.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Soil Health Card (SHC)</h2>
                <p class="text-gray-700 dark:text-gray-200">Soil health card provides information to farmers on nutrient status of their soil along with recommendation on appropriate dosage of nutrients to be applied for improving soil health and its fertility. <a href="https://soilhealth.dac.gov.in/progress/" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>

            <!-- Soil Type 3 -->
            <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl hover:scale-100 transition-all duration-300 ease-in-out">
                <img src="../img/RAD.png" class="rounded-md mb-2" alt="">
                <h2 class="text-2xl font-semibold mb-2 dark:text-gray-100">Rainfed Area Development (RAD)</h2>
                <p class="text-gray-700 dark:text-gray-200">RAD adopts an area based approach in cluster mode for promoting Integrated Farming System (IFS) which focuses on multi-cropping, rotational cropping, inter-cropping, mixed cropping practices with allied activities like horticulture, livestock, fishery, apiculture etc. <a href="https://www.myscheme.gov.in/schemes/rad" target="_blank" class="text-blue-300 dark:text-blue-600 hover:text-green-500">read more</a></p>
            </div>
        </div>
        <div class="h-7"></div>
    </section>
<?php
}
?>