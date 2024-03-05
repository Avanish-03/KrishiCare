<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class="profile-page">
    <div class="relative block h-500-px">
        <div class="absolute top-0 w-full h-96 bg-center bg-cover " style="background-image: url('../img/admin_img/wave-haikei.png');"></div>
    </div>
    <div class="relative py-16 ">
        <div class="container mx-auto px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-gray-800 w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6 ">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                <img alt="..." src="../img/avanish.jpg" class="shadow-xl rounded-full w-32 h-32 align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
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
                                <a href="#pablo" class="font-normal text-white">Update</a>
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