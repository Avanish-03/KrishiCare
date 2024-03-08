<?php include('Header.php');

$apiKey = '97852380926fcca385c9165c3d2f7a2d';
$city = 'Surat';
$countryCode = 'IN';

// API endpoint for 7-day forecast
$apiEndpoint = "http://api.openweathermap.org/data/2.5/forecast";
$apiUrl = "$apiEndpoint?q=$city,$countryCode&appid=$apiKey";

// Make the API request
$response = file_get_contents($apiUrl);

// Check if the request was successful
if ($response === false) {
    die('Failed to retrieve weather data.');
}

// Decode the JSON response
$data = json_decode($response, true);

// Check if the response contains valid data
if ($data === null || !isset($data['list'])) {
    die('Invalid data received from the API.');
}

// Extract and display the 7-day forecast
$forecast = $data['list'];
?>

<div class="min-h-fit bg-gray-100 p-0 sm:p-5 bg-cover bg-no-repeat bg-center" style="background-image: url('../img/weather-img-up.jpg');">
    <?php

    if (isset($_POST["weatherSearchBtn"])) {
        $apiKey = '97852380926fcca385c9165c3d2f7a2d';
        $city = $_POST["city"];
        $countryCode = 'IN';

        // API endpoint for 7-day forecast
        $apiEndpoint = "http://api.openweathermap.org/data/2.5/forecast";
        $apiUrl = "$apiEndpoint?q=$city,$countryCode&appid=$apiKey";

        // Make the API request
        $response = file_get_contents($apiUrl);

        // Check if the request was successful
        if ($response === false) {
            die('Failed to retrieve weather data.');
        }

        // Decode the JSON response
        $data = json_decode($response, true);

        // Check if the response contains valid data
        if ($data === null || !isset($data['list'])) {
            die('Invalid data received from the API.');
        }

        // Extract and display the 7-day forecast
        $forecast = $data['list'];
    }
    ?>

    <div class="mx-auto max-w-md px-8 py-3 bg-white border-0 shadow-lg sm:rounded-3xl">
        <h1 class="text-2xl font-bold mb-2">Enter city to get weather detail</h1>
        <form method="post" action="">
            <div class="relative z-0 w-full mb-1">
                <input type="text" name="city" placeholder="Enter city" required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="city" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500"></label>
            </div>
            <button id="button" name="weatherSearchBtn" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-500 hover:bg-blue-600 hover:shadow-lg focus:outline-none">
                Search
            </button>
        </form>
    </div>
</div>


<section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-wrap w-full mb-3">
            <div class="lg:w-1/2 w-full lg:mb-0">
                <?php echo '<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> 7-Day Weather Forecast for ' . $city . ', India</h1>'; ?>
                <div class="h-1 ml-96 w-20 bg-indigo-500 rounded"></div>
            </div>
        </div>
        <div class="flex flex-wrap -m-4">

            <?php

            foreach ($forecast as $entry) {
                $timestamp = $entry['dt'];
                $date = date('d-m-y', $timestamp);
                $time = date('H:i', $timestamp);
                $temperature = $entry['main']['temp'];
                $description = $entry['weather'][0]['description'];

            ?>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <!-- <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://images.pexels.com/photos/1162251/pexels-photo-1162251.jpeg?auto=compress&cs=tinysrgb&w=600" alt="content"> -->
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Time : <?php echo $time ?></h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font">Date : <?php echo $date ?></h2>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Temperature : <?php echo $temperature ?>°C</h2>
                        <p class="leading-relaxed text-base"><?php echo $description ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
</div>


<?php include('Footer.php'); ?>