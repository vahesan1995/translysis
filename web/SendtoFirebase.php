<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://agriotsensor.firebaseio.com/';
// --- Use your token from Firebase here
$token = '7Z2ILvDmyPfvHt1rAGE7pFISyxePPMvkmKpxACIZ';
// --- Here is your parameter from the http GET

$Data=$_POST["Data"];
$Light=$_POST["light"];
$Temp=$_POST["temp"];
$Hum=$_POST["Hum"];
$time = strtotime("now");


$arr = array(
    
        
            "Data" => $Data,
        	"Light" => $Light,
        
            "Temp" => $Temp,
        
        
            "Hum" => $Hum,

            "Time" => $time

      
    
);


// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/Sensor';
/// --- Making calls
$fb = new fireBase($url, $token);

$response = $fb->push($firebasePath, $arr);
sleep(2);