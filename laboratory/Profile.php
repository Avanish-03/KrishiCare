<?php
session_start();
?>
<!-- Profile Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Profile</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Profile data.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="text-4xl font-bold dark:text-gray-100">profile Details</h1>
        </div>
    </div>
    <div class="h-fit w-full my-8 rounded-md bg-gray-200 dark:bg-slate-700">
        <?php
        if ($labdata == null) {
        } else {
            $labdatasize = count($labdata);
            for ($i = 0; $i < $labdatasize; $i++) {
                // Accessing values of the nested array at index $i
                $nested_array = $labdata[$i];
                ?>
                <div class="h-fiy w-full my-6 pb-8 rounded-md bg-gray-200 dark:bg-slate-700 duration-700">
                    <div class="px-6 py-4">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <!-- form -->
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                        <div class="text-center">
                                            <input type="file" id="laboratory_img" multiple accept=".jpg,.jpeg,.png"
                                                class="hidden">
                                            <div id="inputDiv"
                                                class="-mt-20 relative bg-gray-300 dark:bg-gray-700 h-44 w-44 flex justify-center items-center rounded-full">
                                                <?php
                                                if (file_exists($nested_array["labprofile"]) == true) {
                                                    echo "<img src='../img/" . $nested_array["labprofile"] . "' class='w-40 h-40 m-auto rounded-full shadow object-cover'>";
                                                } else {
                                                    echo "<img src='../img/profile.png' class='w-40 h-40 m-auto rounded-full shadow object-cover'>";
                                                }
                                                ?>
                                                <label for="laboratory_img"
                                                    class="absolute bottom-3 right-3 inline-flex items-center cursor-pointer px-2 py-2 bg-gray-300 hover:bg-gray-400/60 dark:bg-slate-600 hover:dark:bg-slate-500 border border-gray-300 rounded-full font-semibold text-lg text-gray-700 dark:text-gray-100 uppercase tracking-widest shadow-sm focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-0">
                                                    <i class="fa-solid fa-camera"></i>
                                                </label>
                                            </div>
                                            <div class="w-full flex justify-center items-center">
                                                <span id="spanlaboratory_img" class="text-red-500"></span>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <button type="button"
                                                    onclick="return labProfilePic('labProfile','<?php echo $_SESSION['laboratory']; ?>')"
                                                    name=""
                                                    class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-slate-600 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-100 uppercase tracking-widest shadow-sm focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-0">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <input type="text" hidden name="labProfile" id="labProfile">
                    </div>

                    <div class="text-center  mt-5 text-gray-800 dark:text-white">

                        <h3 class="text-4xl font-semibold leading-normal capitalize mb-2">
                            <?php echo $nested_array["lab_name"] ?>
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2  font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg "></i>
                            <?php echo $nested_array["city"] . ", " . $nested_array["state"] ?>
                        </div>
                        <div class="mb-2  mt-2">
                            <i class="fa-solid fa-envelope mr-2 text-lg "></i>
                            <?php echo $nested_array["email"] ?>
                        </div>
                        <!-- <div class="mb-2 ">
                            <i class="fas fa-university mr-2 text-lg "></i>University of Computer Science
                        </div> -->
                    </div>
                    <hr>
                    <div class="my-4 pt-2  text-center text-gray-600 dark:text-white">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed ">
                                    "Within the laboratory, curiosity becomes discovery, experimentation breeds innovation, and
                                    knowledge flourishes.The laboratory is the canvas where science paints its masterpieces,
                                    revealing the beauty and complexity of the natural world."
                                </p>
                                <!-- <a href="#pablo" class="font-bold text-black bg-gray-200 rounded-md px-6 py-1">Edit</a> -->
                            </div>
                        </div>

                        <div class="mb-2 flex justify-center mt-4">
                            <div class="relative flex flex-col items-center justify-center" x-data="{ open: false }">
                                <div class="">
                                    <button @click="open = true"
                                        class="bg-gray-300 dark:bg-slate-600 border hover:bg-gray-200 py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Update
                                        Profile</button>
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
                                            <div class="md:col-span-4 text-2xl bg-green-600 text-white dark:bg-white dark:text-black text-center font-bold rounded-md px-2 mb-4 py-1">UPDATE PROFILE
                                            </div>
                                            <form id="updateLabDetailForm" method="post" action="../Backend/CRUD.php">
                                                <div
                                                    class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4 text-black dark:text-white font-mono">
                                                    <div class="md:col-span-4">
                                                        <input type="hidden" name="labid" value="<?php echo $nested_array["lab_id"];?>">
                                                        <label class="text-lg" for="fullname">Full Name</label>
                                                        <input type="text" name="fullname" id="fullname"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-slate-200 dark:bg-slate-600" value="<?php echo $nested_array["lab_name"];?>" />
                                                    </div>

                                                    <div class="md:col-span-2">
                                                        <label class="text-lg" for="email">Email Address</label>
                                                        <input type="email" name="email" id="email"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-slate-200 dark:bg-slate-600" value="<?php echo $nested_array["email"];?>"/>
                                                    </div>

                                                    <div class="md:col-span-2">
                                                        <label class="text-lg" for="contact">Contact</label>
                                                        <input type="text" name="contact" id="contact"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-slate-200 dark:bg-slate-600" value="<?php echo $nested_array["contact"];?>"
                                                            />
                                                    </div>

                                                    <div class="md:col-span-4">
                                                        <label class="text-lg" for="address">Address / Street</label>
                                                        <input type="text" name="address" id="address"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-slate-200 dark:bg-slate-600" value="<?php echo $nested_array["lab_add"];?>"
                                                            />
                                                    </div>

                                                    <div class="md:col-span-2">
                                                        <label class="text-lg" for="city">City</label>
                                                        <input type="text" name="city" id="city"
                                                            class="city h-10 border mt-1 rounded px-4 w-full bg-slate-200 dark:bg-slate-600"
                                                            value="<?php echo $nested_array["city"];?>" />
                                                    </div>

                                                    <div class="md:col-span-2">
                                                        <label class="text-lg" for="state">State</label>
                                                        <input type="text" name="state" id="state"
                                                            class="state h-10 border mt-1 rounded px-4 w-full bg-slate-200 dark:bg-slate-600"
                                                            value="<?php echo $nested_array["state"];?>" />
                                                    </div>

                                                </div>
                                                <div class="mt-6 flex justify-center gap-x-4">
                                                    <button type="sbumit" value="" name="updateLabDetail"
                                                        class="py-2 w-52 inline-flex justify-center items-center gap-2 rounded-md font-medium bg-gray-300 dark:bg-slate-800 dark:hover:border cursor-pointer shadow-lg align-middle hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-700 focus:ring-green-600 transition-all text-lg">Save Update</button>
                                                        
                                                    <input  @click="open = false" type="reset" value="Cancel" name="cancel"
                                                        class="py-2 w-52 inline-flex justify-center items-center gap-2 rounded-md font-medium bg-gray-300 dark:text-black dark:hover:border cursor-pointer shadow-lg align-middle hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-red-600 transition-all text-lg">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="h-7"></div>
</section>