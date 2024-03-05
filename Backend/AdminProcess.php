<?php
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
        case "messages":
            //code block
            include("../admin/msg.php");
            break;
        case "profile":
            //code block
            include("../admin/profile.php");
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
