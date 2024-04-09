<section class="w-full h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Laboratory</h1>
    <!-- information Section -->
    <div class="h-48 w-full dark:text-gray-300 bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center">
        <div class="w-fit h-full flex justify-start px-8">
            <img class="h-full w-full" src="../img/chemistry lab-bro.svg" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold">Laboratory</h1>
        </div>
    </div>
    <!-- laboratory -->
    <div class="bg-gray-200 dark:bg-slate-600 w-full h-fit rounded my-8 flex items-center duration-300">
        <div class="w-full p-2 h-fit">
            <div class="p-4 bg-gray-100 dark:bg-gray-900 rounded-md overflow-x-scroll">
                <label for="lab-table-search" class="sr-only">Search</label>
                <div class="relative mb-2">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="lab-table-search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Laboratory">
                </div>

                <div class="h-fit w-full my-8 flex rounded-md bg-gray-200 dark:bg-slate-600 ">
                    <div class="w-full m-2 h-full">
                        <div class="p-4 bg-slate-100 dark:bg-gray-900 rounded-md">
                            <div class=" flex justify-between">
                                <h1 for=""
                                    class="h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
                                    Laboratory Details
                                </h1>
                                </label>
                                <div class=" flex flex-col items-center justify-center" x-data="{ open: false }">
                                    <div class="">
                                        <button @click="open = true"
                                            class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out ">Add
                                            Laboratory</button>
                                    </div>
                                    <div x-show="open" x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        x-description="Background backdrop, show/hide based on modal state."
                                        class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-75 transition-opacity"
                                        @keydown.escape.window="open = false">
                                        <div class="relative transform overflow-hidden rounded-lg bg-white dark:bg-slate-700 text-left shadow-xl transition-all sm:w-full sm:max-w-lg"
                                            @click.away="open = false">
                                            <div class="sm:p-10">
                                                <h1 for=""
                                                    class="h-full flex justify-center items-center text-3xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500 mb-4 ">
                                                    ADD NEW Laboratory
                                                </h1>
                                                <form id="labForm" method="post" action="../Backend/CRUD.php">
                                                    <div
                                                        class="grid gap-4 gap-y-2 text-lg grid-cols-1 md:grid-cols-4 text-black dark:text-gray-300 font-bold">
                                                        <div class="md:col-span-4">
                                                            <label for="fullname">Lab Name</label>
                                                            <input type="text" name="fullname" id="fullname"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                value="" />
                                                            <span id="spanfullname" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-2">
                                                            <label for="email">Email Address</label>
                                                            <input type="email" name="email" id="email"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                value="" placeholder="email123@gmail.com" />
                                                            <span id="spanemail" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-2">
                                                            <label for="contact">Contact</label>
                                                            <input type="text" name="contact" id="contact"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                value="" placeholder="" />
                                                            <span id="spancontact" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-4">
                                                            <label for="address">Address / Street</label>
                                                            <input type="text" name="address" id="address"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                value="" placeholder="" />
                                                            <span id="spanaddress" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-2">
                                                            <label for="state">State</label>
                                                            <input type="text" name="state" id="state"
                                                                class="state h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                value="" placeholder="" />
                                                            <span id="spanstate" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-2">
                                                            <label for="city">City</label>
                                                            <input type="text" name="city" id="city"
                                                                class="city h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                value="" placeholder="" />
                                                            <span id="spancity" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-4">
                                                            <label for="ownership">Ownership</label>
                                                            <select type="text" name="ownership" id="ownership"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                                                <option value="default">Select Ownership</option>
                                                                <option value="private">Private</option>
                                                                <option value="government">Government</option>
                                                            </select>
                                                            <span id="spanownership"
                                                                class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-2">
                                                            <label for="pwd">Password</label>
                                                            <div class="relative flex justify-end items-center">
                                                                <img id="imgpwd" src="../img/eye.png" alt=""
                                                                    class="absolute h-5 w-5 z-10 cursor-pointer mr-3"
                                                                    onclick="togglepassword('imgpwd','pwd')">
                                                                <input type="password" name="pwd" id="pwd"
                                                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                    value="" placeholder="" />
                                                            </div>
                                                            <span id="spanpass" class="text-red-500 text-sm"></span>
                                                        </div>

                                                        <div class="md:col-span-2">
                                                            <label for="cpwd">Confirm Password</label>
                                                            <div class="relative flex justify-end items-center">
                                                                <img id="imgcpwd" src="../img/eye.png" alt=""
                                                                    class="absolute h-5 w-5 z-10 cursor-pointer mr-3"
                                                                    onclick="togglepassword('imgcpwd','cpwd')">
                                                                <input type="password" name="cpwd" id="cpwd"
                                                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 dark:bg-slate-600"
                                                                    value="" placeholder="" />
                                                            </div>
                                                            <span id="spancpass" class="text-red-500 text-sm"></span>
                                                        </div>
                                                    </div>

                                                    <div class="mt-6 flex justify-center gap-x-4">
                                                        <input type="button" value="Register" name="addfarmer"
                                                            class="py-2 w-full inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-700 text-gray-100 shadow-sm align-middle hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-700 focus:ring-green-600 transition-all text-lg"
                                                            onclick="return addLaboratory()">

                                                        <input @click="open = false" type="reset" value="Cancel"
                                                            name="cancel"
                                                            class="py-2 w-52 inline-flex justify-center items-center gap-2 rounded-md font-medium bg-gray-300 dark:text-black dark:hover:border cursor-pointer shadow-lg align-middle hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-red-600 transition-all text-lg">
                                                    </div>
                                                </form>
                                                <input type="hidden" name="" id="status">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table content -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 duration-300">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
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
                        $query = "select * from laboratory_detail WHERE status='Approved';";
                        $result = $con->query($query);
                        if (!$result) {
                            die("invalide query");
                        }
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr
                                class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>

                                <td class='px-6 py-4 flex items-center gap-4'>
                                    <?php
                                    if (file_exists($row["labprofile"]) == true) {
                                        echo " <img src='../img/" . $row["labprofile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                                    } else {
                                        echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                                    } ?>
                                    <?php echo $row['lab_name']; ?>
                                </td>
                                <td class='px-6 py-4'>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td class='px-6 py-4'>
                                    <?php echo $row['contact']; ?>
                                </td>
                                <td class='px-6 py-4'>
                                    <?php echo $row['lab_add']; ?>
                                </td>
                                <td class='px-6 py-4'>
                                    <?php echo $row['city']; ?>
                                </td>
                                <td class='px-6 py-4'>
                                    <?php echo $row['state']; ?>
                                </td>
                                <td class='px-6 py-4'>
                                    <?php echo $row['ownership']; ?>
                                </td>

                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- approve -->
    <div class="h-32 w-full bg-gray-200 rounded-lg my-8 dark:bg-slate-600 flex items-center">
        <div class="w-[100%] h-full flex items-center">
            <h1
                class="h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
                Approve Laboratory</h1>
        </div>
    </div>
    <!-- laboratory -->
    <div class="bg-gray-200 dark:bg-slate-600 w-full h-fit rounded my-8 flex items-center duration-300">
        <div class="w-full p-2 h-full">
            <div class="p-4 bg-gray-100 dark:bg-gray-900 rounded-md overflow-x-scroll">
                <label for="farmer-table-search" class="sr-only">Search</label>
                <div class="relative mb-2">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="farmer-table-search"
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Farmers">
                </div>
                <!-- Table content -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">Lab Id</th>
                            <th scope="col" class="px-6 py-3">Lab Name</th>
                            <th scope="col" class="px-6 py-3">Lab Email</th>
                            <th scope="col" class="px-6 py-3">Lab Contact</th>
                            <th scope="col" class="px-6 py-3">Address</th>
                            <th scope="col" class="px-6 py-3">City</th>
                            <th scope="col" class="px-6 py-3">State</th>
                            <th scope="col" class="px-6 py-3">Ownership</th>
                            <th scope="col" class="px-6 py-3">Status</th>
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
                            if ($row['status'] != 'Approved') {
                                ?>
                                <tr
                                    class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>
                                    <td class='px-6 w-3 py-4 font-medium whitespace-nowrap'>
                                        <?php // $enqFamerId = md5($row['lab_id']);
                                                // echo $enqFamerId;
                                                echo $row['lab_id'] ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['lab_name']; ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['email']; ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['contact']; ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['lab_add']; ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['city']; ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['state']; ?>
                                    </td>
                                    <td class='px-6 py-4'>
                                        <?php echo $row['ownership']; ?>
                                    </td>
                                    <td class='px-6 py-2'>
                                        <button
                                            onclick="ApproveLab('<?php echo $row['lab_id'] ?>','<?php echo $row['email'] ?>')"
                                            class='px-6 py-2 rounded-lg bg-green-400 hover:bg-green-500 text-gray-50 dark:text-gray-700'>
                                            <?php echo (($row['status'] == 'Approved') ? 'Approved' : 'Approve'); ?>
                                        </button>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <input type="hidden" name="approveLab" id="approveLab">
            </div>
        </div>
    </div>
    <div class="h-7"></div>
</section>