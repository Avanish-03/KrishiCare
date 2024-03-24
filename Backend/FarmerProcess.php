<?php
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    $farmerId = $_POST["id"];

    $farmersqlquery = "SELECT `farmer_id`,`first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state`,`farmerprofile` FROM `farmer_detail` WHERE `farmer_id`= '$farmerId';";
    $result = mysqli_query($con, $farmersqlquery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $farmerdata[] = $row;
        }
    } else {
        $farmerdata[] = null;
    }

    $requestQuery = "SELECT r.request_id, r.farmer_id, r.request_date, r.lab_id, r.status AS request_status,
    l.lab_name, l.email, l.lab_add, l.city, l.state, l.ownership, q.report_id, 
    s.sample_id, s.request_id, s.lab_id AS sample_lab_id, s.farmer_id AS sample_farmer_id, s.collected_date AS sample_collected_date, s.status AS sample_status,
    q.farmer_id AS report_farmer_id, q.status AS report_status, q.report_image
FROM request_detail AS r 
JOIN laboratory_detail AS l ON r.lab_id = l.lab_id
LEFT JOIN Sample_detail AS s ON r.farmer_id = s.farmer_id
LEFT JOIN report_detail AS q ON r.farmer_id = q.farmer_id
WHERE r.farmer_id = $farmerId
OR s.farmer_id = $farmerId
OR q.farmer_id = $farmerId
ORDER BY request_date DESC";

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

    $labsqlquery = "SELECT `lab_id`,`lab_name`, `email`, `contact`, `lab_add`, `city`, `state`, `ownership` FROM `laboratory_detail`;";
    $result = mysqli_query($con, $labsqlquery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["farmer_id"] . " - Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
            $labdata[] = $row;
        }
    } else {
        $labdata = null;
        // echo "No user found";
    }

    switch ($process) {
        case "dashboard":
            //code block
            include("../farmer/Dashboard.php");
            break;
        case "notification":
            //code block;
            $samplesqlquery = "SELECT `sample_id`, `request_id`, `lab_id`, `farmer_id`, `collected_date`,`status` FROM `sample_detail` where `farmer_id`='$farmerId';";
            $sampleresult = mysqli_query($con, $samplesqlquery);
            if ($sampleresult->num_rows > 0) {
                while ($row = $sampleresult->fetch_assoc()) {
                    $sampledata[] = $row;
                }
            } else {
                $sampledata = null;
            }
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
            // Function to get weather forecast data from OpenWeatherMap API
            function getWeatherForecastData($city, $state, $country, $apiKey)
            {
                $city = urlencode($city);
                $url = "http://api.openweathermap.org/data/2.5/forecast?q=$city,$state,$country&appid=$apiKey&cnt=3"; // Adjusted URL to get 3-day forecast data

                // Initialize cURL
                $ch = curl_init();

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Execute cURL
                $response = curl_exec($ch);

                // Check for errors
                if (curl_errno($ch)) {
                    echo 'Error: ' . curl_error($ch);
                    return null;
                }

                // Close cURL
                curl_close($ch);

                // Decode JSON response
                $data = json_decode($response, true);

                return $data;
            }

            // Your city, state, country, and API key
            $city = "Surat";
            $state = "Gujarat";
            $country = "IN";
            $apiKey = "97852380926fcca385c9165c3d2f7a2d";

            // Get weather forecast data
            $forecastData = getWeatherForecastData($city, $state, $country, $apiKey);

            // Check if data is available
            if ($forecastData) {
                // Output forecast information
?>
                <!-- <div class="h-full w-fit p-8">
                    <?php

                    // echo "City: " . $forecastData['city']['name'] . "<br>";
                    // foreach ($forecastData['list'] as $forecast) {
                    //     $timestamp = $forecast['dt'];
                    //     $dateTime = date('Y-m-d H:i:s', $timestamp);
                    //     $temperature = $forecast['main']['temp'];
                    //     $description = $forecast['weather'][0]['description'];

                    //     echo "DateTime: $dateTime<br>";
                    //     echo "Temperature: " . round($temperature - 273.15, 2) . "°C<br>";
                    //     echo "Description: $description<br>";
                    //     echo "-----------------------<br>";
                    // }
                    ?>
                </div> -->

<?php
            } else {
                echo "Failed to retrieve weather forecast data.";
            }

            //code block
            include("../farmer/Weather.php");
            break;
        case "report":
            //code block
            include("../farmer/Report.php");
            break;
        case "profile":
            //code block
            include("../farmer/Profile.php");
            break;
        case "farmerProfile":
            //code block
            $file_name = $_FILES['profilePicture']['name'];
            $file_tmp = $_FILES['profilePicture']['tmp_name'];
            $uploadPath = '../img/farmer_img/';

            $profilePicPath = $uploadPath . $file_name;

            if (move_uploaded_file($file_tmp, $uploadPath . $file_name)) {
                $sql = "UPDATE `farmer_detail` SET farmerprofile='$profilePicPath' WHERE `farmer_id`= $farmerId";
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
            include("../farmer/Setting.php");
            break;
        case "soilrequest":
            //code block
            $farmerid = $_POST["id"];
            $requestdate = $_POST["requestdate"];
            $labid = $_POST["labid"];

            $sql = "INSERT INTO `request_detail` (`farmer_id`, `request_date`, `lab_id`) VALUES ($farmerid, '$requestdate', '$labid');";
            $result = mysqli_query($con, $sql);
            echo $result;
            break;
        case "updateProfile":
            //code block
            // echo $process;
            include("../farmer/FarmerMenus.php");
            break;
        case "updatePassword":
            //code block
            // echo $process;
            include("../farmer/FarmerMenus.php");
            break;
        default:
            //code block
            echo "Invalid Request";
            break;
    }
}
