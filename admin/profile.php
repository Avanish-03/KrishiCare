<?php
// include('../Backend/config.php');

if (isset($_FILES['admin_img'])) {

    $file_name = $_FILES['admin_img']['name'];
    $file_tmp = $_FILES['admin_img']['tmp_name'];
    $uploadPath = '../img/admin_img/';
    if (move_uploaded_file($file_tmp, $uploadPath . $file_name)) {
        echo "<script>alert('successfully');</script>";
    } else {
        echo "<script>alert('Error uploading file. Check if the directory has the correct permissions');</script>";
    }
}
?>

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
    <div class="h-fiy w-full my-8 pb-8 rounded-md bg-gray-300 dark:bg-slate-600 duration-700">
        <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                    <!-- form -->
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                            <input type="file" name="admin_img" class="hidden" x-ref="photo" x-on:change="photoName = $refs.photo.files[0].name; const reader = new FileReader(); reader.onload = (e) => {photoPreview = e.target.result;}; reader.readAsDataURL($refs.photo.files[0]);">
                            <div class="text-center">
                                <div class="-mt-20" x-show="! photoPreview">
                                    <img src="../img/profile.png" class="w-40 h-40 m-auto rounded-full shadow object-cover">
                                </div>
                                <div class="-mt-20" x-show="photoPreview" style="display: none;">
                                    <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                    </span>
                                </div>
                                <button type="submit" class="-m-20 inline-flex items-center px-4 py-2 bg-green-600 border border-gray-300 rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm hover:text-gray-100 focus:outline-none focus:border-green-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
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
    <div class="h-7"></div>
</section>