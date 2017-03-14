<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hug\Sms\Sms as Sms;

$sms = new Sms();
 
# Configure Free Mobile User ID ank Key after activating it in your personal account
$sms->setKey("YOUR_KEY")->setUser("YOUR_USER");
 
try
{
    # Send Message
    $sms->send("Hello World !");
}
catch (Exception $e)
{
	# Catch Possible Errors
    echo "Erreur sur envoi de SMS: (".$e->getCode().") ".$e->getMessage();
}