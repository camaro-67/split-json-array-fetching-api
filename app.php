<?php
$api_url = 'http://api-reading.herokuapp.com/versions/';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$u = $response_data->data;
$u = array_slice($u, 0, 9);
foreach($u as $result) {
    $array_year[] =  $result->attributes->year;
    $myObj->year = $array_year;
    $array_series[] = $result->attributes->series;
    $myObj->series = $array_series;
    $array_color[] = $result->attributes->color;
    $myObj->color = $array_color;
    $array_tampo[] = $result->attributes->tampo;
    $myObj->tampo = $array_tampo;
    $array_base_color[] = $result->attributes->base_color;
    $myObj->base_color = $array_base_color;
    $array_window_color[] = $result->attributes->window_color;
    $myObj->window_color = $array_window_color;
    $array_interior_color[] = $result->attributes->interior_color;
    $myObj->interior_color = $array_interior_color;
    $array_wheel_type[] = $result->attributes->wheel_type;
    $myObj->wheel_type = $array_wheel_type;
    $array_toy[] = $result->attributes->toy;
    $myObj->toy = $array_toy;
    $array_country[] = $result->attributes->country;
    $myObj->country = $array_country;
    $myJSON = json_encode($myObj);
}
$decodedJSON = json_decode($myJSON);
foreach($decodedJSON->year as $ix => $year) {
    $newarray[]=array(
        'year'  => $decodedJSON->year[$ix],
        'series' => $decodedJSON->series[$ix],
        'color' => $decodedJSON->color[$ix],
        'tampo' => $decodedJSON->tampo[$ix],
        'base_color' => $decodedJSON->base_color[$ix],
        'window_color' => $decodedJSON->window_color[$ix],
        'interior_color' => $decodedJSON->interior_color[$ix],
        'wheel_type' => $decodedJSON->wheel_type[$ix],
        'toy' => $decodedJSON->toy[$ix],
        'country' => $decodedJSON->country[$ix],
    );
}
$sjson = json_encode($newarray);
var_dump($sjson);
print_r($sjson);
?>
