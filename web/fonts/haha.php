<?php
require_once 'firebaseLib.php';
// --- This is your FirebaUsese URL
//$url = 'https://agriotsensor.firebaseio.com/';
$url = 'https://agriadvisor-394af.firebaseio.com/';
// --- Use your token from Firebase here
//$token = '7Z2ILvDmyPfvHt1rAGE7pFISyxePPMvkmKpxACIZ';

$token = 'efXozBVe4BiXaqOSE76imD0LBI3QcSkNioDPSaKD';
// --- Here is your parameter from the http GET


$firebasePath1 = '/'.$uid.'/userDetails';
$firebasePath2 = '/'.$uid.'/notification';
/// --- Making calls
$fb = new fireBase($url, $token);

$response1 = $fb->set($firebasePath1, $arr);
$response2 = $fb->set($firebasePath2, $notificationArray);


if (isset($_GET['zone'])){
$zone=$_GET["zone"];
$uid=$_GET["uid"];


$arr3 = array(
            
            "agroZone" => $zone,
         
);


// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here

/// --- Making calls
$fb = new fireBase($url, $token);
echo 'hi ';

$response3 = $fb->set($firebasePath1, $arr3);

}
sleep(2);

