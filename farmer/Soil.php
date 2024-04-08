<?php
session_start();
// echo $_SESSION["farmer"];
?>
<!-- Soil Information Section -->
<section class=" h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Soil Information</h1>
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/soil.png" alt="">
        </div>
        <div class="w-[100%] h-full flex items-center">
            <div class="relative h-32 w-full my-5 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
                <div
                    class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
                </div>
                <h1
                    class="z-10 h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
                    Steps To Request For Soil Testing</h1>
            </div>
        </div>
    </div>
    <!-- information Section -->
    <div class="w-full mt-8 text-gray-700 dark:text-gray-200">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 overflow-x-scroll">
            <div class=" w-full">
                <div class="rounded-xl bg-gray-200 dark:bg-slate-700 hover:shadow-2xl p-7 pb-12 relative w-full h-full">
                    <div class="text-2xl h-fit w-full flex items-center gap-4">
                        <i class="text-red-600 fa-solid fa-receipt"></i>
                        <h3 class="text-xl font-semibold mb-2">Form Designing &amp; Surveyor Tagging</h3>
                    </div>
                    <p class="">The process starts with the system facilitating in
                        designing the survey forms with predefined questions
                        with a dynamic application while tagging the surveyor and also the assigned location from where
                        the soil
                        sample needs to be collected.</p>
                    <div class="accord-handle">
                        <span class="icon-plus-button icon-minus-circle1"></span>
                    </div>
                    <div class="h-7 absolute bottom-4">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class=" w-full">
                <div class="rounded-xl bg-gray-200 dark:bg-slate-700 hover:shadow-2xl p-7 pb-12 relative w-full h-full">
                    <div class="text-2xl h-fit w-full flex items-center gap-4">
                        <i class="text-blue-600 fa-solid fa-table"></i>
                        <h3 class="text-xl font-semibold mb-2">Collection of Data &amp; Sample Soil</h3>
                    </div>
                    <p class="">The survey data is collected and filled in a form in the
                        mobile app. The soil sample collected is
                        tagged with a unique identity code for future archiving, reference and retest. The system
                        captures the
                        real-time longitude and latitude of the location from where the sample is collected, to
                        calculate the
                        deviation from the assigned location.</p>
                    <div class="accord-handle">
                        <span class="icon-plus-button icon-minus-circle1"></span>
                    </div>
                    <div class="h-7 absolute bottom-4">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class=" w-full">
                <div class="rounded-xl bg-gray-200 dark:bg-slate-700 hover:shadow-2xl p-7 pb-12 relative w-full h-full">
                    <div class="text-2xl h-fit w-full flex items-center gap-4">
                        <i class="text-yellow-500 fa-solid fa-people-roof"></i>
                        <h3 class="text-xl font-semibold mb-2">Soil Archival Management</h3>
                    </div>
                    <p class="">The system facilitates in maintaining the record of the
                        soil archives and helps in tracking the history
                        of transaction of a soil sample taken for retesting.</p>
                    <div class="">
                        <span class="icon-plus-button"></span>
                    </div>
                    <div class="h-7 absolute bottom-4">
                        <i class="fa-solid fa-arrow-down"></i>
                    </div>
                </div>
            </div>
            <div class=" w-full">
                <div class="rounded-xl bg-gray-200 dark:bg-slate-700 hover:shadow-2xl p-7 pb-12 relative w-full h-full">
                    <div class="text-2xl h-fit w-full flex items-center gap-4">
                        <i class="text-teal-600 fa-solid fa-list-check"></i>
                        <h3 class="text-xl font-semibold mb-2">Recommendation</h3>
                    </div>
                    <p class="">The recommendation is prepared under two different
                        parameters one is soil fertility status and the
                        other is region specific fertilization suitable for the soil. These soil informations are
                        accessed
                        through a website and an application by the concerned stakeholders like farmers, extension
                        workers and
                        interested individuals.</p>
                    <div class="">
                        <span class="icon-plus-button"></span>
                    </div>
                    <div class="h-7 absolute bottom-4">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
            </div>
            <div class=" w-full">
                <div class="rounded-xl bg-gray-200 dark:bg-slate-700 hover:shadow-2xl p-7 pb-12 relative w-full h-full">
                    <div class="text-2xl h-fit w-full flex items-center gap-4">
                        <i class="text-fuchsia-800 fa-solid fa-chart-simple"></i>
                        <h3 class="text-xl font-semibold mb-2">Report Analysis &amp; Simplification</h3>
                    </div>
                    <p class="">The soil scientists,develop simplified recommendations
                        consisting of region-specific soil maps and lab
                        data using the most sophisticated tools techniques available, including machine learning
                        algorithm using
                        R scripts and Knime.</p>
                    <div class="">
                        <span class="icon-plus-button"></span>
                    </div>
                    <div class="h-7 absolute bottom-4">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
            </div>
            <div class=" w-full">
                <div class="rounded-xl bg-gray-200 dark:bg-slate-700 hover:shadow-2xl p-7 pb-12 relative w-full h-full">
                    <div class="text-2xl h-fit w-full flex items-center gap-4">
                        <i class="text-emerald-400 fa-solid fa-flask-vial"></i>
                        <h3 class="text-xl font-semibold mb-2">Lab Testing &amp; Analysis of Soil</h3>
                    </div>
                    <p class="">The tests of the sample soil help analyze the soil type
                        found in the specific area and provide
                        information on different soil parameters like PH level, texture, structure and various elements
                        and
                        compounds.</p>
                    <div class="">
                        <span class="icon-plus-button"></span>
                    </div>
                    <div class="h-7 absolute bottom-4">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
            </div>
            <!-- <div class="h-7 w-full"></div> -->
        </div>
    </div>

    <div class="h-32 w-full bg-gray-200 rounded-lg my-8 dark:bg-slate-700 flex items-center">
        <div class="w-[50%] h-full flex items-center">
            <h1 class="text-5xl font-bold text-slate-700  dark:text-gray-200 pl-8">Request for Soil Testing</h1>
        </div>
    </div>

    <div class="w-full h-fit mb-8 py-5 rounded-lg bg-gray-200 flex dark:bg-slate-700">
        <!-- <div class="w-full rounded-b-lg flex px-5"> -->
        <div class="h-full w-96 flex justify-center items-center">
            <img class="h-full w-full px-10" src="../img/Farmer-amico.svg" alt="">
        </div>
        <div class="h-full w-full flex justify-centeritems-center">
            <div class="w-full h-full px-4 grid grid-cols-1">
                <table
                    class="w-full h-full rounded-b-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-200 overflow-x-scroll">
                    <thead class="text-xs text-gray-100 uppercase bg-gray-400 dark:bg-slate-600 dark:text-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">lab Name</th>
                            <th scope="col" class="px-6 py-3">lab Address</th>
                            <th scope="col" class="px-6 py-3">lab City</th>
                            <th scope="col" class="px-6 py-3">Apointment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($labdata == null) {
                        } else {
                            $labdatasize = count($labdata);
                            for ($i = 0; $i < $labdatasize; $i++) {
                                // Accessing values of the nested array at index $i
                                $nested_array = $labdata[$i];
                                echo "<tr class='bg-gray-100 dark:text-gray-200 border-b dark:bg-slate-800 dark:border-gray-700 dark:hover:bg-slate-600'>";
                                echo "<td class='px-6 py-4'>" . $nested_array["lab_name"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["lab_add"] . "</td>";
                                echo "<td class='px-6 py-4'>" . $nested_array["city"] . "</td>";
                                //echo "<td class='px-6 py-4'>" . $nested_array["state"] . "</td>";
                                echo "<td class='px-6 py-4 text-red-500'>
                                    <button onclick='submitRequest(" . $_SESSION['farmer'] . "," . $nested_array["lab_id"] . ")'>Request</button>
                                    </td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <input type="hidden" name="status" id="status">
            </div>
        </div>
        <!-- </div> -->
    </div>
    <div class="w-full rounded-lg bg-gray-200 dark:bg-slate-700 flex justify-center items-center py-8">
        <img src="../img/soil-processing.webp" alt="">
    </div>
    <div class="h-48 rounded-lg my-4 flex items-center bg-gray-200 dark:bg-slate-700 ">
        <h1 class="text-7xl px-8 font-bold text-slate-700 dark:text-gray-400">Soil Types</h1>
    </div>
    <!-- Soil Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Soil Type 1 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Clay Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Clay Soil is a heavy soil type that benefits from high nutrients. Clay soils remain wet and cold in
                winter and dry out in summer.
                These soils are made of over 25 percent clay, and because of the spaces found between clay particles,
                clay soils hold a high amount of water.
                Because these soils drain slowly and take longer to warm up in summer, combined with drying out and
                cracking in summer, they can often test gardeners.</p>
        </div>

        <!-- Soil Type 2 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Sandy Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Sandy Soil is light, warm, dry and tends to be acidic and low in nutrients. Sandy soils are often known
                as light soils due to their high proportion of sand and little clay (clay weighs more than sand).
                These soils have quick water drainage and are easy to work with. They are quicker to warm up in spring
                than clay soils but tend to dry out in summer and suffer from low nutrients that are washed away by
                rain.
                The addition of organic matter can help give plants an additional boost of nutrients by improving the
                nutrient and water holding capacity of the soil.</p>
        </div>

        <!-- Soil Type 3 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Loamy Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">Loam soil is a mixture of sand, silt and clay that are combined
                to avoid the negative effects of each type.
                These soils are fertile, easy to work with and provide good drainage. Depending on their predominant
                composition they can be either sandy or clay loam.
                As the soils are a perfect balance of soil particles, they are considered to be a gardeners best friend,
                but still benefit from topping up with additional organic matter.</p>
        </div>
        <!-- Soil Type 1 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Silt Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Silt Soil is a light and moisture retentive soil type with a high fertility rating.
                As silt soils compromise of medium sized particles they are well drained and hold moisture well.
                As the particles are fine, they can be easily compacted and are prone to washing away with rain.
                By adding organic matter, the silt particles can be bound into more stable clumps.</p>
        </div>

        <!-- Soil Type 2 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Peat Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Peat soil is high in organic matter and retains a large amount of moisture.
                This type of soil is very rarely found in a garden and often imported into a garden to provide an
                optimum soil base for planting.</p>
        </div>

        <!-- Soil Type 3 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Chalk Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Chalk soil can be either light or heavy but always highly alkaline due to the calcium carbonate (lime)
                within its structure.
                As these soils are alkaline they will not support the growth of ericaceous plants that require acidic
                soils to grow.
                If a chalky soil shows signs of visible white lumps then they can’t be acidified and gardeners should be
                resigned to only choose plants that prefer an alkaline soil.</p>
        </div>
        <!-- Soil Type 1 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Red & Yellow Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Also known as the “omnibus group”.
                It covers about 18.5 % of the total land area of the country.
                It is found in regions of low rainfall (eastern and southern parts of the Deccan Plateau). Along the
                piedmont zone of the Western Ghats, a long stretch of area is occupied by red loamy soil. This soil is
                also present in parts of Odisha and Chattisgarh and in the southern parts of the Middle Ganga Plain.
                The red colour is due to the presence of iron in crystalline and metamorphic rocks. The soil appears
                yellow when it is in hydrated form.
                The fine-grained red and yellow soil is usually fertile while the coarse-grained soil is less fertile.
            </p>
        </div>

        <!-- Soil Type 2 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Black or Regur Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Black soil is also known as “Regur Soil” or the “Black Cotton Soil”.
                It covers about 15% of the total land area of the country.
                It covers most of the Deccan Plateau – parts of Maharashtra, Madhya Pradesh, Gujarat, Andhra Pradesh and
                some parts of Tamil Nadu. In the upper reaches of the Godavari and Krishna, and the north-western part
                of the Deccan Plateau, the black soil is very deep.
                The colour of these soils varies from deep black to grey.</p>
        </div>

        <!-- Soil Type 3 -->
        <div class="bg-gray-200 dark:bg-slate-700 p-6 rounded-md hover:shadow-xl">
            <h2 class="text-xl font-semibold mb-2">Desert Soil</h2>
            <p class="text-gray-700 dark:text-gray-300">
                Also known as arid soil, it accounts for over 4.42 % of the total land area of the country.
                The colour ranges from red to brown.
                Desert soils are sandy to gravelly in texture, have low moisture content and low water-retaining
                capacity.
                These soils are saline in nature and in certain regions, the salt content is so high that common salt is
                obtained by evaporating water.
            </p>
        </div>
        <div class="h-7"></div>
    </div>

</section>