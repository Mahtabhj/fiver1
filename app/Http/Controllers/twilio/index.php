

<?php
require_once 'twiliomain/src/Twilio/autoload.php';

use Twilio\Rest\Client;

$sid = 'AC49958f95138ffc05ede7008fd166e073';
$token = '2afd05c80948f36ad5fd770799a452d2';

$client = new Client($sid, $token);

try {
    $messages = $client->messages
        ->read([
            'from' => 'whatsapp:+14155238886'
        ]);

    foreach ($messages as $message) {
        // echo $message->to;
        echo $message->body;
        // echo $message->from;
    }
} catch (\Exception $e) {
    echo 'Error retrieving messages: ' . $e->getMessage();
}

?>