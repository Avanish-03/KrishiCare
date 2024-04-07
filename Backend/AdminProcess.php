<?php
session_start();
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
            $adminQuery = "SELECT `adminprofile`,`name`, `password` FROM `admin` WHERE `admin_id`= " . $_SESSION['admin'] . ";";
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
                $sql = "UPDATE `admin` SET adminprofile='$profilePicPath' WHERE `admin_id`=" . $_SESSION['admin'] . ";";
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
        case "addTask":
            //code block
            $task = $_POST['task'];
            $userid = $_POST['userid'];
            $sql = "INSERT INTO task_detail (task,user_id) VALUES ('$task','$userid')";
            $result = mysqli_query($con, $sql);
            if ($result == 1) {
                echo "Task Added Successfully!";
            } else {
                echo "Error while adding Task!";
            }
            break;
        case "deleteTask":
            //code block
            $taskid = $_POST['taskid'];
            $userid = $_POST['userid'];
            // echo $taskid . " " . $userid;
            $sql = "DELETE FROM task_detail WHERE `task_detail`.`task_id` = '$taskid' AND `task_detail`.`user_id` = '$userid';";
            $result = mysqli_query($con, $sql);
            if ($result == 1) {
                echo "Task Deleted Successfully!";
            } else {
                echo "Error while deleting Task!";
            }
            break;
        default:
            //code block
            $process;
            echo "Invalid Request";
            break;
    }
}
