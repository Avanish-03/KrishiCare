<!-- component -->
<!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> -->
<!-- Profile Section -->
<section class="w-full h-full mx-auto sm:my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Profile</h1>
    <!-- information Section -->
    <div class=" profile-page ">
        <div class=" block h-350-px">
            <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center mb-4">
                <div class="px-8 w-fit h-full flex justify-start">
                    <img class="h-full w-full" src="../img/Profile Interface-bro admin.png" alt="">
                </div>
                <div class="w-[50%] h-full flex items-center">
                    <h1 class="text-md sm:text-4xl font-bold">Profile Detail</h1>
                </div>
            </div>
            <!-- <div class="w-full h-44 sm:h-96 bg-center bg-cover" style="background-image: url('../img/admin_img/wave-haikei.png');"></div> -->
        </div>
        <div class="relative py-16 ">
            <div class="container mx-auto px-">
                <div class="relative flex flex-col min-w-0 break-words bg-gray-800 w-full mb-6 shadow-xl rounded-lg -mt-56">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">

                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        <img alt="..." src="../img/avanish.jpg" class="shadow-xl rounded-full w-32 h-32 align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                    </button>

                                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5 text-center">
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                                    <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                        Yes, I'm sure
                                                    </button>
                                                    <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-20 text-white">
                            <h3 class="text-4xl font-semibold leading-normal  mb-2">
                                Jenna Stones
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2  font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg "></i>
                                Los Angeles, California
                            </div>
                            <div class="mb-2  mt-10">
                                <i class="fas fa-briefcase mr-2 text-lg "></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div class="mb-2 ">
                                <i class="fas fa-university mr-2 text-lg "></i>University of Computer Science
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-cente text-whiter">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed ">
                                        An artist of considerable range, Jenna the name taken by
                                        Melbourne-raised, Brooklyn-based Nick Murphy writes,
                                        performs and records all of his own music, giving it a
                                        warm, intimate feel with a solid groove structure. An
                                        artist of considerable range.
                                    </p>
                                    <a href="#pablo" class="font-normal text-black bg-gray-200 rounded-md px-2 py-1">Update</a>
                                </div>
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

if (isset($_POST['smt'])) {
    $targetdir = "../img/admin_img/";
    $targetfile = $targetdir . basename($_FILES['adminimg']['name']);
    $path = $targetfile;

    if (move_uploaded_file($_FILES['adminimg']['tmp_name'], $targetfile)) {
        $adminimg = "UPDATE `admin` SET admin_img='$path' where name='Admin'";
        $result = mysqli_query($con, $adminimg);
        echo "<script>alert('uploaded !')</script>";
    } else {
        // echo "mysqli_error($con)";
        echo "file not uploaded !";
    }
}

?>