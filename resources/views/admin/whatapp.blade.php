@extends('admin.include.layout')
@section('content')
<style>
    .chat-sidebar-container .chat-topbar {
    /*height: 52px;*/
    background-color: #e0dede;
}
</style>
<style>
    .nav-pills .nav-link.active{
        color:#363740 !important;
        font-weight:900;
        background-color: #f2efef;
    }
</style>

 <ul class="nav nav-pills" id="myPillTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="true">Conversations</a></li>
                                    <li class="nav-item"><a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"> Manual</a></li>
                                    <li class="nav-item"><a class="nav-link" id="contact-icon-pill" data-toggle="pill" href="#contactPIll" role="tab" aria-controls="contactPIll" aria-selected="false"> Actions </a></li>
                                    
                                    
                                    
                                </ul>
                                
<div class="card chat-sidebar-container sidebar-container" data-sidebar-container="chat">
                    <div class="chat-sidebar-wrap sidebar" data-sidebar="chat" style="left: 0px;">
                        <div class="border-right">
                            <div class="pt-2 pb-2 pl-3 pr-3 d-flex align-items-center o-hidden box-shadow-1 chat-topbar"><a class="link-icon d-md-none" data-sidebar-toggle="chat"><i class="icon-regular ml-0 mr-3 i-Left"></i></a>
                               <div class="row">
                                   <p  class="p-2" style=" cursor: pointer;" onclick="updateCustomerList('unread')">Unread</p>
                                   <p  class="p-2" style=" cursor: pointer;" onclick="updateCustomerList('recent')">Recent</p>
                                   <p  class="p-2" style=" cursor: pointer;" onclick="updateCustomerList('starred')">Starred</p>
                                    <p  class="p-2" style=" cursor: pointer;" onclick="updateCustomerList('all')">All</p>
                                   <!--<a  class="p-2">Recent</a>-->
                                   <!--<a  class="p-2">Starred</a>-->
                                   <!--<a  class="p-2">All</a>-->
                                   
                                   
                                   
                                    
                               </div>
                               
                               
                               
                               
                               
                            </div>
                            <div class="contacts-scrollable perfect-scrollbar ps">
                                <br>
                                <div class="form-group m-0 flex-grow-1">
                                    <input class="form-control form-control-rounded" id="search" type="text" placeholder="Search contacts">
                                </div>
                              <div id="customer-list">
    <!-- Customer items will be added here -->

                               	<!--   @foreach($clients as $client)  -->
                                <!--<div class="p-3 d-flex border-bottom align-items-center contact online customer" data-customer-id="{{$client->id}}">-->
                                <!--    <img class="avatar-sm rounded-circle mr-3" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="alt">-->
                                <!--    <h6>{{$client->ProfileName}}</h6></br>-->
                               
                                <!--</div>-->
                                <!--	@endforeach-->
                              </div>  
                                
                             
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
                            <div class="d-flex align-items-center chat-header">
                                <img class="avatar-sm rounded-circle mr-2" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="alt">
                                
                                
                                
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
                                           <img src="admin/dist-assets/images/gender-neutral-user-v3.png" height="80" width="80" />
                                           </button>
                                           <h4 class="pt-2">RDGENO PEACE</h4>
                                           <hr style="margin-top:0px;border: 1px solid green; width:100%">
                                           
                                         
                                               
                                               
                                                    </div> 
                                                     <div class="text m-2"> 
                                                      <div class="agent">
                                                 <span style="color:#0889FF;font-size:17px"><a style=" cursor: pointer;"  type="button" data-toggle="modal" data-target="#exampleModalCenter">
             Assigned To
 
                   </a>
                  
                   
                   <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         <form id="agent-form">
@csrf
             <input type="hidden" name="customer" id="assigned" value="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Assign To</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    
    <select class="form-control" name="agent">
        @foreach($agents as $agent)
       <option value="{{$agent->id}}">{{$agent->name}}</option> 
       @endforeach
    </select>
    <!--<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">-->
   
  </div>

  
  
 
  
  <!--<button type="submit" class="btn btn-primary">Submit</button>-->

      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button  type="submit" class="btn btn-primary">Save </button>
      </div>
      </form>
    </div>
  </div>
</div>
                                                </span>
                                                <p></p>
                                                </div>
                                                  <div class="number">
                                                <i class="text-15 i-Envelope-2 pt-2"></i>
                                              
                                                <span> (504) 515-0756 </span>
                                                </div>
                                                <br>
                                                <i class="text-15 i-Telephone pt-2"></i><span>  RDGENO PEACE </span> <br><br><br>
                                                </div> 
                                               
                                                   
                                                    </div>
                                                    
</div>
                        </div>
                    </div>
                   
                        
                        
                        
                      
                    </div>
                    
                    
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>  

    $(document).ready(function() {
    updateCustomerList('all');
    });
    
    

var intervalId;
$(document).on('click', '.customer', function() {
    let customerId = $(this).data('customer-id');
   
   
  switchToCustomer(customerId); 
   




});


function switchToCustomer(customerId)
{
    if (intervalId) {
    clearInterval(intervalId);
  }
   $('#message-form').attr('data-customer-id', customerId);
     $('#agent-form').attr('assigned', customerId);
//   $('#assigned').val(customerId);
   
     $.ajax({
    url: '/customer/' + customerId,
    method: 'GET',
    success: function(response) {
      $('.chat-header p').text(response.ProfileName);
      $('.card h4').text(response.ProfileName);
       $('.number span').text(response.number);
      
   
     if(response.agent) {
    $('.agent p').text(response.agent);
  }
  else
  {
       $('.agent p').text('');
  }
       
    },
    error: function(error) {
      console.log(error);
    }
  });
  
  intervalId= setInterval(function() {
    // Check for new messages using AJAX
     var lastMessageId = $('.message:last').data('id') || 0; // get the ID of the last displayed message
     $.ajax({
        url: '/messages/new/' + customerId + '/' + lastMessageId,
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
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">' + moment(message.created_at).format('h:mm a') + '</p>' +
			'</div>'+
		  '</div>';
		  
		  var messageHtml1='<div class="d-flex justify-content-end">'+
			'<div>'+
			  '<p class="small p-2 me-3 mb-1 text-white " style="background-color: #0889FF; width:300px;border-radius:15px;">'+message.body+'</p>'+
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">' + moment(message.created_at).format('h:mm a') + '</p>' +
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
        url: '/messages/' + customerId,
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
			 '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">' + moment(message.created_at).format('h:mm a') + '</p>' +
			'</div>'+
		  '</div>';
		  
		  var messageHtml1='<div class="d-flex justify-content-end">'+
			'<div>'+
			  '<p class="small p-2 me-3 mb-1 text-white " style="background-color: #0889FF; width:300px;border-radius:15px;">'+message.body+'</p>'+
			   '<p class="small ms-3 mb-3 rounded-3 text-muted float-end">' + moment(message.created_at).format('h:mm a') + '</p>' +
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



function updateCustomerList(filter) {
    console.log(filter);
    $.ajax({
        url: '/filter-customers',
        data: { filter: filter },
        success: function(customers) {
            // clear the existing customer list
            $('#customer-list').empty();

            // loop through the retrieved customers and add them to the list
            $.each(customers, function(index, customer) {
                // create the HTML for the customer item
                
                     	var customerHtml='<div class="p-3 d-flex border-bottom align-items-center contact online customer" data-customer-id="'+ customer.id +'">'+
                                '<img class="avatar-sm rounded-circle mr-3" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="alt">'+
                              '<h6>' + customer.ProfileName +'</h6>'+
                              '</br>'+
                               
                                '</div>';
                
                

                $('#customer-list').append(customerHtml);
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
         url: '/save-message',
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
   
    
    
    
    

$('#agent-form').on('submit', function(event) {
        event.preventDefault();
var customerId = $('#agent-form').attr('assigned');

        
        var $mySelect = $(this).find('select[name="agent"]');
var agent = $mySelect.val();
      
       
        saveAgent(agent, customerId);

       
    });
    



    
 function saveAgent(agent, customerId) {
//      $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
    $.ajax({
         url: '/assigned',
        method: 'POST',
        data: {
            agent: agent,
            customer_id: customerId
        },
        success: function(data) {
             $('#exampleModalCenter').modal('hide');
        }
    });
}
   





</script>  
      
@endsection