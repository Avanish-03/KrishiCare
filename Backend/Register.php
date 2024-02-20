<?php
session_start();
require('config.php');

// Registeration of both farmer and laboratorys too ------------------------
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
            echo "already exist !";
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
            echo "already exist !";
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

    } else if ($process == "validateUser") {

        $email = $_POST['email'];
        $pwd = $_POST['password'];

        $result = mysqli_query($con, "SELECT * FROM `farmer_detail` WHERE email= '$email' and password = '$pwd';");
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["loggedin"] = "loggedin";
            echo "1";
        } else {
            echo "not valid";
        }
    }
}
