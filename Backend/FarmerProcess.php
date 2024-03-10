<?php
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $process = $_POST["process"];
    $id = $_POST["id"];
    $data = array();

    $farmersqlquery = "SELECT `farmer_id`,`first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state` FROM `farmer_detail` WHERE `farmer_id`= '$id';";

    $result = mysqli_query($con, $farmersqlquery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["farmer_id"] . " - Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
            $farmerdata[] = $row;
        }
    } else {
        echo "No user found";
    }

    $labsqlquery = "SELECT `lab_id`,`lab_name`, `email`, `contact`, `lab_add`, `city`, `state`, `ownership` FROM `laboratory_detail`;";

    $result = mysqli_query($con, $labsqlquery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo "id: " . $row["farmer_id"] . " - Name: " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["last_name"] . "<br>";
            $labdata[] = $row;
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


            // Function to get weather forecast data from OpenWeatherMap API
            function getWeatherForecastData($city, $state, $country, $apiKey)
            {
                $city = urlencode($city);
                $url = "http://api.openweathermap.org/data/2.5/forecast?q=$city,$state,$country&appid=$apiKey";

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
