<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
 require_once 'twiliomain/src/Twilio/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
// $sid = getenv("TWILIO_ACCOUNT_SID");
// $token = getenv("TWILIO_AUTH_TOKEN");
$sid = 'AC49958f95138ffc05ede7008fd166e073';
$token = '2afd05c80948f36ad5fd770799a452d2';
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+923478898396", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "Hello, there!"
                           ]
                  );

print($message->sid);