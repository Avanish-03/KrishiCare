<?php
session_start();
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];

    if ($process == "adminLogin") {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $_POST['user'];
        // echo $user;
        $result = mysqli_query($con, "SELECT * FROM `admin` WHERE name= '$email' and password = '$password';");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $adminName = $row["name"];
                $_SESSION[$user] = $adminName;
                echo "1";
                // echo $_SESSION["$user"];
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
                // echo $_SESSION["$user"];
            }
        } else {
            echo "0";
        }
    }
}
