<?php

$url = "http://api.openweathermap.org/data/2.5/weather?id=524901&lang=ru&units=metric&APPID=c28dae2272e35cc5380368e2821abd4d";


$contents = file_get_contents($url);
$clima = json_decode($contents, true);

// echo '<pre>';
// var_dump(json_decode($contents));

$icon = $clima["weather"][0]["icon"].".png";
$today = date("D M j G:i:s Y");
$cityname = $clima["name"]; 

echo $cityname . " - " .$today . "<br>";
echo "Temp Max: " . $clima["main"]["temp_max"] ."&deg;C<br>";
echo "Temp Min: " . $clima["main"]["temp_min"] ."&deg;C<br>";
echo "Humidity: " . $clima["main"]["humidity"] ."%<br>";
echo "Wind Speed: " . $clima["wind"]["speed"]." mph<br>";
echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";

