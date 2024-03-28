<!-- Report Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Report</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Attached files-rafiki.svg" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class=" text-4xl font-bold">Report</h1>
        </div>
    </div>
    <div class="my-8 h-full w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <div class="w-full h-96 grid grid-cols-1 md:grid-cols-2 bg-gray-200 rounded-lg dark:bg-slate-700">
            <div class="h-full w-full flex justify-center items-center">
                <img class="h-full w-full" src="../img/Download-rafiki.svg" alt="">
            </div>
            <div class="h-full w-full flex justify-evenly items-center">
                <form action="../Backend/Reports/SoilTestReport/ViewReport.php" method="post">
                    <input type="submit" class="bg-green-600 text-white rounded-lg p-2" name="viewReport" value="View Report" />
                </form>
                <form action="../Backend/Reports/SoilTestReport/DownloadReport.php" method="post">
                    <input type="submit" class="bg-red-600 text-white rounded-lg p-2" name="downloadReport" value=" Download Report" />
                    <i class="fa-solid fa-download"></i>
                </form>
            </div>
        </div>
    </div>
    <div class="h-7"></div>
</section>