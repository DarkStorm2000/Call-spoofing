#!/usr/bin/php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$caller = readline("Enter your phone number: ");
$receiver = readline("Enter the number to call: ");

if(!preg_match("/^[0-9]{10}$/", $caller) || !preg_match("/^[0-9]{10}$/", $receiver)){
    echo "Invalid phone number entered!";
    exit(1);
}

$accountSid = 'YOUR_ACCOUNT_SID';
$authToken = 'YOUR_AUTH_TOKEN';
$twilioNumber = 'YOUR_TWILIO_PHONE_NUMBER';

$client = new Client($accountSid, $authToken);

try {
    $call = $client->calls->create(
        $receiver,
        $twilioNumber,
        array(
            "url" => "http://example.com/your-twiml-bin"
        )
    );

    echo "Call initiated: " . $call->sid . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

echo "\nPress # to end the call.\n";
while(true){
    $input = readline("");
    if($input === "#"){
        try {
            $call->update(array(
                "status" => "completed"
            ));
            echo "Call ended.\n";
            break;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>