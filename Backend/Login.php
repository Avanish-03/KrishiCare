<?php
session_start();
require('config.php');
include("./Mail-master/SendEmail.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];

    if ($process == "varifyAdmin") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($con, "SELECT * FROM `admin` WHERE name= '$email' and password = '$password';");
        if (mysqli_num_rows($result) > 0) {
            
            $verification_otp = random_int(100000, 999999);

            $subject = "OTP verification";
            $body = "Hello, $email \n Your otp is $verification_otp .";

            $send = sendMail($email, $subject, $body);
            if ($send) {
                echo $verification_otp;
            } else {
                echo "Failed to send email. Please try again later.";
            }
        }
    } else if ($process == "adminLogin") {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $_POST['user'];

        $result = mysqli_query($con, "SELECT * FROM `admin` WHERE name= '$email' and password = '$password';");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $adminName = $row["name"];

                $_SESSION[$user] = $adminName;
                echo "1";
            }
        } else {
            echo "0";
        }
    } else if ($process == "userLogin") {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $_POST['user'];

        $tableName = "";
        $columnName = "";
        if ($user == "farmer") {
            $tableName = "farmer_detail";
            $columnName = "farmer_id";
        } else if ($user == "laboratory") {
            $tableName = "laboratory_detail";
            $columnName = "lab_id";
        } else {
            echo "Invalid User";
        }

        $result = mysqli_query($con, "SELECT * FROM `$tableName` WHERE email= '$email' and password = '$password';");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row[$columnName];
                $_SESSION[$user] = $id;
                echo "1";
            }
        } else {
            echo "0";
        }
    }
}
