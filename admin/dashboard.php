<?php //session_start(); 
?>
<!-- dashboard -->
<section class="h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold text-black dark:text-gray-300">Dashboard</h1>
    <div class="bg-gray-200 dark:bg-slate-600 w-full h-48 rounded my-2 px-8 flex items-center ">
        <div class=" h-full flex justify-">
            <img class="h-full w-full" src="../img/Hello-rafiki.png" alt="">
            <div class="h-5 w-[45%] blur-2xl shadow-2xl"></div>
            <h1 class="text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-700 to-gray-400">Admin </h1>
        </div>
    </div>
    <!-- farmer -->
    <div class="h-fit w-full flex rounded-md bg-gray-200 dark:bg-slate-600 ">
        <div class="w-full p-2 h-full">
            <div class="p-4 bg-white dark:bg-gray-900 rounded-md">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mb-2">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Farmers">
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Farmer Id</th>
                            <th scope="col" class="px-6 py-3">Farmer Name</th>
                            <th scope="col" class="px-6 py-3">Farmer Email</th>
                            <th scope="col" class="px-6 py-3">Farmer Contact-No</th>
                            <th scope="col" class="px-6 py-3">Address</th>
                            <th scope="col" class="px-6 py-3">City</th>
                            <th scope="col" class="px-6 py-3">State</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../Backend/config.php";
                        $query = "select * from farmer_detail";
                        $result = $con->query($query);
                        if (!$result) {
                            die("invalide query");
                        }
                        while ($row = $result->fetch_assoc()) { ?>

                            <tr class='bg-white dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                                <th class='px-6 py-4 font-medium whitespace-nowrap'>
                                    <?php
                                    $enqFamerId = md5($row['farmer_id']);
                                    echo $enqFamerId;
                                    ?>

                                </th>
                                <td class='px-6 py-4'><?php echo $row['first_name'] ?></td>
                                <td class='px-6 py-4'><?php echo $row['email'] ?></td>
                                <td class='px-6 py-4'><?php echo $row['contact_number'] ?></td>
                                <td class='px-6 py-4'><?php echo $row['address'] ?></td>
                                <td class='px-6 py-4'><?php echo $row['city'] ?></td>
                                <td class='px-6 py-4'><?php echo $row['state'] ?></td>
                            
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- laboratory -->
    <div class="h-fit w-full flex rounded-md bg-gray-200 dark:bg-slate-600 ">
        <div class="w-full p-2 h-fit">
            <div class="p-4 bg-white dark:bg-gray-900 rounded-md">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mb-2">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Laboratory">
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Lab Id</th>
                            <th scope="col" class="px-6 py-3">Lab Name</th>
                            <th scope="col" class="px-6 py-3">Lab Email</th>
                            <th scope="col" class="px-6 py-3">Lab Contact</th>
                            <th scope="col" class="px-6 py-3">Address</th>
                            <th scope="col" class="px-6 py-3">City</th>
                            <th scope="col" class="px-6 py-3">State</th>
                            <th scope="col" class="px-6 py-3">Ownership</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../Backend/config.php";
                        $query = "select * from laboratory_detail";
                        $result = $con->query($query);
                        if (!$result) {
                            die("invalide query");
                        }
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr class='bg-white dark:text-gary-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                            <th class='px-6 py-4 font-medium whitespace-nowrap'>$row[lab_id]</th>
                            <td class='px-6 py-4'>$row[lab_name]</td>
                            <td class='px-6 py-4'>$row[email]</td>
                            <td class='px-6 py-4'>$row[contact]</td>
                            <td class='px-6 py-4'>$row[lab_add]</td>
                            <td class='px-6 py-4'>$row[city]</td>
                            <td class='px-6 py-4'>$row[state]</td>
                            <td class='px-6 py-4'>$row[ownership]</td>
                        
                            </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</section>