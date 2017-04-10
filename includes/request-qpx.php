<?php

$url = "https://www.googleapis.com/qpxExpress/v1/trips/search?key=AIzaSyCs6drB3Lq4Od8xAIGubbJ9ivtx3miIRaY&fields=trips(tripOption/saleTotal)";

//$data = '{
//    "request": {
//        "slice": [
//            {
//                "origin": "YYZ",
//                "destination": "LAX",
//                "date": "2017-02-16",
//                "maxStops": 2
//            }
//        ],
//        "passengers": {
//            "adultCount": 1,
//            "infantInLapCount": 0,
//            "infantInSeatCount": 0,
//            "childCount": 0,
//            "seniorCount": 0
//        },
//        "solutions": 1,
//        "saleCountry": "CA",
//        "refundable": false
//    }
//}';

// add 2 months to user's current date
$date = date("Y-m-d");
$date = strtotime(date("Y-m-d", strtotime($date)) . " +2 month");
$date = date("Y-m-d", $date);

$data = array(
    "request" => array(
        "slice" => array(
            array(
                "origin" => "YYZ",
                "destination" => $airport[$destination],
                "date" => $date,
                "maxStops" => 2
            )
        ),
        "passengers" => array(
            "adultCount" => 1,
            "infantInLapCount" => 0,
            "infantInSeatCount" => 0,
            "childCount" => 0,
            "seniorCount" => 0
        ),
        "solutions" => 1,
        "saleCountry" => "CA",
        "refundable" => false
    )
);

$data = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Content-Length: " . strlen($data))
);
curl_setopt($ch, CURLOPT_TIMEOUT, 5); // max seconds to allow cURL functions to execute
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); // max seconds to allow cURL functions to execute

global $flight_price;
$flight_price = curl_exec($ch); // execute post
$flight_price = json_decode($flight_price, true); // true for assoc array
$flight_price = $flight_price["trips"]["tripOption"][0]["saleTotal"]; // get flight price from assoc array

// close connection
curl_close($ch);

?>