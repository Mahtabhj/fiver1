<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Conversation;
use App\Models\Agent;
use Twilio\TwiML\MessagingResponse;
use Twilio\Rest\Client;

class WhatappController extends Controller
{
    public function index()
    {
        $clients=[];
        $cl=Contact::where('type', '=', 1)->get();
        foreach($cl as $client)
        {
        $conversation=Conversation::where('contact_id', $client->id)->latest()->first();
        // $client->msg=$conversation->body;
        array_push($clients, $client);
       
    }
     $agents=Agent::all();  
       return view('admin.whatapp', [
           'clients'=>$clients,
           'agents'=>$agents
           
           ]);
    }
     public function filtercustomers(Request $request)
 

{
    
     $filter = $request->input('filter'); 
     

    // retrieve the customer list based on the selected filter
    if ($filter == 'recent') {
        $conversations = Conversation::orderBy('created_at', 'desc')->take(2)->get();
    } else if ($filter == 'starred') {
        $conversations = Conversation::where('starred', true)->get();
    } else if ($filter == 'unread') {
        $conversations = Conversation::where('unread', true)->get();
    } else {
       $contact= Contact::where('type', '=', 1)->get();
    }
   
    if(empty($contact))
    {

$customerIds = $conversations->pluck('contact_id')->unique()->toArray();
$customers = Contact::whereIn('id', $customerIds)->where('type', '=', 1)->get();

    return response()->json($customers); // return the customer list as JSON
    }
    
    else
    {
          
         return response()->json($contact);
    }
}

    
   public function handleIncomingMSG(Request $request)
   {

         
      $num=$request->input('WaId');
  $customer=Contact::where('number', '=', $num)->where('type', '=', 1)->where('ProfileName', '=', $request->input('ProfileName'))->first();
      if(!$customer)
      { 
      $contact=new Contact();
      $contact->ProfileName=$request->input('ProfileName');
      $contact->number=$request->input('WaId');
        $contact->from_cust=$request->input('WaId');
         $contact->SmsStatus=$request->input('SmsStatus');
          $contact->type='1';
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
   
   
   public function show($id)
{
  $customer = Contact::find($id);
  if($customer->assigned_to)
  {
  $agent=Agent::where('id',$customer->assigned_to)->first();
  $customer->agent=$agent->name;
}
  Conversation::where('contact_id', $id)->update(['unread' => false]);

  
  
  
  if (!$customer) {
    return response()->json(['error' => 'Customer not found'], 404);
  }
  
  return response()->json($customer);
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
    $cont=Contact::where('id', '=', $request->customer_id)->where('type', '=', 1)->first();
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

public function assigned_to(Request $request)
{
    $agent=$request->agent;
    $id=$request->customer_id;
    
   Contact::where('id', $id)->update(['assigned_to' => $agent]);
  return redirect()->back()->with('status', 'products Added Successfully');

}

}
