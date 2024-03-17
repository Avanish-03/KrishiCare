<?php
include('../Backend/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin_img'])) {
    // Check if a new image is provided
    if ($_FILES['admin_img']['name'] != '') {
        $newImageName = $_FILES['admin_img']['name'];
        $newImageTemp = $_FILES['admin_img']['tmp_name'];
        $uploadPath = '../img/admin_img/'; // Corrected upload path
        // Move the uploaded image to the desired directory
        if (move_uploaded_file($newImageTemp, $uploadPath . $newImageName)) {
            // Update data in the database with the new image
            $query = "UPDATE admin SET admin_img='$uploadPath$newImageName' WHERE name ='{$_SESSION['user']}'"; // Corrected query
            $details = mysqli_query($con, $query);
            if ($details) {
                echo "<script>alert('Cover Image updated successfully');</script>";
                echo "<script>window.location.href='Hospital_dasboard.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error updating database: " . mysqli_error($con) . "');</script>";
            }
        } else {
            echo "<script>alert('Error uploading file. Check if the directory has the correct permissions');</script>";
        }
    }
}
?>

<!-- Profile Section -->
<section class="w-full h-full mx-auto p-8 rounded-md">
    <!-- <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Profile</h1> -->
    <div class="profile-page">
        <div class="block h-350-px">
            <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center mb-4">
                <div class="px-8 w-fit h-full flex justify-start">
                    <img class="h-full w-full" src="../img/Profile Interface-bro admin.png" alt="">
                </div>
                <div class="w-[50%] h-full flex items-center">
                    <h1 class="text-md sm:text-4xl font-bold">Profile Detail</h1>
                </div>
            </div>
        </div>
        <div class="relative py-16">
            <div class="container mx-auto px-">
                <div class="relative flex flex-col min-w-0 break-words bg-gray-800 w-full mb-6 shadow-xl rounded-lg -mt-56">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                                    <!-- Photo File Input -->
                                    <input type="file" class="hidden" x-ref="photo" x-on:change="photoName = $refs.photo.files[0].name; const reader = new FileReader(); reader.onload = (e) => {photoPreview = e.target.result;}; reader.readAsDataURL($refs.photo.files[0]);">
                                    <div class="text-center">
                                        <!-- Current Profile Photo -->
                                        <div class="-mt-20" x-show="! photoPreview">
                                            <img src="../img/admin_img/ <?php echo "" ?>" class="w-40 h-40 m-auto rounded-full shadow">
                                        </div>
                                        <!-- New Profile Photo Preview -->
                                        <div class="-mt-20" x-show="photoPreview" style="display: none;">
                                            <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                            </span>
                                        </div>
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-gray-300 rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm hover:text-gray-100 focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                                           Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            </div>
        </div>
    </div>
</section>

