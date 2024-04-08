<?php
require('config.php');
include("./Reports/SoilReport.php");
include("./Mail-master/SendEmail.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    $labId = mysqli_real_escape_string($con, $_POST["labId"]); // Sanitize input

    // The randomly generated otp
    $verification_otp = random_int(100000, 999999);

    switch ($process) {
        case "dashboard":
            //code block
            include("../laboratory/Dashboard.php");
            break;
        case "notification":
            //code block;
            include("../laboratory/Notification.php");
            break;
        case "sample":
            //code block;
            $requestQuery = "SELECT r.request_id, r.farmer_id, r.request_date, r.lab_id, r.status, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM request_detail AS r 
            JOIN farmer_detail AS f ON r.farmer_id = f.farmer_id
            WHERE r.lab_id = '$labId' 
            ORDER BY request_date DESC;";

            $result = mysqli_query($con, $requestQuery);
            if ($result) {
                $soilrequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    $soilrequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }

            $sampleQuery = "SELECT s.sample_id, s.request_id, s.lab_id, s.farmer_id, s.collected_date, s.status, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM sample_detail As s
            JOIN farmer_detail As f ON s.farmer_id = f.farmer_id
            WHERE s.lab_id = '$labId';";
            $result = mysqli_query($con, $sampleQuery);
            if ($result) {
                $samplerequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    // print_r($row);
                    $samplerequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }
            include("../laboratory/Sample.php");
            break;
        case "reqfarmer":
            //code block
            $requestQuery = "SELECT r.request_id, r.farmer_id, r.request_date, r.lab_id, r.status, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
                FROM request_detail AS r 
                JOIN farmer_detail AS f ON r.farmer_id = f.farmer_id
                WHERE r.lab_id = '$labId' 
                ORDER BY request_date DESC;";

            $result = mysqli_query($con, $requestQuery);
            if ($result) {
                $soilrequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    $soilrequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }

            $sampleQuery = "SELECT s.sample_id, s.request_id, s.lab_id, s.farmer_id, s.collected_date, s.status, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM sample_detail As s
            JOIN farmer_detail As f ON s.farmer_id = f.farmer_id
            WHERE s.lab_id = '$labId';";

            $result = mysqli_query($con, $sampleQuery);
            if ($result) {
                $samplerequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    // print_r($row);
                    $samplerequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }
            include("../laboratory/farmer_req.php");
            break;
        case "report":
            //code block
            $requestQuery = "SELECT r.report_id, r.farmer_id, r.sample_id, s.collected_date, r.lab_id, r.status, r.report_image, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM report_detail As r
            JOIN farmer_detail As f 
            Join sample_detail As s
            ON r.farmer_id = f.farmer_id AND r.sample_id = s.sample_id
            WHERE r.lab_id = '$labId';";

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

            $requestQuery = "SELECT s.sample_id, s.request_id, s.lab_id, s.farmer_id, s.collected_date, s.status, f.first_name, f.middle_name, f.last_name, f.email, f.address, f.city, f.state
            FROM sample_detail As s
            JOIN farmer_detail As f ON s.farmer_id = f.farmer_id
            WHERE s.lab_id = '$labId';";

            $result = mysqli_query($con, $requestQuery);
            if ($result) {
                $samplerequestdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    // print_r($row);
                    $samplerequestdata[] = $row; // Populate array
                }
                mysqli_free_result($result); // Free result set
            } else {
                // Handle query execution error
                echo "Error executing query: " . mysqli_error($con);
            }
            include("../laboratory/Report.php");
            break;
        case "uploadReport":
            //code block
            $farmerid = mysqli_real_escape_string($con, $_POST["farmerid"]); // Sanitize input
            $farmername = mysqli_real_escape_string($con, $_POST["farmername"]); // Sanitize input
            $email = mysqli_real_escape_string($con, $_POST["email"]); // Sanitize input
            $sampleid = mysqli_real_escape_string($con, $_POST["sampleid"]); // Sanitize input
            $labId = mysqli_real_escape_string($con, $_POST["labId"]); // Sanitize input

            $sampleresult = mysqli_query($con, "SELECT * FROM `report_detail` WHERE `sample_id`= '$sampleid' and `farmer_id`= '$farmerid';");
            if (mysqli_num_rows($sampleresult) > 0) {
                echo "Soil Health Report Generated Already!";
            } else {
                $report_image = generateReport($farmername, $email, $sampleid, "987654321");

                $sql = "INSERT INTO `report_detail` (`farmer_id`, `sample_id`, `lab_id`, `status`, `report_image`) VALUES ('$farmerid', '$sampleid', '$labId', 'Generated','$report_image');";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    $subject = "Soil Health Report Generated!";
                    $msg1 = "\n\nThe Report of your soil is as below.We have also provided Fertilizer Recommendation for the soil.";
                    $msg2 = "\n\nWe extend our heartfelt gratitude to you for selecting Our Laboratory for conducting the soil test. It has been our honor to serve you in analyzing the soil samples you provided.";
                    $msg3 = "\n\nAt Laboratory, we understand the critical role soil health plays in agricultural productivity and sustainability. By choosing us, you've placed your trust in our expertise and commitment to delivering accurate and insightful results.";
                    $msg4 = "\n\nYour decision to collaborate with us reinforces our dedication to providing exceptional services to farmers like you who are at the forefront of driving positive change in agriculture. We are deeply thankful for the opportunity to contribute to your project's success and support your efforts in making informed decisions for your farm.";
                    $msg5 = "\n\nPlease do not hesitate to reach out to us if you have any further questions or require additional assistance. We look forward to continuing our partnership and serving you in the future.";

                    $body = "Hello, $farmername\n\nYour Report is Generated.\n\nCollect the same from your dashboard." . $msg1 . " " . $msg2 . " " . $msg3 . " " . $msg4 . " " . $msg5 . "\n\nThank you for your continued trust and support.!\n\nWith warm regards";

                    $send = sendMail($email, $subject, $body);
                    if ($send) {
                        echo "Soil Health Report Generated!";
                    } else {
                        echo "Failed to send email. Please try again later.";
                    }
                } else {
                    echo "Error: " . mysqli_error($con);
                }
            }
            break;
        case "profile":
            //code block
            $labQuery = "SELECT `lab_id`,`lab_name`, `email`, `contact`, `lab_add`, `city`, `state`,`labprofile`, `password` FROM `laboratory_detail` WHERE `lab_id`= '$labId';";
            $result = mysqli_query($con, $labQuery);
            if ($result && mysqli_num_rows($result) > 0) {
                $labdata = []; // Initialize array
                while ($row = mysqli_fetch_assoc($result)) {
                    $labdata[] = $row; // Populate array
                }
            } else {
                echo "No user found";
            }
            include("../laboratory/Profile.php");
            break;
        case "labProfile":
            //code block
            $file_name = $_FILES['profilePicture']['name'];
            $file_tmp = $_FILES['profilePicture']['tmp_name'];
            $uploadPath = '../img/laboratory_img/';

            $profilePicPath = $uploadPath . $file_name;

            if (move_uploaded_file($file_tmp, $uploadPath . $file_name)) {
                $sql = "UPDATE `laboratory_detail` SET labprofile='$profilePicPath' WHERE `lab_id`='$labId'";
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
            include("../laboratory/Setting.php");
            break;
        case "changeStatus":
            //code block
            $farmerId = mysqli_real_escape_string($con, $_POST["farmerId"]); // Sanitize input

            $sql = "UPDATE `request_detail` SET `status` = 'Approved' WHERE `farmer_id` = '$farmerId' and `lab_id`='$labId';";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "Request Accepted!";
            } else {
                echo "Error: " . mysqli_error($con);
            }
            break;
        case "verifyUser":
            //code block
            $requestid = mysqli_real_escape_string($con, $_POST["requestid"]); // Sanitize input
            $farmerid = mysqli_real_escape_string($con, $_POST["farmerid"]); // Sanitize input
            $farmeremail = mysqli_real_escape_string($con, $_POST["email"]); // Sanitize input
            $farmername = mysqli_real_escape_string($con, $_POST["farmername"]);

            $requestresult = mysqli_query($con, "SELECT * FROM `request_detail` WHERE `request_id`= '$requestid' and `farmer_id`= '$farmerid';");
            if (mysqli_num_rows($requestresult) > 0) {
                // while ($row = mysqli_fetch_assoc($sampleresult)) {
                // }
                $sampleresult = mysqli_query($con, "SELECT * FROM `sample_detail` WHERE `request_id`= '$requestid' and `farmer_id`= '$farmerid';");
                if (mysqli_num_rows($sampleresult) > 0) {
                    echo "Sample Collected Already!";
                } else {
                    $subject = "OTP verification";
                    $body = "Hello, $farmername\n Your otp is $verification_otp .";

                    $send = sendMail($farmeremail, $subject, $body);
                    if ($send) {
                        echo $verification_otp;
                    } else {
                        echo "Failed to send email. Please try again later.";
                    }
                }
            }
            break;
        case "submitSampleForm":
            //code block
            $farmeremail = mysqli_real_escape_string($con, $_POST["email"]); // Sanitize input
            $farmername = mysqli_real_escape_string($con, $_POST["farmername"]);
            $requestid = mysqli_real_escape_string($con, $_POST["requestid"]); // Sanitize input
            $farmerId = mysqli_real_escape_string($con, $_POST["farmerid"]); // Sanitize input
            $collectiondate = mysqli_real_escape_string($con, $_POST["collectiondate"]); // Sanitize input

            $sql = "INSERT INTO `sample_detail` (`request_id`, `lab_id`, `farmer_id`, `collected_date`, `status`) VALUES ('$requestid', '$labId', '$farmerId', '$collectiondate','Collected');";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $subject = "Sample Collection!";
                $body = "Hello, $farmername\n Your request for Sample Collection is done.\nThank you for your continued trust and support.!";

                $send = sendMail($farmeremail, $subject, $body);
                if ($send) {
                    echo "Sample Collected Successfully!";
                } else {
                    echo "Failed to send email. Please try again later.";
                }
            } else {
                echo "Error: " . mysqli_error($con);
            }
            break;
        default:
            //code block
            echo "Invalid Request";
            break;
    }
}
