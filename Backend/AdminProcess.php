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
            $requestQuery = "SELECT r.report_id, r.farmer_id, r.sample_id, s.collected_date, r.lab_id, r.status, r.report_image, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM report_detail As r
            JOIN farmer_detail As f 
            Join sample_detail As s
            ON r.farmer_id = f.farmer_id AND r.sample_id = s.sample_id
            WHERE r.lab_id = s.lab_id;";

            $result = mysqli_query($con, $requestQuery);
            if ($result) {
                $reportrequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    // print_r($row);
                    $reportrequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }
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
