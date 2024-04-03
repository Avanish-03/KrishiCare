<?php session_start(); ?>

<!-- dashboard -->
<section class="h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300 duration-700">Dashboard</h1>
    <div class="bg-gray-200 dark:bg-slate-600 w-full h-32 rounded my-2 px-8 flex items-center">
        <div class="h-full flex justify-center">
            <img class="h-full w-full" src="../img/Hello-rafiki.png" alt="">
            <div class="h-5 w-[45%] blur-2xl shadow-2xl"></div>
            <h1
                class="text-7xl h-full w-full select-none z-10 font-extrabold flex justify-center items-center bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-700 to-gray-400">
                Admin</h1>
        </div>
    </div>
    <div class="lg:h-96 h-fit w-full my-3 rounded-md bg-gray-200 dark:bg-slate-700 grid grid-cols-1 md:grid-cols-2">
        <div class="w-full h-full rounded-md flex items-center justify-center relative">
            <div class="h-80 w-80 blur-xl rounded-full shadow-2xl shadow-fuchsia-900 absolute  "></div>
            <img class="h-96 w-96 z-10" src="../img/rice field-bro.svg" alt="">
        </div>
        <div class="w-full h-full px-8 py-2 flex flex-col justify-center items-center relative rounded-md">
            <h1>Farming is a proffession of hope</h1>
            <div
                class="z-10 text-5xl font-bold text-center transition-all duration-1000 hover:scale-110 text-green-700 dark:text-gray-300 peer">
                "The good farmer is a craftsman of the highest order, a kind of artist." </div>
            <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute  ">
            </div>
            <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300">अच्छा किसान सर्वोच्च कोटि का शिल्पकार, एक प्रकार
                का कलाकार होता है</h1>
        </div>
    </div>
    <!-- <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="bg-yellow-500 h-96 w-full my-8 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class=" bg-green-500"></div>
            <div class=" bg-fuchsia-800"></div>
        </div>
        <div class="h-96 w-full bg-fuchsia-500">

        </div>
        <div class="h-96 w-full bg-red-300">

        </div>
    </div> -->

    <div class="h-32 w-full bg-gray-200 rounded-lg my-8 dark:bg-slate-700 flex items-center">
        <div class="w-[50%] h-full flex items-center">
            <h1 class="text-5xl font-bold text-slate-700  dark:text-gray-200 pl-8">Approve Laboratory</h1>
        </div>
    </div>
    <!-- laboratory -->
    <div class="bg-gray-200 dark:bg-slate-600 w-full h-fit rounded my-8 flex items-center duration-300">
        <div class="w-full p-2 h-full">
            <div class="p-4 bg-gray-100 dark:bg-gray-900 rounded-md">
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
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-100">
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
                                            class='px-6 py-2 rounded-lg bg-green-300 hover:bg-green-400 text-gray-50 dark:text-gray-700'>
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
    <div class=" h-7">
    </div>
</section>