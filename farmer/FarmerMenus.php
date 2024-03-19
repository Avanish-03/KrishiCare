<!-- Update Form -->
<?php
if ($process == 'updateProfile') {
?>
    <form class="w-full flex justify-center items-center">

        <?php

        // print_r($data);
        $data_size = count($farmerdata);
        // $id = $_SESSION["farmer"];
        // echo $id;

        // Looping through the array elements
        for ($i = 0; $i < $data_size; $i++) {
            // Accessing values of the nested array at index $i
            $nested_array = $farmerdata[$i];
        ?>
            <div class="w-[60%] px-8 py-5 rounded-lg bg-gray-300 dark:bg-slate-800 transition-all duration-300">
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="firstname">First name :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="firstname" id="firstname" value='<?php echo $nested_array["first_name"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="middlename">Middle Name :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="middlename" id="middlename" value='<?php echo $nested_array["middle_name"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="lastname">Last Name :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="lastname" id="lastname" value='<?php echo $nested_array["last_name"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="emai">Email :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="email" id="email" value='<?php echo $nested_array["email"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="contact">Contact :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="contact" id="contact" value='<?php echo $nested_array["contact_number"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="address">Address :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="address" id="address" value='<?php echo $nested_array["address"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="city">City :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="city" id="city" value='<?php echo $nested_array["city"]; ?>'>
                </div>
                <div class="p-2 flex">
                    <label class="font-bold w-[20%]" for="state">State :</label>
                    <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="state" id="state" value='<?php echo $nested_array["state"]; ?>'>
                </div>
                <div class="p-2 flex justify-center gap-5 items-center">
                    <input class="p-2 rounded-lg w-[25%] bg-gray-200 dark:bg-slate-700" type="button" value="Update">
                    <input class="p-2 rounded-lg w-[25%] bg-gray-200 dark:bg-slate-700" type="button" value="Cancel">
                </div>
            </div>
        <?php
        }
        ?>
    </form>
<?php
} elseif ($process == 'updatePassword') {
?>
    <form class="w-full flex justify-center items-center">
        <div class="w-[60%] px-8 py-5 rounded-lg bg-gray-300 dark:bg-slate-800 transition-all duration-300">
            <div class="p-2 flex">
                <label class="font-bold w-[20%]" for="oldpass">Old Password :</label>
                <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="oldpass" id="oldpass">
            </div>
            <div class="p-2 flex">
                <label class="font-bold w-[20%]" for="newPassword">New Password :</label>
                <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="newpass" id="newpass">
            </div>
            <div class="p-2 flex">
                <label class="font-bold w-[20%]" for="cpass">Confirm Password :</label>
                <input class="p-2 rounded-lg w-[75%] bg-gray-200 dark:bg-slate-600 transition-all duration-300" type="text" name="cpass" id="cpass">
            </div>
            <div class="p-2 flex justify-center gap-5 items-center">
                <input class="p-2 rounded-lg w-[25%] bg-gray-200 dark:bg-slate-700" type="button" value="Update">
                <input class="p-2 rounded-lg w-[25%] bg-gray-200 dark:bg-slate-700" type="button" value="Cancel">
            </div>
        </div>
    </form>
<?php
}
?>