<?php
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    $id = $_POST["id"];
    $data = array();

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
        default:
            //code block
            echo "Invalid Request";
            break;
    }
}
