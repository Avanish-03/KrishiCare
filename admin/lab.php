<section class="w-full h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Laboratory</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center">
        <div class="w-fit h-full flex justify-start px-8">
            <img class="h-full w-full" src="../img/lab-illustrater.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold">Laboratory</h1>
        </div>
    </div>
    <div class="h-fit w-full mt-6 flex rounded-md bg-gray-200 dark:bg-slate-600 ">
        <div class="w-full m-2 h-full">
            <div class="p-4 bg-white dark:bg-gray-900 rounded-md ">
                <div class="mb-2 flex justify-between">

                    <label for="" class="font-bold text-2xl font-mono">Laboratory Details </label>
                    <!-- <button class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Add Laboratory</button> -->
                    <div class="relative flex flex-col items-center justify-center" x-data="{ open: false }">
                        <div class="">
                            <button @click="open = true" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Add Laboratory</button>
                        </div>
                        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-75 transition-opacity" @keydown.escape.window="open = false">
                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:w-full sm:max-w-lg" @click.away="open = false">
                                <div class="sm:p-10">
                                    <button @click="open = false" type="   " class="px-2 flex justify-center items-end gap-2 rounded-md border border-transparent font-semibold text-black transition-all text-lg">
                                        ×
                                    </button>
                                    <div class="md:col-span-4 text-4xl bg-slate-700 rounded-md px-2">Add New Laboratory</div>
                                    <form id="farmForm" method="post" action="../Backend/CRUD.php">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4 text-black font-bold">
                                            <div class="md:col-span-4">
                                                <label for="firstname">First Name</label>
                                                <input type="text" name="firstname" id="firstname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                            </div>

                                            <div class="md:col-span-4">
                                                <label for="middlename">Middle Name</label>
                                                <input type="text" name="middlename" id="middlename" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                            </div>

                                            <div class="md:col-span-4">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" name="lastname" id="lastname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                            </div>

                                            <div class="md:col-span-2">
                                                <label for="email">Email Address</label>
                                                <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email123@gmail.com" />
                                            </div>

                                            <div class="md:col-span-2">
                                                <label for="contact">Contact</label>
                                                <input type="text" name="contact" id="contact" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                            </div>

                                            <div class="md:col-span-4">
                                                <label for="address">Address / Street</label>
                                                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                            </div>

                                            <div class="md:col-span-2">
                                                <label for="state">State</label>
                                                <input type="text" name="state" id="state" class="state h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                            </div>

                                            <div class="md:col-span-2">
                                                <label for="city">City</label>
                                                <input type="text" name="city" id="city" class="city h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                            </div>

                                            <div class="md:col-span-2">
                                                <label for="pwd">Password</label>
                                                <div class="relative flex justify-end items-center">
                                                    <img id="imgpwd" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('imgpwd','pwd')">
                                                    <input type="password" name="pwd" id="pwd" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                </div>
                                            </div>

                                            <div class="md:col-span-2">
                                                <label for="cpwd">Confirm Password</label>
                                                <div class="relative flex justify-end items-center">
                                                    <img id="imgcpwd" src="../img/eye.png" alt="" class="absolute h-5 w-5 z-10 cursor-pointer mr-3" onclick="togglepassword('imgcpwd','cpwd')">
                                                    <input type="password" name="cpwd" id="cpwd" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-6 flex justify-center gap-x-4">
                                            <input type="button" value="Register" name="addfarmer" class="py-2 w-full inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-700 text-gray-100 shadow-sm align-middle hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-700 focus:ring-green-600 transition-all text-lg" onclick="return registerLaboratory()">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
=======
                    <label for="" class="font-bold text-2xl font-mono text-gray-900 dark:text-gray-300">Laboratory Details </label>
                    <button class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Add Laboratory</button>
>>>>>>> d5ba5464097e075d8207f819e9074d3dde33ace4
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
                            <th scope="col" class="px-6 py-3">Action</th>
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
                        ?>
                            <tr class='bg-white dark:text-gary-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                                <th class='px-6 py-4 font-medium whitespace-nowrap'><?php $enqFamerId = md5($row['lab_id']);
                                                                                    echo $enqFamerId; ?></th>
                                <td class='px-6 py-4'><?php echo $row['lab_name']; ?></td>
                                <td class='px-6 py-4'><?php echo $row['email']; ?></td>
                                <td class='px-6 py-4'><?php echo $row['contact']; ?></td>
                                <td class='px-6 py-4'><?php echo $row['lab_add']; ?></td>
                                <td class='px-6 py-4'><?php echo $row['city']; ?></td>
                                <td class='px-6 py-4'><?php echo $row['state']; ?></td>
                                <td class='px-6 py-4'><?php echo $row['ownership']; ?></td>
                                <td class='px-6 py-4'>
                                    <!-- <a href='' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a> -->
                                    <div class="relative flex flex-col items-center justify-center" x-data="{ open: false }">
                                        <div class="">
                                            <button @click="open = true" class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</button>
                                        </div>
                                        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-75 transition-opacity" @keydown.escape.window="open = false">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:w-full sm:max-w-lg" @click.away="open = false">
                                                <div class="sm:p-10">
                                                    <button @click="open = false" type="   " class="px-2 flex justify-center items-end gap-2 rounded-md border border-transparent font-semibold text-black transition-all text-lg">
                                                        ×
                                                    </button>
                                                    <div class="md:col-span-4 text-4xl bg-slate-700 rounded-md px-2">Update Farmer Details</div>
                                                    <form id="farmForm" method="post" action="../Backend/CRUD.php">
                                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4 text-black font-bold">
                                                            <div class="md:col-span-4">
                                                                <label for="firstname">First Name</label>
                                                                <input type="text" name="firstname" id="firstname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $row['lab_name'] ?>" />
                                                            </div>

                                                            <div class="md:col-span-2">
                                                                <label for="email">Email Address</label>
                                                                <input type="email" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $row['email'] ?>" placeholder="email@domain.com" />
                                                            </div>

                                                            <div class="md:col-span-2">
                                                                <label for="contact">Contact</label>
                                                                <input type="text" name="contact" id="contact" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $row['contact'] ?>" placeholder="" />
                                                            </div>

                                                            <div class="md:col-span-4">
                                                                <label for="address">Address / Street</label>
                                                                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $row['lab_add'] ?>" placeholder="" />
                                                            </div>

                                                            <div class="md:col-span-2">
                                                                <label for="state">State</label>
                                                                <input type="text" name="state" id="state" class="state h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $row['state'] ?>" placeholder="" />
                                                            </div>

                                                            <div class="md:col-span-2">
                                                                <label for="city">City</label>
                                                                <input type="text" name="city" id="city" class="city h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?php echo $row['city'] ?>" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="mt-6 flex justify-center gap-x-4">
                                                            <input type="button" value="Register" name="updatefarmer" class="py-2 w-full inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-700 text-gray-100 shadow-sm align-middle hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-700 focus:ring-green-600 transition-all text-lg" onclick="return registerFarmer()">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href='' class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete</a>
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
    <div class="my-8 h-full w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-600"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-600"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-600"></div>
        <div class="w-full h-full bg-gray-200 rounded-lg dark:bg-slate-600"></div>
    </div>
    <div class="h-7"></div>
</section>