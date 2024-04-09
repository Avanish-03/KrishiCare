<?php
require_once ('../Backend/config.php');
$farmerquery = "SELECT count(*) as total FROM `farmer_detail`;";
$labquery = "SELECT count(*) as total FROM `laboratory_detail`;";
$reportquery = "SELECT count(*) as total FROM `report_detail`;";

$farmerresult = mysqli_query($con, $farmerquery);
if ($farmerresult) { // Check if the query was successful
    $row = mysqli_fetch_assoc($farmerresult);
    $totalfarmer = $row['total'];
} else {
    $totalfarmer = 0; // Set to 0 if query fails
}

$labresult = mysqli_query($con, $labquery);
if ($labresult) { // Check if the query was successful
    $row = mysqli_fetch_assoc($labresult);
    $totallab = $row['total'];
} else {
    $totallab = 0; // Set to 0 if query fails
}

$reportresult = mysqli_query($con, $reportquery);
if ($reportresult) { // Check if the query was successful
    $row = mysqli_fetch_assoc($reportresult);
    $totalreport = $row['total'];
} else {
    $totalreport = 0; // Set to 0 if query fails
}
?>

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
    <div
        class="w-full grid grid-cols-2 md:grid-cols-4 my-8 px-4 rounded dark:text-gray-300 bg-gray-200 dark:bg-slate-600">
        <div class="p-4 w-full">
            <div
                class="border-2 w-full flex justify-around items-center min-w-fit border-gray-200 px-12 py-6 rounded-md bg-gray-100 dark:bg-slate-700">
                <h2 class="font-bold font-mono text-5xl text-gray-900">
                    <div class="admincounter" data-speed="1000">400</div>
                </h2>
                <p class="text-xl font-bold font-serif ">visiters</p>
            </div>
        </div>
        <div class="p-4 w-full">
            <div
                class="border-2 w-full flex justify-around items-center min-w-fit border-gray-200 px-12 py-6 rounded-md bg-gray-100 dark:bg-slate-700">
                <h2 class="font-bold font-mono text-5xl text-gray-900">
                    <div class="admincounter" data-speed="1000"><?php echo $totalreport; ?></div>
                </h2>
                <p class="text-xl font-bold font-serif ">Reports</p>
            </div>
        </div>
        <div class="p-4 w-full">
            <div
                class="border-2 w-full flex justify-around items-center min-w-fit border-gray-200 px-12 py-6 rounded-md bg-gray-100 dark:bg-slate-700">
                <h2 class="font-bold font-mono text-5xl text-gray-900">
                    <div class="admincounter" data-speed="1000"><?php echo $totalfarmer; ?></div>
                </h2>
                <p class="text-xl font-bold font-serif ">Farmers</p>
            </div>
        </div>
        <div class="p-4 w-full">
            <div
                class="border-2 w-full flex justify-around items-center min-w-fit border-gray-200 px-12 py-6 rounded-md bg-gray-100 dark:bg-slate-700">
                <h2 class="font-bold font-mono text-5xl text-gray-900">
                    <div class="admincounter" data-speed="1000"><?php echo $totallab; ?></div>
                </h2>
                <p class="text-xl font-bold font-serif ">Labotatory</p>
            </div>
        </div>
    </div>
    <div class="lg:h-96 h-fit w-full my-3 rounded-md bg-gray-200 dark:bg-slate-600 grid grid-cols-1 md:grid-cols-2">
        <div class="w-full h-full flex justify-center items-center rounded-md relative">
            <div class="h-80 w-80 blur-xl rounded-full shadow-2xl shadow-fuchsia-900 absolute  "></div>
            <img class="h-96 w-96 z-10" src="../img/Admin-bro.svg" alt="">
        </div>
        <div class="w-full h-full px-8 py-2 flex flex-col justify-center items-center rounded-md">
            <div class="h-full w-full flex justify-center items-center">
                <?php include ("chart.php");
                $image_data = $_SESSION['chart_image'];
                // Display the chart image
                echo '<img class="rounded-lg shadow-lg" src="data:image/png;base64,' . base64_encode($image_data) . '" />';
                $_SESSION['chart_image'] = false;
                ?>
            </div>
            <div
                class="z-10 text-5xl font-bold text-center transition-all duration-1000 hover:scale-110 text-green-700 dark:text-gray-300 peer">
            </div>
            <div class="h-8 w-[90%] blur-3xl shadow-2xl dark:bg-blue-400 dark:peer-hover:shadow-fuchsia-900 absolute  ">
            </div>
            <h1 class="text-xs pt-4 text-gray-500 dark:text-gray-300"></h1>
        </div>
    </div>
    <div class="lg:h-96 h-fit w-[50%] my-8 rounded-md bg-gray-200 dark:bg-slate-600 ">
        <div class="w-full h-full flex justify-center items-center rounded-md relative">
            <?php include ("To-do.php"); ?>
        </div>
        <!-- <div class="w-full h-full px-8 py-2 flex flex-col justify-center items-center relative rounded-md">
        </div> -->
    </div>

    <div class="relative h-32 w-full my-8 flex items-center bg-gray-200 dark:bg-slate-700 bg-cover rounded-md ">
        <div
            class="h-8 w-[60%] blur-3xl shadow-2xl bg-green-400 dark:bg-blue-400 shadow-blue-500 dark:shadow-fuchsia-900 absolute  ">
        </div>
        <h1
            class="z-10 h-full flex justify-center items-center text-6xl font-bold px-8 transition-all duration-300 bg-cover bg-no-repeat bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-violet-500">
            Users Details</h1>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-300">
            <tr>
                <th scope="col" class="px-6 py-3">User</th>
                <th scope="col" class="px-6 py-3">User Name</th>
                <th scope="col" class="px-6 py-3">User Email</th>
                <th scope="col" class="px-6 py-3">User Contact-No</th>
                <th scope="col" class="px-6 py-3">Address</th>
                <th scope="col" class="px-6 py-3">City</th>
                <th scope="col" class="px-6 py-3">State</th>
                <th scope="col" class="px-6 py-3">Ownership</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../Backend/config.php";
            $query = "select * from farmer_detail";
            $result = $con->query($query);
            if (!$result) {
                die("invalide query");
            }
            while ($row = $result->fetch_assoc()) { ?>

                <tr
                    class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>
                    <td class='px-6 py-4'>
                        <?php
                        if (file_exists($row["farmerprofile"]) == true) {
                            echo " <img src='../img/" . $row["farmerprofile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                        } else {
                            echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                        } ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo $row['email'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo $row['contact_number'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo $row['address'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo $row['city'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo $row['state'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?php echo "Farmer" ?>
                    </td>

                </tr>
            <?php }
            ?>

            <?php
            include "../Backend/config.php";
            $query = "select * from laboratory_detail WHERE status='Approved';";
            $result = $con->query($query);
            if (!$result) {
                die("invalide query");
            }
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr
                    class='bg-gray-100 dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600'>
                    <td class='px-6 py-4'>
                        <?php
                        if (file_exists($row["labprofile"]) == true) {
                            echo " <img src='../img/" . $row["labprofile"] . "' class='h-12 w-12 rounded-full object-cover' alt=''>";
                        } else {
                            echo " <img src='../img/profile.png' class='h-12 w-12 rounded-full' alt=''>";
                        } ?>
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

                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
    </div>
    <div class="my-8 h-7"></div>
    <script>
        (() => {
            const counter = document.querySelectorAll('.admincounter');
            // covert to array
            const array = Array.from(counter);
            // select array element
            array.map((item) => {
                // data layer
                let counterInnerText = item.textContent;

                let count = 1;
                let speed = item.dataset.speed / counterInnerText

                function counterUp() {
                    item.textContent = count++
                    if (counterInnerText < count) {
                        clearInterval(stop);
                    }
                }
                const stop = setInterval(() => {
                    counterUp();
                }, speed);
            })
        })()
    </script>

</section>