<!-- farmer slide -->
<section class="h-full mx-auto p-8 pb-28 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Farmer</h1>
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-600 flex items-center">
        <div class="w- h-full flex justify-start px-8">
            <img class="h-full w-full" src="../img/New notifications-bro.png" alt="">
        </div>
        <div class=" h-full flex items-center">
            <h1 class=" text-4xl font-bold ">Farmer</h1>
        </div>
    </div>

    <div class="h-fit w-full mt-6 flex rounded-md bg-gray-200 dark:bg-slate-600 ">
        <div class="w-full m-2 p-2 h-full">
            <div class="p-4 bg-white dark:bg-gray-900 rounded-md">
                <div class="mb-2 flex justify-between">
                    <label for="" class="font-bold text-2xl font-mono">Farmer Details </label>
                    <button class="bg-green-600 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Add Farmer</button>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Farmer Id</th>
                            <th scope="col" class="px-6 py-3">Farmer Name</th>
                            <th scope="col" class="px-6 py-3">Farmer Email</th>
                            <th scope="col" class="px-6 py-3">Farmer Contact-No</th>
                            <th scope="col" class="px-6 py-3">Address</th>
                            <th scope="col" class="px-6 py-3">City</th>
                            <th scope="col" class="px-6 py-3">State</th>
                            <th scope="col" class="px-6 py-3">Action</th>
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
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr class='bg-white dark:text-gray-300 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                            <th class='px-6 py-4 font-medium whitespace-nowrap'>$row[farmer_id]</th>
                            <td class='px-6 py-4'>$row[first_name]</td>
                            <td class='px-6 py-4'>$row[email]</td>
                            <td class='px-6 py-4'>$row[contact_number]</td>
                            <td class='px-6 py-4'>$row[address]</td>
                            <td class='px-6 py-4'>$row[city]</td>
                            <td class='px-6 py-4'>$row[state]</td>
                            <td class='px-6 py-4'>
                            <a href='' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                            <a href='' class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete</a>
                            </td>
                            </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>