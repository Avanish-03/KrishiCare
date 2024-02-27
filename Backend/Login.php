<?php
session_start();
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];

    if ($process == "adminLogin") {

        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo $email . $password;

        $result = mysqli_query($con, "SELECT * FROM `admin` WHERE name= '$email' and password = '$password';");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $adminName = $row["name"];
                // echo $adminName;
                echo "1";
                // $_SESSION[$user] = $id;
            }
        } else {
            echo "0";
        }
        // $login = mysqli_query($con, "SELECT * FROM `admin` WHERE name = '$admin' AND password = '$password' ");

        // $row = mysqli_fetch_assoc($login);

        // if (mysqli_num_rows($login) > 0) {
        //     if ($password == $row["password"]) {
        //         $_SESSION['adminlogin'] = true;
        //         $_SESSION["admin"] = $row["name"];
        //         header("location:../dist/Admindashboard.php");
        //     } else {
        //         echo "Invalid !";
        //     }
        // } else {
        //     echo "Not Resgistered !";
        // }
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
                echo "1";
                $_SESSION[$user] = $id;
            }
        } else {
            echo "0";
        }
    }
}
