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
                                <div class="relative">
                                    <div class="relative flex flex-col items-center justify-center" x-data="{ open: false }">
                                        <div class="">
                                            <button @click="open = true" class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">
                                                <img alt="..." src="../img/avanish.jpg" class="shadow-xl rounded-full w-32 h-32 align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                            </button>
                                        </div>
                                        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-75 transition-opacity" @keydown.escape.window="open = false">
                                            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:w-full sm:max-w-lg" @click.away="open = false">
                                                <div class="sm:p-10">
                                                    <button @click="open = false" type="button" class="px-2 flex justify-center items-end gap-2 rounded-md border border-transparent font-semibold text-black transition-all text-lg">
                                                        ×
                                                    </button>
                                                    <div class="md:col-span-4 text-4xl bg-slate-700 rounded-md px-2"></div>
                                                    <form method="post" enctype="multipart/form-data">
                                                        <hr class="w-full border-2">
                                                        <div class="flex justify-center items-center text-lg font-bold pt-4">
                                                            <label for="image" class="text-black">Upload Profile Image</label>
                                                        </div>
                                                        <div class="px-10 py-2">
                                                            <input type="file" name="adminimg" id="new_image" class="border text-black border-gray-300 rounded-md px-2 w-full h-10 mt-1">
                                                        </div>
                                                        <div class="px-10 py-2">
                                                            <button type="submit" name="admin_pic" class="border border-gray-300 bg-gray-600 hover:bg-gray-700 text-white rounded-md px-2 w-full h-10 mt-1">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-20 text-white">
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

<?php
include('../Backend/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin_imgs'])) {
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
