<?php 
require_once('googleapi/vendor/autoload.php');
$gClient = new Google_Client();
$gClient->setClientId("255901740184-6gheo5va935ptt0f5m40qk49loqhtff7.apps.googleusercontent.com");
$gClient->setClientSecret("GlSIf5ZbEsqoaEsdnMAX3_do");
$gClient->setApplicationName("Vicode Media Login");
$gClient->setRedirectUri("http://localhost/Googlelogin/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient->createAuthUrl();

?>