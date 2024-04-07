<?php
session_start();
require('config.php');
include("./Mail-master/SendEmail.php");

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

            $subject = "Reset Password!";
            $body = "Dear " . $firstname . " " . $middlename . " " . $lastname . " , You Are Successfully Registered With Us. \nStay Connected Through Your dashboard!";

            if ($result) {
                sendMail($email, $subject, $body);
            }
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

            $subject = "Reset Password!";
            $body = "Dear " . $fullname . " , You Are Successfully Registered With Us. \nStay Connected Through Your dashboard!";

            if ($result) {
                sendMail($email, $subject, $body);
            }
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
    } elseif ($process == "updateLabPassword") {

        $labid = $_POST["labid"];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['password'];

        $result = mysqli_query($con, "SELECT * FROM `laboratory_detail` WHERE `lab_id`= '$labid' and `password` = '$oldpass'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `laboratory_detail` SET `password`='$newpass' WHERE `lab_id`='$labid';";
            $result = mysqli_query($con, $sql);
            echo $result;
        } else {
            echo "Invalid User !";
        }
    } elseif ($process == "updateAdminPassword") {

        $adminid = $_POST["adminid"];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['password'];
        // echo $adminid . " " . $oldpass . " " . $newpass;

        $result = mysqli_query($con, "SELECT * FROM `admin` WHERE `admin_id`= '$adminid' and `password` = '$oldpass'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `admin` SET `password`='$newpass' WHERE `admin_id`='$adminid';";
            $result = mysqli_query($con, $sql);
            echo $result;
        } else {
            echo "Invalid User !";
        }
    } elseif ($process == "adminPassword") {

        $email = $_POST["email"];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];

        $subject = "Reset Password!";
        $body = "Dear $email, Your Password has been changed!";

        $result = mysqli_query($con, "SELECT * FROM `admin` WHERE `name`= '$email' and `password` = '$oldpass'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `admin` SET `password`='$newpass' WHERE `name`='$email' and `password` = '$oldpass';";
            $result = mysqli_query($con, $sql);
            echo $result;
            if ($result) {
                sendMail($email, $subject, $body);
            }
        } else {
            echo "Invalid User!";
        }
    } elseif ($process == "labPassword") {

        $email = $_POST["email"];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];

        $subject = "Reset Password!";
        $body = "Dear $email, Your Password has been changed!";

        $result = mysqli_query($con, "SELECT * FROM `laboratory_detail` WHERE `email`= '$email' and `password` = '$oldpass'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `laboratory_detail` SET `password`='$newpass' WHERE `email`='$email' and `password` = '$oldpass';";
            $result = mysqli_query($con, $sql);
            echo $result;
            if ($result) {
                sendMail($email, $subject, $body);
            }
        } else {
            echo "Invalid User!";
        }
    } elseif ($process == "farmerPassword") {

        $email = $_POST["email"];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];

        $subject = "Reset Password!";
        $body = "Dear $email, Your Password has been changed!";

        $result = mysqli_query($con, "SELECT * FROM `farmer_detail` WHERE `email`= '$email' and `password` = '$oldpass'; ");
        if (mysqli_num_rows($result) > 0) {
            $sql = "UPDATE `farmer_detail` SET `password`='$newpass' WHERE `email`='$email' and `password` = '$oldpass';";
            $result = mysqli_query($con, $sql);
            echo $result;
            if ($result) {
                sendMail($email, $subject, $body);
            }
        } else {
            echo "Invalid User!";
        }
    } elseif ($process == "approveLab") {

        $labid = $_POST["labid"];
        $email = $_POST["email"];

        $subject = "Account Creation!";
        $body = "Dear $email, Your Request For Account creation has been accepted!";

        $result = mysqli_query($con, "SELECT * FROM `laboratory_detail` WHERE `lab_id`= '$labid' AND `email`= '$email' AND `status`='Approved';");
        if (mysqli_num_rows($result) > 0) {
            echo "Invalid User!";
        } else {
            $sql = "UPDATE `laboratory_detail` SET `status`='Approved' WHERE `lab_id`='$labid' AND `email`= '$email';";
            $result = mysqli_query($con, $sql);
            echo $result;
            if ($result) {
                sendMail($email, $subject, $body);
            }
        }
    }
}
