<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Conversation;
use Twilio\TwiML\MessagingResponse;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function index()
    {
        $clients=[];
        $cl=Contact::where('type', '=', 2)->get();
         foreach($cl as $client)
        {
        $conversation=Conversation::where('contact_id', $client->id)->latest()->first();
        $client->msg=$conversation->body;
        array_push($clients, $client);
       
    }
       return view('admin.sms', ['clients'=>$clients]);
    }
    
    
   public function handleIncomingMSG(Request $request)
   {

         
      $num=$request->input('from');
  $customer=Contact::where('number', '=', $num)->where('type', '=', 2)->first();
      if(!$customer)
      { 
      $contact=new Contact();
      $contact->ProfileName=$request->input('from');
      $contact->number=$request->input('from');
        $contact->from_cust=$request->input('from');
         $contact->SmsStatus=$request->input('SmsStatus');
          $contact->type='2';
            $contact->save();
      $contact_id=$contact->id;
      }
      if($customer)
      {
        $contact_id=  $customer->id;
      }
      
      $conversation=new Conversation();
      $conversation->contact_id= $contact_id;
      $conversation->body=$request->input('Body');
     $conversation->SmsStatus=$request->input('SmsStatus');
      $conversation->save();
     if(!$customer)
      {
  $response = new MessagingResponse();
    $response->message('Thank you for your message. Our support team will get back to you as soon as possible');
    //return response($response, 200)->header('Content-Type', 'application/xml');
    // Send the response to Twilio
   return $response;
      }
   }
   
   public function getMessages($customerId)
{
    $messages = Conversation::where('contact_id', $customerId)->get();
    $customers = Contact::all();
   // return response()->json(['messages' => $messages]);
     return response()->json([
        'messages' => $messages,
        'customers' => $customers
    ]);
}

public function getNewMessages($customerId, $lastMessageId)
{
    $messages = Conversation::where('contact_id', $customerId)
        ->where('id', '>', $lastMessageId)
       ->get();

    return response()->json(['messages' => $messages]);
}

public function save_message(Request $request)
{
    $cont=Contact::where('id', '=', $request->customer_id)->where('type', '=',2)->first();
    $toNumber=$cont->number;
    $conversation=new Conversation();
      $conversation->contact_id= $request->customer_id;
      $conversation->body=$request->message;
     $conversation->SmsStatus="Sent";
      $conversation->save();

 $sid = env('TWILIO_ACCOUNT_SID');
    $token = env('TWILIO_AUTH_TOKEN');
    $twilioNumber = env('TWILIO_SMS_NUMBER');
    // $toNumber = '+923478898396';

    $client = new Client($sid, $token);
    $message = $client->messages->create(
        '+923057568007',
        [
            'from' => $twilioNumber,
            'body' => $request->message
        ]
    );





    return response()->json(['messages' => $request->message]);
}



}
