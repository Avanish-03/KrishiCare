<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    switch ($process) {
        case "dashboard":
            //code block
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
