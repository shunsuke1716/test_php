<?php
function searchCityTime($$city_name)
{
    require('config/cities.php');
}
require('config/cities.php');
foreach ($cities as $city){
    if ($city['name']===$city_name){
        $date_time  = new DateTime('',new DateTimeZone($time_zone));
        $time = $date_time->date_format('H:i');
        $city['time']=$time;
        return $city;

    }
}

