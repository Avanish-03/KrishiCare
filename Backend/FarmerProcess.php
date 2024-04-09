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
    l.lab_name, l.email, l.lab_add, l.city, l.state, l.ownership,
    s.sample_id, s.request_id As sample_request_id, s.lab_id AS sample_lab_id, s.farmer_id, s.collected_date, s.status AS sample_status,
    q.report_id, q.farmer_id AS report_farmer_id, q.status AS report_status, q.report_image
    
    FROM request_detail AS r
    JOIN laboratory_detail AS l ON r.lab_id = l.lab_id
    JOIN Sample_detail AS s ON r.farmer_id = s.farmer_id
    JOIN report_detail AS q ON r.farmer_id = q.farmer_id
    WHERE r.farmer_id = $farmerId
    AND s.farmer_id = $farmerId
    AND q.farmer_id = $farmerId
    AND s.lab_id = r.lab_id
    AND r.request_id = s.request_id
    ORDER BY request_date DESC;";

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

    $labsqlquery = "SELECT `lab_id`,`lab_name`, `email`, `contact`, `lab_add`, `city`, `state`, `ownership` FROM `laboratory_detail` WHERE `status`='Approved';";
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
            $city = "surat";
            $state = "GJ";
            $api_key = "97852380926fcca385c9165c3d2f7a2d";
            $location = $city . ',' . $state . ',IN'; // Adding the state and country code
            // $forecastData = getWeatherForecastData($api_key, $location, $city, $state);
            // $forecastData = getWeatherForecastData($apiKey, $location, $city, $state);
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

function getWeatherForecastData($api_key, $location, $city, $state)
{
    $base_url = "http://api.openweathermap.org/data/2.5/weather";
    $params = [
        'q' => $location,
        'appid' => $api_key,
        'units' => 'metric', // Change to 'imperial' for Fahrenheit
    ];

    $url = $base_url . '?' . http_build_query($params);
    $weather_data = json_decode(file_get_contents($url), true);

    if ($weather_data && isset($weather_data['main'])) {
        $temperature = $weather_data['main']['temp'];
        $weather_condition = $weather_data['weather'][0]['description'];
        $wind_speed = $weather_data['wind']['speed'];
        $wind_direction = $weather_data['wind']['deg'];
        $humidity = $weather_data['main']['humidity'];
        // $cloudiness = $weather_data['clouds']['all'];
        $sunrise_time = date('H:i', $weather_data['sys']['sunrise']);
        $sunset_time = date('H:i', $weather_data['sys']['sunset']);
        $data_time = date('d-m-y', $weather_data['dt']);
        // $latitude = $weather_data['coord']['lat'];
        // $longitude = $weather_data['coord']['lon'];
    ?>
        <div class="h-fit py-4 bg-gray-100 dark:bg-slate-800 shadow-lg mb-4 px-8 rounded-lg">
            <?php echo "Weather in  : " . $city ?>
        </div>
        <div class="h-full min-w-fit grid gap-4 grid-cols-1 md:grid-cols-4">
            <div class="bg-gray-100 dark:bg-slate-800 hover:shadow-lg p-8 h-40 md:h-full rounded-lg">
                <div class="grid grid-cols-2 gap-4">
                    <div class="w-full flex flex-col justify-center">
                        <h1>Humidity</h1>
                        <h1 class="text-4xl h-16 flex justify-center items-center"><?php echo $humidity; ?> %</h1>
                        <p>Normal</p>
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="w-9 h-full rounded-full border border-gray-400 flex justify-center items-end">
                            <div class="bg-green-500 h-7 w-7 rounded-full my-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 dark:bg-slate-800 hover:shadow-lg h-40 md:h-full rounded-lg flex justify-center items-center">
                <div class="w-fit">
                    <h1>Wind Status</h1>
                    <h1 class="text-4xl py-3 w-full flex justify-center items-end"><?php echo $wind_speed; ?><span class="text-sm px-1 text-end">m/s</span></h1>
                    <p><?php echo $wind_direction; ?> °</p>
                </div>
            </div>
            <div class="bg-gray-100 dark:bg-slate-800 hover:shadow-lg p-8 h-40 md:h-full rounded-lg grid grid-cols-2 gap-4">
                <div class="w-full flex flex-col justify-center">
                    <h1>Temperature</h1>
                    <h1 class="text-4xl h-full w-full flex justify-center items-center"><?php echo $temperature; ?></h1>
                    <p><?php echo $weather_condition; ?></p>
                </div>
                <div class="flex justify-center items-center h-full">
                    <div class="w-9 h-full rounded-full border border-gray-400 flex justify-center items-center">
                        <div class="bg-green-500 h-7 w-7 rounded-full my-1"></div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 dark:bg-slate-800 hover:shadow-lg h-40 md:h-full rounded-lg flex justify-center items-center">
                <div class="w-fit">
                    <h1>Sunrise & Sunset</h1>
                    <h1 class="text-2xl py-1 w-full flex ml-8"><span><img src="../img/sun-rise.png" class="h-7 pr-2" alt=""></span><?php echo "05:43" ; ?> </h1>
                    <h1 class="text-2xl py-1 w-full flex ml-8"><span><img src="../img/sun-set.png" class="h-7 pr-2" alt=""></span><?php echo "06:54"; ?> </h1>
                    <p><?php echo $data_time; ?></p>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo "<script>
                Swal.fire({
                    title: 'Oops!',
                    text: 'Failed to retrieve weather data!',
                    icon: 'error'
                  });
                </script>";
    }
}

// Function to get weather forecast data from OpenWeatherMap API
// function getWeatherForecastData($city, $state, $country, $apiKey)
// {
// $city = urlencode($city);
// $url = "http://api.openweathermap.org/data/2.5/forecast?q=$city,$state,$country&appid=$apiKey&cnt=1"; // Adjusted URL to get 3-day forecast data

// // Initialize cURL
// $ch = curl_init();

// // Set cURL options
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Execute cURL
// $response = curl_exec($ch);

// // Check for errors
// if (curl_errno($ch)) {
// echo 'Error: ' . curl_error($ch);
// return null;
// }

// // Close cURL
// curl_close($ch);

// // Decode JSON response
// $data = json_decode($response, true);

// return $data;
// }