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
</head>

<body>

    <?php include("Header.php") ?>
    <div class="min-h-fit bg-gray-100 p-0 sm:p-5 bg-cover bg-no-repeat bg-center" style="background-image: url('../img/weather-img-up.jpg');">
        <div class="flex items-center justify-center">
            <div class="bg-white p-8 rounded shadow-md max-w-md w-full">
                <h1 class="text-2xl font-bold mb-4">Enter city and state to get weather details</h1>
                <form action="" method="post" class="mb-4">
                    <div class="flex items-center mb-4">
                        <label for="state" class="mr-2">State:</label>
                        <select id="state" name="state" class="border rounded px-2 py-1 focus:outline-none focus:border-blue-500">
                            <!-- Add options for Indian states -->
                            <option value="">----select stat----</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="city" class="mr-2">City:</label>
                        <input type="text" id="city" name="city" class="border rounded px-2 py-1 focus:outline-none focus:border-blue-500">
                    </div>
                    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Get Weather</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $api_key = "97852380926fcca385c9165c3d2f7a2d";
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $location = $city . ',' . $state . ',IN'; // Adding the state and country code

                    getWeather($api_key, $location);
                }

                function getWeather($api_key, $location)
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
                ?><b>Weather in </b> <?php echo "$location"; ?><br> <?php
                                                                        ?><b>Temperature: </b> <?php echo "{$weather_data['main']['temp']}°C "; ?><br> <?php
                                                                                                    ?><b>Time: </b> <?php echo date("d-m-Y h:i:s", $weather_data['dt']) . ""; ?><br> <?php
                                                                                                    ?><b>Description: </b> <?php echo "{$weather_data['weather'][0]['description']}"; ?><br> <?php
                                                                                                                ?><b>Humidity: </b> <?php echo "{$weather_data['main']['humidity']}%"; ?><br> <?php
                                                                                                    ?><b>Wind Speed: </b> <?php echo "{$weather_data['wind']['speed']} m/s"; ?><br> <?php
                                                                                                } else {
                                                                                                    echo "Failed to retrieve weather data."; ?><br> <?php
                                                                                                }
                                                                                            }
                                                                    ?>
            </div>
        </div>
    </div>

    <?php include('Footer.php'); ?>

</body>

</html>