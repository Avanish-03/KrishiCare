<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    switch ($process) {
        case "dashboard":
            //code block
            include("../admin/dashboard.php");
            break;
        case "farmer":
            //code block;
            include("../admin/farmer.php");
            break;
        case "laboratory":
            //code block
            include("../admin/lab.php");
            break;
        case "report":
            //code block
            include("../admin/report.php");
            break;
        case "notification":
            //code block
            include("../admin/Notification.php");
            break;
        case "messages":
            //code block
            include("../admin/msg.php");
            break;
        case "profile":
            //code block
            $adminQuery = "SELECT `adminprofile`,`name`, `password` FROM `admin` WHERE `name`= 'admin@gmail.com';";
            $result = mysqli_query($con, $adminQuery);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $admindata[] = $row;
                }
            } else {
                echo "No user found";
            }
            include("../admin/profile.php");
            break;
        case "changeProfile":
            //code block
            $file_name = $_FILES['profilePicture']['name'];
            $file_tmp = $_FILES['profilePicture']['tmp_name'];
            $uploadPath = '../img/admin_img/';

            $profilePicPath = $uploadPath . $file_name;

            if (move_uploaded_file($file_tmp, $uploadPath . $file_name)) {
                $sql = "UPDATE `admin` SET adminprofile='$profilePicPath' WHERE name='admin@gmail.com' AND password='admin'";
                if (mysqli_query($con, $sql)) {
                    echo "Successfully Uploaded";
                } else {
                    echo "Error while uploading";
                }
            } else {
                echo "Error uploading file. Check if the directory has the correct permissions";
            }
            break;
        case "setting":
            //code block
            include("../admin/setting.php");
            break;
        default:
            //code block
            echo "Invalid Request";
            break;
    }
}
