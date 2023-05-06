<?php
$conn=mysqli_connect("localhost", "TCB_DB_USER", "tcbdbuser","TCB_DB");
// Load Twilio PHP library
 require_once 'twiliomain/src/Twilio/autoload.php';
use Twilio\TwiML\MessagingResponse;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Body'])) {
    var_dump($_POST); die;
    $profile=$_POST['ProfileName'];
     $number=$_POST['WaId'];
      $SmsStatus=$_POST['SmsStatus'];
       $from=$_POST['WaId'];
        $type="Whats app";
    
  $sql= "insert into contacts (ProfileName, number, from_cust, SmsStatus, type) values('{$profile}', '{$number}', '{$from}', '{$SmsStatus}', '{$type}')";
   
  $query=mysqli_query($conn,$sql );
   
$response = new MessagingResponse();
$response->message("Thanks for contacting us! We will get back to you soon.");
print $response;
}





// use Twilio\Twiml;

// // Check if this is an incoming message request
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Body'])) {
  
//   // Create a new TwiML response
//     $response = new Twiml();

//     // Add a message to the response
//     $response->message('Thanks for contacting us! We will get back to you soon.');

//     // Print the response
//     echo $response;
// }





//require_once 'vendor/autoload.php'; // Loads the library
// use Twilio\TwiML\MessagingResponse;

// $response = new MessagingResponse;
// $message = $response->message("");
// $message->body("The Robots are coming! Head for the hills!");

// print $response;



    

?>