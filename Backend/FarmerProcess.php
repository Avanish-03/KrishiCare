<?php
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    $id = $_POST["id"];
    $data = array(); 

    $sql = "SELECT `farmer_id`,`first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state` FROM `farmer_detail` WHERE `farmer_id`= '$id';";

    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["farmer_id"] . " - Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
            $data[] = $row;
        }
    } else {
        echo "No user found";
    }
    switch ($process) {
        case "dashboard":
            //code block
            // return $data;
            include("../farmer/Dashboard.php");
            break;
        case "notification":
            //code block;
            include("../farmer/Notification.php");
            break;
        case "soil":
            //code block
            include("../farmer/Soil.php");
            break;
        case "crop":
            //code block
            include("../farmer/Crop.php");
            break;
        case "technology":
            //code block
            include("../farmer/Techno.php");
            break;
        case "weather":
            //code block
            include("../farmer/Weather.php");
            break;
        case "profile":
            //code block
            include("../farmer/Profile.php");
            break;
        case "setting":
            //code block
            include("../farmer/Setting.php");
            break;
        default:
            //code block
            echo "Invalid Request";
            break;
    }
}
