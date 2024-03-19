<!-- Profile Section -->
<section class="w-full h-full mx-auto p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Profile</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Profile Interface-bro admin.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="text-md sm:text-4xl font-bold">Profile Details</h1>
        </div>
    </div>
    <div class="mb-6 pt-4">
        <div class="h-fiy w-full my-8 pb-8 rounded-md bg-gray-300 dark:bg-slate-600 duration-700">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                        <!-- form -->
                        <form action="#" method="post" enctype="multipart/form-data">
                            <?php
                            if ($admindata == null) {
                            } else {
                                $admindatasize = count($admindata);
                                for ($i = 0; $i < $admindatasize; $i++) {
                                    // Accessing values of the nested array at index $i
                                    $nested_array = $admindata[$i];
                            ?>
                                    <div class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                        <div class="text-center">
                                            <input type="file" id="admin_img" multiple accept=".jpg,.jpeg,.png" class="hidden">
                                            <div id="inputDiv" class="-mt-20 bg-gray-700 h-44 w-44 flex justify-center items-center rounded-full">
                                                <?php
                                                if (!$nested_array["adminprofile"] == null) {
                                                    echo "<img src='../img/" . $nested_array["adminprofile"] . "' class='w-40 h-40 m-auto rounded-full shadow object-cover'>";
                                                } else {
                                                    echo "<img src='../img/profile.png' class='w-40 h-40 m-auto rounded-full shadow object-cover'>";
                                                }
                                                ?>
                                            </div>
                                            <div class="-mt-20" style="display: none;">
                                                <span class="block w-40 h-40 rounded-full m-auto bg-red-500 shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                                </span>
                                            </div>
                                            <label for="admin_img" class="inline-flex items-center px-4 py-2 bg-slate-600 border border-gray-300 rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm hover:text-gray-100 focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-0">Choose Image
                                            </label>
                                            <button type="button" onclick="return uploadProfilePic('changeProfile')" name="uploadProfile" class="inline-flex items-center px-4 py-2 bg-slate-600 border border-gray-300 rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm hover:text-gray-100 focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-0">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
                <input type="text" hidden name="changeProfile" id="changeProfile">
            </div>
            <div class="text-center mt-10 text-white">
                <h3 class="text-4xl font-semibold leading-normal  mb-2">
                    Avanish Yadav
                </h3>
                <div class="text-sm leading-normal mt-0 mb-2  font-bold uppercase">
                    <i class="fas fa-map-marker-alt mr-2 text-lg "></i>
                    Surat , Gujarat
                </div>
                <div class="mb-2  mt-2">
                    <i class="fas fa-briefcase mr-2 text-lg "></i>Solution Manager - Creative Tim Officer
                </div>
                <div class="mb-2 ">
                    <i class="fas fa-university mr-2 text-lg "></i>University of Computer Science
                </div>
            </div>
            <div class="my-4 pt-2 border-t border-blueGray-200 text-cente text-whiter">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full lg:w-9/12 px-4">
                        <p class="mb-4 text-lg leading-relaxed ">
                            An artist of considerable range, Jenna the name taken by
                            Melbourne-raised, Brooklyn-based Nick Murphy writes,
                            performs and records all of his own music, giving it a
                            warm, intimate feel with a solid groove structure. An
                            artist of considerable range.
                        </p>
                        <a href="#pablo" class="font-bold text-black bg-gray-300 rounded-md px-6 py-1">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-7"></div>
</section>