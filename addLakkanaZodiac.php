<?php 
    // allow all request can access
    header('Access-Control-Allow-Origin: *');
    
    // connect database
    // $mysqli = new mysqli('localhost', 'root', '', 'HoroHolder'); // local
    $mysqli = new mysqli('localhost', 'root', 'horoholder', 'HoroHolder');
    $result = $mysqli->query("SELECT * FROM `zodiac` WHERE `id` = " . $_GET['id']);
    $amount = $result->fetch_assoc()['amount'];
    $mysqli->query("UPDATE `zodiac` SET `amount` = " . ($amount+1) . " WHERE `id` = " . $_GET['id']);    

?>