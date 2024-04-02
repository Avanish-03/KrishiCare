<?php
session_start();
?>
<!-- Profile Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Profile</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Profile Interface-bro admin.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-gray-100 text-4xl font-bold">Profile Detail</h1>
        </div>
    </div>
    <div class="h-fit w-full my-8 rounded-md bg-gray-200 dark:bg-slate-700">
        <?php
        if ($farmerdata == null) {
        } else {
            $farmerdatasize = count($farmerdata);
            for ($i = 0; $i < $farmerdatasize; $i++) {
                // Accessing values of the nested array at index $i
                $nested_array = $farmerdata[$i];
        ?>
                <div class="h-fiy w-full my-6 pb-8 rounded-md bg-gray-200 dark:bg-slate-600 duration-700">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <!-- form -->
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                        <div class="">
                                            <input type="file" id="farmer_img" multiple accept=".jpg,.jpeg,.png" class="hidden">
                                            <div id="inputDiv" class="-mt-20 relative bg-gray-400 dark:bg-gray-700 border border-gray-300 h-44 w-44 flex justify-center items-center rounded-full">
                                                <?php
                                                if (file_exists($nested_array["farmerprofile"]) == true) {
                                                    echo "<img src='../img/" . $nested_array["farmerprofile"] . "' class='w-40 h-40 m-auto rounded-full shadow object-cover'>";
                                                } else {
                                                    echo "<img src='../img/profile.png' class='w-40 h-40 m-auto rounded-full shadow object-cover'>";
                                                }
                                                ?>
                                                <label for="farmer_img" class="absolute bottom-3 right-3 inline-flex items-center cursor-pointer px-2 py-2 bg-gray-300 hover:bg-gray-400/60 dark:bg-slate-600 hover:dark:bg-slate-500 border border-gray-300 rounded-full font-semibold text-lg text-gray-700 dark:text-gray-100 uppercase tracking-widest shadow-sm focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-0">
                                                    <i class="fa-solid fa-camera"></i>
                                                </label>
                                            </div>
                                            <div class="w-full flex justify-center items-center">
                                                <span id="spanfarmer_img" class="text-red-500"></span>
                                            </div>
                                            <div class="flex justify-center items-center">
                                                <!-- <span class="block w-40 h-40 rounded-full m-auto bg-red-500 shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');"></span> -->
                                                <button type="button" onclick="return farmerProfilePic('farmerProfile','<?php echo $_SESSION['farmer']; ?>')" name="farmerProfile" class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-slate-600 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-100 uppercase tracking-widest shadow-sm focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-0">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <input type="text" hidden name="farmerProfile" id="farmerProfile">
                    </div>
                    <div class="text-center mt-5 text-gray-600 dark:text-white">
                        <h3 class="text-4xl font-semibold leading-normal  mb-2">
                            <?php echo $nested_array["first_name"] . " " . $nested_array["middle_name"] . " " . $nested_array["last_name"] ?>
                        </h3>
                        <div class="text-sm leading-normal mt-0 mb-2  font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg "></i>
                            <?php echo $nested_array["city"] . ", " . $nested_array["state"] ?>
                        </div>
                        <div class="mb-2  mt-2">
                            <i class="fa-solid fa-envelope mr-2 text-lg "></i><?php echo $nested_array["email"] ?>
                        </div>
                        <!-- <div class="mb-2 ">
                            <i class="fas fa-university mr-2 text-lg "></i>University of Computer Science
                        </div> -->
                    </div>
                    <div class="mb-4 pt-2 border-t border-blueGray-200 text-center text-gray-600 dark:text-white">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-lg leading-relaxed ">
                                    "Krishicare believes in putting farmers first, because when farmers flourish, so does our nation.In the fields of uncertainty, Krishicare stands as the farmer's unwavering companion, providing knowledge, support, and empowerment.Empowering farmers with information is not just our mission; it's our commitment to cultivating a brighter future for agriculture."
                                </p>
                                <!-- <a href="#pablo" class="font-bold text-black bg-gray-200 rounded-md px-6 py-1">Edit</a> -->
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