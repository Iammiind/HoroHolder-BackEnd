<?php 
    // allow all request can access
    header('Access-Control-Allow-Origin: *');
    
     // connect to the database
    // $mysqli = new mysqli('localhost', 'root', '', 'HoroHolder'); // local
    $mysqli = new mysqli('localhost', 'root', 'horoholder', 'HoroHolder'); 
    $result = $mysqli->query("SELECT * FROM `zodiac` ORDER BY amount DESC LIMIT 3");
    
    $arrayZodiacs = [];
    while($data = $result->fetch_assoc()){
        // push $data into $arrayZodiacs
        array_push($arrayZodiacs, $data);
    }
    echo json_encode($arrayZodiacs);
?>