<!-- Weather Section -->
<section class="w-full h-full mx-auto my-8 p-8 rounded-md">
    <h1 class="text-3xl font-bold mb-4 text-black dark:text-gray-300">Weather</h1>
    <!-- information Section -->
    <div class="h-48 w-full bg-gray-200 rounded-lg dark:bg-slate-700 flex items-center">
        <div class="px-8 w-fit h-full flex justify-start">
            <img class="h-full w-full" src="../img/Weather-amico.png" alt="">
        </div>
        <div class="w-[50%] h-full flex items-center">
            <h1 class="dark:text-gray-100 text-4xl font-bold">Weather Detail</h1>
        </div>
    </div>
    <!-- Weather Data -->
    <!-- <div class="h-fit w-full my-8 bg-gray-200 rounded-lg dark:bg-slate-700">
        <?php
        ?>
        <div class="min-h-fit h-[60%] rounded-lg flex justify-center items-center bg-gray-200 dark:bg-slate-700 p-0 sm:p-5">
            <?php

            ?>
            <div class="mx-auto h-fit py-8 max-w-md px-8 bg-white dark:bg-slate-800 dark:text-gray-300 border-0 shadow-lg rounded-lg">
                <h1 class="text-2xl font-bold mb-2">Enter city to get weather detail</h1>
                <form method="post" class="h-fit">
                    <div class="relative z-0 w-full mb-1">
                        <input type="text" name="city" placeholder="Enter city" required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <label for="city" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500"></label>
                    </div>
                    <button id="button" name="weatherSearchBtn" type="submit" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-green-500 hover:bg-green-600 hover:shadow-lg focus:outline-none">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div> -->
    <section class="text-gray-600 dark:text-gray-300 my-8 bg-gray-200 rounded-lg dark:bg-slate-700">
        <div class="h-7 my-4 px-5 py-10">
            <form action="">
                <div class="flex justify-end ">
                    <div>
                        <h1 class="text-xl font-bold p-2">Select Your State For weather Details </h1>
                        <select type="text" name="city" id="city"
                            class="city py-2 h-10 border m-1 rounded px-4 w-full bg-gray-50 dark:bg-gray-700">
                        </select>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div>
                        <h1 class="text-xl font-bold p-2">Select Your City For Weather Detail</h1>
                        <select type="text" name="state" id="state"
                            class="state py-2 h-10 border m-1 rounded px-4 w-full bg-gray-50 dark:bg-gray-700">
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="container px-5 py-10 mx-auto mt-10">
            <div class="flex flex-wrap w-full mb-3">
                <div class="lg:w-1/2 w-full lg:mb-0">
                    <?php echo '<h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 dark:text-gray-50 text-gray-900"> 7-Day Weather Forecast for ' . $city . ', India</h1>'; ?>
                    <div class="h-1 ml-96 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="h-full w-fit p-8">
                </div>
            </div>
            <div class="w-full p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                // echo "City: " . $forecastData['city']['name'] . "<br>";
                if ($forecastData && isset($forecastData['list'][0])) {
                    $forecast = $forecastData['list'][0];
                    // $timestamp = $forecast['dt'];
                    // $dateTime = date('Y-m-d h:i', $timestamp);
                    // $temperature = $forecast['main']['temp'];
                    // $description = $forecast['weather'][0]['description'];
                    $forecast = $forecastData['list'][0];

                    // Extract forecasted data
                    $temperature = $forecast['main']['temp'];
                    $weather_condition = $forecast['weather'][0]['description'];
                    $wind_speed = $forecast['wind']['speed'];
                    $wind_direction = $forecast['wind']['deg'];
                    $humidity = $forecast['main']['humidity'];
                    $pressure = $forecast['main']['pressure'];
                    $cloudiness = $forecast['clouds']['all'];
                    $rainfall = isset($forecast['rain']) ? $forecast['rain']['3h'] : 0; // Rainfall in last 3 hours
                    $snowfall = isset($forecast['snow']) ? $forecast['snow']['3h'] : 0; // Snowfall in last 3 hours
                    $timestamp = $forecast['dt'];

                    // Output forecasted data
                    echo "Temperature: " . $temperature . "°C<br>";
                    echo "Weather Condition: " . $weather_condition . "<br>";
                    echo "Wind Speed: " . $wind_speed . " m/s<br>";
                    echo "Wind Direction: " . $wind_direction . "°<br>";
                    echo "Humidity: " . $humidity . "%<br>";
                    echo "Pressure: " . $pressure . " hPa<br>";
                    echo "Cloudiness: " . $cloudiness . "%<br>";
                    echo "Rainfall: " . $rainfall . " mm<br>";
                    echo "Snowfall: " . $snowfall . " mm<br>";
                    echo "Timestamp: " . date('Y-m-d H:i:s', $timestamp);
                ?>
                    <div class="h-48 w-full rounded-xl text-black p-8 bg-white grid grid-cols-2 gap-4">
                        <div>
                            <h1>Humidity</h1>
                            <h1 class="text-4xl h-20 flex justify-center items-center"><?php echo $humidity;?>%</h1>
                            <p>Normal</p>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="w-9 h-full rounded-full border-2 border-gray-400 flex justify-center items-end">
                                <div class="bg-green-500 h-7 w-7 rounded-full my-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="h-48 w-full rounded-xl text-black p-8 bg-white ">
                        <div class="w-full">
                            <h1>Wind Status</h1>
                            <h1 class="text-4xl h-20 w-full flex justify-center items-center">7.70<span
                                    class="text-sm px-3 text-end">km/h</span></h1>
                            <p>WSW</p>
                        </div>
                    </div>
                    <div class="h-48 w-full rounded-xl text-black p-8 bg-white grid grid-cols-2 gap-4">
                        <div class="w-full">
                            <h1>Air Quality</h1>
                            <h1 class="text-4xl h-20 w-full flex justify-center items-center">105</h1>
                            <p>Unhealthy</p>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="w-9 h-full rounded-full border-2 border-gray-400 flex justify-center items-center">
                                <div class="bg-green-500 h-7 w-7 rounded-full my-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="h-48 w-full rounded-xl text-black p-8 bg-white ">
                        <div class="w-full ">
                            <h1>Sunrise & Sunset</h1>
                            <h1 class="text-2xl py-1 w-full flex ml-8"><span><img src="../img/sun-rise.png" class="h-7 pr-2"
                                        alt=""></span>05:55 </h1>
                            <h1 class="text-2xl py-1 w-full flex ml-8"><span><img src="../img/sun-set.png" class="h-7 pr-2"
                                        alt=""></span>06:45 </h1>
                            <p>WSW</p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        </div>
    </section>
    <!-- <div>
        <div id="weatherapi-weather-widget-1"></div>
        <script type='text/javascript' src='https://www.weatherapi.com/weather/widget.ashx?loc=1134620&wid=1&tu=2&div=weatherapi-weather-widget-1' async></script>
        <noscript>
            <a href="https://www.weatherapi.com/weather/q/thana-1134620" alt="Hour by hour Thana weather">10 day hour by hour Thana weather</a>
        </noscript>
    </div> -->
    <!-- <div class="bg-gray-300">

        <?php

        // Check if decoding was successful
        // if ($data === null) {
        //     die("Error decoding JSON data");
        // }

        // Extract relevant weather information
        // $city = $data["location"]["name"];
        // $country = $data["location"]["country"];
        // $temperatureCelsius = $data["current"]["temp_c"];
        // $temperatureFahrenheit = $data["current"]["temp_f"];
        // $condition = $data["current"]["condition"]["text"];
        // $windSpeedKph = $data["current"]["wind_kph"];
        // $windDirection = $data["current"]["wind_dir"];
        // $humidity = $data["current"]["humidity"];
        // $pressureMb = $data["current"]["pressure_mb"];

        // Output weather information
        // echo "Weather in $city, $country:\n";
        // echo "Temperature: $temperatureCelsius" . "°C /" .  $temperatureFahrenheit . "°F \n";
        // echo "Condition: $condition\n";
        // echo "Wind: $windSpeedKph km/h from $windDirection\n";
        // echo "Humidity: $humidity%\n";
        // echo "Pressure: $pressureMb mb\n";

        // Decode JSON response
        // $data = json_decode($response, true);

        // Check if data is valid
        // if ($data === null || $data["cod"] !== 200) {
        //     die("Error getting weather data");
        // }

        // Extract relevant weather information
        // $weatherDescription = $data["weather"][0]["description"];
        // $temperature = $data["main"]["temp"];
        // $humidity = $data["main"]["humidity"];

        // Output weather information
        // echo "Weather in $city: $weatherDescription\n";
        // echo "Temperature: $temperature°C\n";
        // echo "Humidity: $humidity%\n";

        ?>


    </div> -->
    <div class="h-7"></div>
</section>