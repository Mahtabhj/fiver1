@extends('admin.include.layout')
@section('content')
<style>
    .chat-sidebar-container .chat-topbar {
    /*height: 52px;*/
    background-color: #e0dede;
}
</style>
<div class="card chat-sidebar-container sidebar-container" data-sidebar-container="chat">
                    <div class="chat-sidebar-wrap sidebar" data-sidebar="chat" style="left: 0px;">
                        <div class="border-right">
                            <div class="pt-2 pb-2 pl-3 pr-3 d-flex align-items-center o-hidden box-shadow-1 chat-topbar"><a class="link-icon d-md-none" data-sidebar-toggle="chat"><i class="icon-regular ml-0 mr-3 i-Left"></i></a>
                                <div class="form-group m-0 flex-grow-1">
                                    <input class="form-control form-control-rounded" id="search" type="text" placeholder="Search contacts">
                                </div>
                            </div>
                            <div class="contacts-scrollable perfect-scrollbar ps">
                                <div class="mt-4 pb-2 pl-3 pr-3 font-weight-bold text-muted border-bottom">Recent</div>
                              
                               	   @foreach($clients as $client)  
                                <div class="p-3 d-flex border-bottom align-items-center contact online customer" data-customer-id="{{$client->id}}">
                                    <img class="avatar-sm rounded-circle mr-3" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="alt">
                                    <h6>{{$client->ProfileName}}</h6>
                                </div>
                                	@endforeach
                                
                                
                             
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                     <div class="chat-content-wrap sidebar-content " data-sidebar-content="chat" style="margin-left: 260px; ">
                        <div class="d-flex pl-3 pr-3 pt-2 pb-2 o-hidden box-shadow-1 chat-topbar ">
                            <a class="link-icon d-md-none" data-sidebar-toggle="chat"><i class="icon-regular i-Right ml-0 mr-3"></i></a>
                            <div class="d-flex align-items-center"><img class="avatar-sm rounded-circle mr-2" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="alt">
                                <p class="m-0 text-title text-16 flex-grow-1">Frank Powell</p>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                        <div class="col-md-8">
                            
                            
                            
                              <div class="chat-content perfect-scrollbar ps ps--active-y chat-history" data-suppress-scroll-x="true">
                                  
                                  	<div id="chat-box">
	    
	</div>
                

                           
                        <div class="ps__rail-x" style="left: 0px; bottom: -182px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 182px; height: 268px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 109px; height: 159px;"></div>
                  </div>
                  </div>
                        
                        
                        
                        
                        
                        
                        
                        <div class="pl-3 pr-3 pt-3 pb-3 box-shadow-1 chat-input-area">
                            
                            
                            <form class="inputForm" id="message-form">
        @csrf
                                <div class="form-group">
                                    <input type="hidden" name="customer_id" id="customer-id-input">
                                    <textarea class="form-control form-control-rounded" id="message" placeholder="Type your message" name="message" cols="30" rows="3"></textarea>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-grow-1"></div>
                                    <button class="btn btn-icon btn-rounded btn-primary mr-2"><i class="i-Paper-Plane"></i></button>
                                    <button class="btn btn-icon btn-rounded btn-outline-primary" type="button"><i class="i-Add-File"></i></button>
                                </div>
                            </form>
                            
                            
                            
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container-fluid mt-4 mb-4 p-3 d-flex justify-content-center">
                                 <div class="card p-4">
                                      <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                                      <button class="btn btn-secondary">
                                           <img src="admin/dist-assets/images/gender-neutral-user-v3.png" height="100" width="100" />
                                           </button>
                                           <h3 class="pt-2">RDGENO PEACE</h3>
                                           <hr style="margin-top:0px;border: 1px solid green; width:100%">
                                           
                                         
                                               
                                               
                                                    </div> 
                                                     <div class="text m-2"> 
                                                <span style="color:#0889FF;font-size:17px">Assigned To </span><br><br> 
                                                <i class="text-15 i-Envelope-2 pt-2"></i><span> (504) 515-0756 </span><br><br>
                                                <i class="text-15 i-Telephone pt-2"></i><span>  RDGENO PEACE </span> <br><br><br>
                                                </div> 
                                               
                                                   
                                                    </div>
                                                    
</div>
                        </div>
                    </div>
                   
                        
                        
                        
                      
                    </div>
                    
                    
                </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>  
  $(document).ready(function () {
    // var customerId = $('#customer').val();
    // getMessages(customerId);
  //  getMessages();
});

var intervalId;
$('.customer').click(function() {
    let customerId = $(this).data('customer-id');
  switchToCustomer(customerId); 
   




});


function switchToCustomer(customerId)
{
    if (intervalId) {
    clearInterval(intervalId);
  }
   $('#message-form').attr('data-customer-id', customerId);
  
  intervalId= setInterval(function() {
    // Check for new messages using AJAX
     var lastMessageId = $('.message:last').data('id') || 0; // get the ID of the last displayed message
     $.ajax({
        url: '/sms/new/' + customerId + '/' + lastMessageId,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            var messages = response.messages;
 var $chatBox = $('#chat-box');

    $chatBox.empty(); // clear the chat box

    messages.forEach(function (message) {
     
        
        
//          var messageHtml='<div class="row no-gutters">'+
// 			'<div class="col-md-3">'+
// 			  '<div class="chat-bubble chat-bubble--left">'+
// 				message.body+'</div>'+
// 			'</div>'+
// 		  '</div>';
		  
// 		  var messageHtml1='<div class="row no-gutters">'+
// 			'<div class="col-md-3 offset-md-9">'+
// 			  '<div class="chat-bubble sent chat-bubble--left">'+
// 				message.body+'</div>'+
// 			'</div>'+
// 		  '</div>';
	
	
	
	var messageHtml='<div class="d-flex flex-row justify-content-start">'+
	'<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"'+
                   'alt="avatar 1" style="width: 45px; height: 100%;">'+
			'<div">'+
			 '<p class="small p-2 ms-3  mb-1 " style="background-color: #e0dede; width:300px;border-radius:15px;">'+message.body+'</p>'+
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">'+message.created_at+'</p>'+
			'</div>'+
		  '</div>';
		  
		  var messageHtml1='<div class="d-flex justify-content-end">'+
			'<div>'+
			  '<p class="small p-2 me-3 mb-1 text-white " style="background-color: #0889FF; width:300px;border-radius:15px;">'+message.body+'</p>'+
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">'+message.created_at+'</p>'+
			'</div>'+
				'<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"'+
                   'alt="avatar 1" style="width: 45px; height: 100%;">'+
		  '</div>';
        
      
        
        
      
  
        
        if(message.SmsStatus=='received')
        {
              $chatBox.append(messageHtml);
     
         // append the message to the chat box
        }
         
        else
        {
          $chatBox.append(messageHtml1); 
            
        }
        
    });
        }
    });
}, 2000);
  
  
      $.ajax({
        url: '/sms/' + customerId,
        type: 'GET',
        dataType: 'json',
        success: function (response) {
            var messages = response.messages;

           var $chatBox = $('#chat-box');

    $chatBox.empty(); // clear the chat box

    messages.forEach(function (message) {


// var messageHtml='<div class="row no-gutters">'+
// 			'<div class="col-md-3">'+
// 			  '<div class="chat-bubble chat-bubble--left">'+
// 				message.body+'</div>'+
// 			'</div>'+
// 		  '</div>';
		  
// 		  var messageHtml1='<div class="row no-gutters">'+
// 			'<div class="col-md-3 offset-md-9">'+
// 			  '<div class="chat-bubble sent chat-bubble--left">'+
// 				message.body+'</div>'+
// 			'</div>'+
// 		  '</div>';
		  
		  
		  
	var messageHtml='<div class="d-flex flex-row justify-content-start">'+
	'<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"'+
                   'alt="avatar 1" style="width: 45px; height: 100%;">'+
			'<div">'+
			 '<p class="small p-2 ms-3  mb-1 " style="background-color: #e0dede; width:300px;border-radius:15px;">'+message.body+'</p>'+
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">'+message.created_at+'</p>'+
			'</div>'+
		  '</div>';
		  
		  var messageHtml1='<div class="d-flex justify-content-end">'+
			'<div>'+
			  '<p class="small p-2 me-3 mb-1 text-white " style="background-color: #0889FF; width:300px;border-radius:15px;">'+message.body+'</p>'+
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">'+message.created_at+'</p>'+
			'</div>'+
				'<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"'+
                   'alt="avatar 1" style="width: 45px; height: 100%;">'+
		  '</div>';		  
		  
		  
        
        if(message.SmsStatus=='received')
        {
      
        $chatBox.append(messageHtml); // append the message to the chat box
        }
        
        else
        {
              $chatBox.append(messageHtml1);
        }
     
    });
    

    
    
    
    
        }
    });
    
    
    
    
}





 $('#message-form').on('submit', function(event) {
        event.preventDefault();
var customerId = $('#message-form').attr('data-customer-id');
console.log(customerId);
        var $messageInput = $(this).find('textarea[name="message"]');
        var messageText = $messageInput.val();
        console.log(messageText);
         //var customerId = $('#customer').val();
        // var customerId = ;

        // Save the message to the database
        saveMessage(messageText, customerId);

        // Clear the message input field
        $messageInput.val('');
    });
    



    
 function saveMessage(messageText, customerId) {
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $.ajax({
         url: '/save-sms',
        method: 'POST',
        data: {
            message: messageText,
            customer_id: customerId
        },
        success: function(data) {
            // Update the chat box with the new message
            var chatBox = $('#chat-box');
                var messageHtml=   '<li class="clearfix">' +
            '<div class="message-data text-right">' +
            '<span class="message-data-time">10:10 AM, Today</span>' +
                                                  
                '</div>' +
                '<div class="message other-message float-right">' + data.message.text + '</div>' +
                        '</li>';
            chatBox.append(messageHtml);
            // chatBox.append('<div>' + data.message.text + '</div>');
        }
    });
}
   
    
    
    
    





// function getLatestMessages() {
//     $.ajax({
//         url: '/get-messages',
//         method: 'GET',
//         success: function(data) {
//             // Update the chat box with the latest messages
//             var chatBox = $('#chat-box');
//             chatBox.empty();

//             $.each(data.messages, function(index, message) {
//                 chatBox.append('<div>' + message.text + '</div>');
//             });

//             // Update the customer information on the sidebar
//             var customerList = $('#customer-list');
//             customerList.empty();

//             $.each(data.customers, function(index, customer) {
//                 customerList.append('<li>' + customer.name + '</li>');
//             });
//         }
//     });
// }


</script>  
      
@endsection