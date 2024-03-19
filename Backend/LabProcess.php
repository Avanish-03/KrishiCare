<?php
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    // $id = $_POST["id"];
    $data = array();

    $requestQuery = "SELECT r.request_id, r.farmer_id, r.request_date, r.lab_id, r.status, f.first_name, f.middle_name, f.last_name, f.email, f.address ,f.city, f.state
    FROM request_detail AS r 
    JOIN farmer_detail AS f ON r.farmer_id = f.farmer_id";

    $result = mysqli_query($con, $requestQuery);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (!($row == null)) {
                    $soilrequestdata[] = $row;
                } else {
                    $soilrequestdata = null;
                }
            }
        } else {
            $soilrequestdata = null;
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        // Handle query execution error
        echo "Error executing query: " . mysqli_error($con);
    }

    switch ($process) {
        case "dashboard":
            //code block
            // return $data;
            include("../laboratory/Dashboard.php");
            break;
        case "notification":
            //code block;
            include("../laboratory/Notification.php");
            break;
        case "report":
            //code block
            include("../laboratory/Report.php");
            break;
        case "weather":
            //code block
            include("../laboratory/Weather.php");
            break;
        case "profile":
            //code block
            include("../laboratory/Profile.php");
            break;
        case "setting":
            //code block
            include("../laboratory/Setting.php");
            break;
        case "changeStatus":
            //code block
            $farmerId = $_POST["farmerId"];

            $sql = "UPDATE `request_detail` SET `status` = 'Approved' WHERE `farmer_id` = '$farmerId';";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "Request Accepted!";
            } else {
                echo "Error: " . mysqli_error($con);
            }

            // include("../laboratory/Setting.php");
            break;
        default:
            //code block
            echo "Invalid Request";
            break;
    }
}
