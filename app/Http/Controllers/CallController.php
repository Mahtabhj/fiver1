<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;
use Twilio\Rest\Client;
use App\Models\Contact;
use App\Models\Conversation;
class CallController extends Controller
{
    
     public function index()
    {
        $clients=Contact::where('type', '=', 3)->get();
       return view('admin.call', ['clients'=>$clients]);
    } 
    
    
   public function handleIncomingCall(Request $request)
{
   // https://demo.twilio.com/welcome/voice/
  
    $num=$_POST['From'];
  $customer=Contact::where('number', '=', $num)->where('type', '=', 3)->first();
   
      
      
      
    $fromNumber = $_POST['From'];
    $toNumber = $_POST['To'];
    $callSid = $_POST['CallSid'];

   if(!$customer)
      { 
    $contact=new Contact();
      $contact->ProfileName=$fromNumber;
      $contact->number=$fromNumber;
        $contact->from_cust=$fromNumber;
         $contact->SmsStatus='received';
          $contact->type='1';
            $contact->save();
      }


    // Save the caller record in the database
    // $caller = new Caller();
    // $caller->from_number = $fromNumber;
    // $caller->to_number = $toNumber;
    // $caller->call_sid = $callSid;
    // $caller->save();
    
     
    

 $sid = env('TWILIO_ACCOUNT_SID');
    $token = env('TWILIO_AUTH_TOKEN');
    $twilioNumber = env('TWILIO_SMS_NUMBER');
    // $toNumber = '+923478898396';

    $client = new Client($sid, $token);
    $message = $client->messages->create(
        '+923057568007',
        [
            'from' => $twilioNumber,
            'body' => "A Customer Just called from $fromNumber This number.",
        ]
    );

    
   $response = new VoiceResponse();
    $response->say('Thank you for your message. Our support team will get back to you as soon as possible');

    return response($response)->header('Content-Type', 'text/xml');
}

public function makeCall()
{
    
    $accountSid = env('TWILIO_ACCOUNT_SID');
    $authToken = env('TWILIO_AUTH_TOKEN');
    //$twilioNumber = env('TWILIO_PHONE_NUMBER');
    $twilio = new Client($accountSid, $authToken);

// $validation_request = $twilio->validationRequests
//                              ->create("+923225438847", // phoneNumber
//                                       ["friendlyName" => "My Home Phone Number"]
//                              );

// print($validation_request->friendlyName);
    
    // $accountSid = config('services.twilio.account_sid');
    // $authToken = config('services.twilio.auth_token');
    // $twilioNumber = config('services.twilio.phone_number');

    $client = new Client($accountSid, $authToken);
 $twilioNumber = '+15077282905';
    $toNumber = '+923057568007';





    $client->calls->create(
        $toNumber,
        $twilioNumber,
        array(
            'url' => 'http://example.com/twilio/outgoing-call',
        )
    );
}


public function save_message(Request $request)
{
    $cont=Contact::where('id', '=', $request->customer_id)->where('type', '=', 3)->first();
    $toNumber=$cont->number;
    $conversation=new Conversation();
      $conversation->contact_id= $request->customer_id;
      $conversation->body=$request->message;
     $conversation->SmsStatus="Sent";
      $conversation->save();

 $sid = env('TWILIO_ACCOUNT_SID');
    $token = env('TWILIO_AUTH_TOKEN');
    $twilioNumber = env('TWILIO_PHONE_NUMBER');
    // $toNumber = '+923478898396';

    $client = new Client($sid, $token);
    $message = $client->messages->create(
        "whatsapp:$toNumber",
        [
            'from' => "whatsapp:$twilioNumber",
            'body' => $request->message
        ]
    );





    return response()->json(['messages' => $request->message]);
}

}
