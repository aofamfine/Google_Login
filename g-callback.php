<?php 
require_once('config.php');

if(isset($_GET['code'])){
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
}
else{
    header('Location: index.php');
    // echo 1 ;
    die;
}


if(!isset($token["error"])){

    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();
 
    // echo "<pre>";
    // print_r($userData);
    // echo "</pre>";
    $userData = json_encode($userData); 
    header('Location: viewdata.php?data='.$userData);
    die;
}
else{
    header('Location: index.php');
    // echo 2 ;
    die;
}




?>