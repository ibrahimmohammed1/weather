<?php
	$city=$_GET['city'];

	$city= str_replace(" ","",$city);
	

	$content = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	preg_match('/3 Day Weather Forecast Summary:(.*?)<\/span>/', $content, $matches);
	echo $matches[0];
?>