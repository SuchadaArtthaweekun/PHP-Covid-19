<?php

    $jsonData = file_get_contents("https://covid19.th-stat.com/api/open/today");
    $data = json_decode($jsonData, true);
    
    $confirmed = $data['Confirmed'];
    $recovered = $data['Recovered'];
    $hospitalized = $data['Hospitalized'];
    $deaths = $data['Deaths'];
    $NewConfirmed = $data['NewConfirmed'];
    $NewRecovered = $data['NewRecovered'];
    $NewHospitalized = $data['NewHospitalized'];
    $NewDeaths = $data['NewDeaths'];

?>