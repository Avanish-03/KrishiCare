<?php
session_start();
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];

    if ($process == "registerFarmer") {

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pwd = $_POST['password'];

        $result = mysqli_query($con, "SELECT * FROM `farmer_detail` WHERE email= '$email' or contact_number = '$contact'; ");
        if (mysqli_num_rows($result) > 0) {
            echo "Already exist !";
        } else {
            $sql = "INSERT INTO `farmer_detail` (`farmer_id`, `first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state`, `password`) VALUES (NULL, '$firstname', '$middlename', '$lastname', '$email', '$contact', '$address', '$city', '$state', '$pwd');";
            $result = mysqli_query($con, $sql);
            echo $result;
        }
    } else if ($process == "registerlab") {

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $ownership = $_POST['ownership'];
        $pwd = $_POST['password'];

        $result = mysqli_query($con, "SELECT * FROM `laboratory_detail` WHERE email= '$email' or contact = '$contact' ");
        if (mysqli_num_rows($result) > 0) {
            echo "Already exist !";
        } else {
            $sql = "INSERT INTO `laboratory_detail` (`lab_id`, `lab_name`, `email`, `contact`, `lab_add`, `city`, `state`, `password`, `ownership`) VALUES (NULL, '$fullname', '$email','$contact','$address','$city','$state','$pwd','$ownership');";
            $result = mysqli_query($con, $sql);
            echo $result;
        }
    } else if ($process == "registerContact") {

        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `contact_detail` (`contact_id`, `email`, `message`) VALUES (NULL, '$email', '$message');";
        $result = mysqli_query($con, $sql);
        echo $result;
    } else if ($process == "updateFarmer") {

        $farmerid = $_POST["farmerid"];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];

        $result = mysqli_query($con, "SELECT * FROM `farmer_detail` WHERE email= '$email' or contact_number = '$contact'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `farmer_detail` SET `first_name`='$firstname', `middle_name`='$middlename', `last_name`='$lastname', `email`='$email', `contact_number`='$contact', `address`='$address', `city`='$city', `state`='$state' WHERE `farmer_id`='$farmerid';";
            $result = mysqli_query($con, $sql);
            echo $result;
        } else {
            echo "Invalid User !";
        }
    } elseif ($process == "updateFarmerPassword") {

        $farmerid = $_POST["farmerid"];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['password'];

        $result = mysqli_query($con, "SELECT * FROM `farmer_detail` WHERE `farmer_id`= '$farmerid' and `password` = '$oldpass'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `farmer_detail` SET `password`='$newpass' WHERE `farmer_id`='$farmerid';";
            $result = mysqli_query($con, $sql);
            echo $result;
        } else {
            echo "Invalid User !";
        }
    }
}
