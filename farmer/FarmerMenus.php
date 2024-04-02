<?php
session_start();
?>

<!-- Update Form -->
<?php
if ($process == 'updateProfile') {
?>
    <form class="w-full h-full flex justify-center items-center min-w-96">
        <?php
        $data_size = count($farmerdata);
        for ($i = 0; $i < $data_size; $i++) {
            // Accessing values of the nested array at index $i
            $nested_array = $farmerdata[$i];
        ?>
            <div class="w-[85%] px-8 py-5 rounded-lg bg-gray-300 dark:bg-slate-700 transition-all duration-300">
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="firstname">First name :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="firstname" id="firstname" value='<?php echo $nested_array["first_name"]; ?>'>
                    </div>
                    <span id="spanfirstname" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="middlename">Middle Name :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="middlename" id="middlename" value='<?php echo $nested_array["middle_name"]; ?>'>
                    </div>
                    <span id="spanmiddlename" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="lastname">Last Name :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="lastname" id="lastname" value='<?php echo $nested_array["last_name"]; ?>'>
                    </div>
                    <span id="spanlastname" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="emai">Email :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="email" id="email" value='<?php echo $nested_array["email"]; ?>'>
                    </div>
                    <span id="spanemail" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="contact">Contact :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="contact" id="contact" value='<?php echo $nested_array["contact_number"]; ?>'>
                    </div>
                    <span id="spancontact" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="address">Address :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="address" id="address" value='<?php echo $nested_array["address"]; ?>'>
                    </div>
                    <span id="spanaddress" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="city">City :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="city" id="city" value='<?php echo $nested_array["city"]; ?>'>
                    </div>
                    <span id="spancity" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2">
                    <div class="flex">
                        <label class="font-bold w-[30%]" for="state">State :</label>
                        <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="state" id="state" value='<?php echo $nested_array["state"]; ?>'>
                    </div>
                    <span id="spanstate" class="w-full flex justify-center text-red-500"></span>
                </div>
                <div class="p-2 flex justify-center gap-5 items-center">
                    <input class="p-2 rounded-lg w-[30%] cursor-pointer bg-green-400 hover:bg-green-500 dark:bg-green-500 dark:hover:bg-green-600" onclick="return updateFarmerData('<?php echo $_SESSION['farmer'] ?>')" type="button" value="Update">
                    <input class="p-2 rounded-lg w-[30%] bg-gray-400 dark:bg-slate-600" type="reset" value="Cancel">
                </div>
            </div>
        <?php
        }
        ?>
    </form>
    <input type="hidden" name="updateFarmerData" id="updateFarmerData">
<?php
} elseif ($process == 'updatePassword') {
?>
    <form id="updateFarmerPassword" class="w-full flex justify-center items-center min-w-96">
        <div class="w-[98%] px-8 py-5 rounded-lg bg-gray-300 dark:bg-slate-700 transition-all duration-300">
            <div class="p-2">
                <div class="flex">
                    <label class="font-bold w-[25%]" for="oldpass">Old Password :</label>
                    <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="oldpass" id="oldpass">
                </div>
                <span id="spanoldpass" class="w-full flex justify-center text-red-500"></span>
            </div>
            <div class="p-2">
                <div class="flex">
                    <label class="font-bold w-[25%]" for="pwd">New Password :</label>
                    <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="pwd" id="pwd">
                </div>
                <span id="spanpass" class="w-full flex justify-center text-red-500"></span>
            </div>
            <div class="p-2">
                <div class="flex">
                    <label class="font-bold w-[25%]" for="cpwd">Confirm Password :</label>
                    <input class="p-2 rounded-lg w-[70%] bg-gray-200 dark:bg-slate-600" type="text" name="cpwd" id="cpwd">
                </div>
                <span id="spancpass" class="w-full flex justify-center text-red-500"></span>
            </div>
            <div class="p-2 flex justify-center gap-5 items-center">
                <input class="p-2 rounded-lg w-[25%] cursor-pointer bg-green-400 hover:bg-green-500 dark:bg-green-500 dark:hover:bg-green-600" onclick="return updateFarmerPassword('<?php echo $_SESSION['farmer'] ?>')" type="button" value="Update">
                <input class="p-2 rounded-lg w-[25%] bg-gray-200 dark:bg-slate-600" type="reset" value="Cancel">
            </div>
        </div>
    </form>
    <input type="hidden" name="updateFarmerPassword" id="updateFarmerPassword">
<?php
}
?>