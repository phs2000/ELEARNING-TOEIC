<?php

require_once ('Google/libraries/Google/autoload.php');
$gClient = new Google_Client();
$gClient->setClientId("350532674981-8rb81ijmindudrvk2jcsvksou9dpq9jd.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setRedirectUri("http://localhost:88/tn2/index.php?manage=google-callback");
$gClient->setApplicationName("CPI Login Tutorial");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
