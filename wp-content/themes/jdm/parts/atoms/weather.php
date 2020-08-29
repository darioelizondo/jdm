<?php

// API State -> Icon

$states = array(
  '01d' => 'wi-day-sunny',
  '02d' => 'wi-day-cloudy',
  '03d' => 'wi-cloudy',
  '04d' => 'wi-smoke',
  '09d' => 'wi-rain',
  '10d' => 'wi-day-rain',
  '11d' => 'wi-lightning',
  '13d' => 'wi-snow',
  '50d' => 'wi-fog', 
  '01n' => 'wi-night-clear',
  '02n' => 'wi-night-cloudy',
  '03n' => 'wi-cloudy',
  '04n' => 'wi-smoke',
  '09n' => 'wi-rain',
  '10n' => 'wi-night-rain',
  '11n' => 'wi-night-alt-thunderstorm',
  '13n' => 'wi-night-snow',
  '50n' => 'wi-night-cloudy-windy'
);


$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Mendoza,AR&appid=eedc0c9966801cb0122328f9b880395d&&units=metric');

if ( $json ) {
	$obj        = json_decode($json);
	$temp       = $obj->main->temp;
	$icon       = $obj->weather[0]->icon;
	$icon_class = ( isset( $states[$icon] ) ) ? $states[$icon] : 'wi-day-sunny';
} else {
	$temp = '-';
}


?>

<div class="weather">
	<i class="weather__state wi <?php echo esc_attr( $icon_class ); ?>"></i>
	<h6 class="weather__info"><?php echo esc_attr( $temp ); ?>°C</h6>
</div>
