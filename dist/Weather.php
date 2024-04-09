<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.freepik.com/256/10341/10341413.png?ga=GA1.1.253096211.1707907143&semt=ais">
    <title>KrishiCare - Farmer Information System</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../src/Js/styles.css">
    <script src="../src/Js/code.js"></script>
    <script src="../flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body onload="loadStates()">

    <?php include("Header.php") ?>
    <div class="min-h-fit bg- p-0 sm:p-5">
        <div class="grid grid-cols-1 md:grid-cols-4">
            <div class="bg-gray-100 p-8 my-8 rounded shadow-md max-w-md w-full md:col-span-1">
                <div>
                    <h1 class="text-2xl font-bold mb-4">Weather details</h1>
                    <form action="" method="post" class="mb-4">
                        <div class="flex items-center mb-4">
                            <label for="state" class="mr-2">State:</label>
                            <select id="state" name="state" onchange="loadCities()" class="state border rounded w-full px-2 py-1 focus:outline-none focus:border-blue-500"></select>
                        </div>
                        <div class="flex items-center mb-4">
                            <label for="city" class="mr-2">City:</label>
                            <select id="city" name="city" class="city border rounded w-full px-2 py-1 focus:outline-none focus:border-blue-500"></select>
                        </div>
                        <button type="submit" name="getWeather" class="mt-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:bg-green-600">Get Weather</button>
                    </form>
                </div>
            </div>
            <div class="md:col-span-3 p-8">
                <div class="h-full">
                    <div class="h-full grid">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $api_key = "97852380926fcca385c9165c3d2f7a2d";
                            if (isset($_POST["getWeather"])) {
                                if (!isset($_POST['state'])) {
                                    echo "<script>
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Please select both the city and state!',
                            icon: 'error'
                        });
                    </script>";
                                } elseif (!isset($_POST['city'])) {
                                    echo "<script>
                        Swal.fire({
                            title: 'Oops!',
                            text: 'Please select both the city and state!',
                            icon: 'error'
                        });
                    </script>";
                                } else {
                                    $city = $_POST['city'];
                                    $state = $_POST['state'];
                                    $location = $city . ',' . $state . ',IN'; // Adding the state and country code
                                    getWeather($api_key, $location, $city, $state);
                                }
                            } else {
                                echo "<script>
                    Swal.fire({
                        title: 'Oops!',
                        text: 'Please select both the city and state!',
                        icon: 'success'
                    });
                </script>";
                            }
                        } else {
                            $city = "surat";
                            $state = "GJ";
                            $api_key = "97852380926fcca385c9165c3d2f7a2d";
                            $location = $city . ',' . $state . ',IN'; // Adding the state and country code
                            getWeather($api_key, $location, $city, $state);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    function getWeather($api_key, $location, $city, $state)
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
            <div class="h-fit py-4 bg-gray-100 shadow-lg mb-4 px-8 rounded-lg">
                <?php echo "Weather in  : " . $city ?>
            </div>
            <div class="h-full grid gap-4 grid-cols-1 md:grid-cols-4">
                <div class="bg-gray-100 hover:shadow-lg p-8 h-40 md:h-full rounded-lg">
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
                <div class="bg-gray-100 hover:shadow-lg h-40 md:h-full rounded-lg flex justify-center items-center">
                    <div class="w-fit">
                        <h1>Wind Status</h1>
                        <h1 class="text-4xl py-3 w-full flex justify-center items-end"><?php echo $wind_speed; ?><span class="text-sm px-1 text-end">m/s</span></h1>
                        <p><?php echo $wind_direction; ?> °</p>
                    </div>
                </div>
                <div class="bg-gray-100 hover:shadow-lg p-8 h-40 md:h-full rounded-lg grid grid-cols-2 gap-4">
                    <div class="w-full flex flex-col justify-center">
                        <h1>Temperature</h1>
                        <h1 class="text-4xl h-16 w-full flex justify-center items-center"><?php echo $temperature; ?></h1>
                        <p><?php echo $weather_condition; ?></p>
                    </div>
                    <div class="flex justify-center items-center my-2">
                        <div class="w-9 h-full rounded-full border border-gray-400 flex justify-center items-center">
                            <div class="bg-green-500 h-7 w-7 rounded-full my-1"></div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 hover:shadow-lg h-40 md:h-full rounded-lg flex justify-center items-center">
                    <div class="w-fit">
                        <h1>Sunrise & Sunset</h1>
                        <h1 class="text-2xl py-1 w-full flex ml-8"><span><img src="../img/sun-rise.png" class="h-7 pr-2" alt=""></span><?php echo "05:43"; ?> </h1>
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
    ?>

    <?php include('Footer.php'); ?>

</body>

</html>