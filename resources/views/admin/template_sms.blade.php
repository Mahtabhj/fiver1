@extends('admin.include.layout')
@section('content')

<style>
.sent{
    background-color:#0889FF !important;
    color:#fff;
}
input {
  text-align: center;
}

::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  text-align: center;
}
.right{
    position: absolute;
  right: 0px;
 
  padding: 10px;
}
.chat-panel{
  
    max-height: 500px;
    overflow-y : auto;
     overflow-x: hidden;
}
.filter-icons{
    padding:5px;
}
.contents_scroll{
     max-height: 600px;
    overflow-y : auto;
     overflow-x: hidden;
}
.filtes{
    padding-left:20px;
   display:inline-block;
}

.container {
  margin: 20px;
  background: #fff;
  padding: 0;
  border-radius: 7px;
}

.profile-image {
  width: 50px;
  height: 50px;
  border-radius: 40px;
}

.settings-tray {
  background: #eee;
  padding: 10px 15px;
  border-radius: 7px;
  
  .no-gutters {
    padding: 0;
  }
  
  &--right {
    float: right;
    
    i {
      margin-top: 10px;
      font-size: 25px;
      color: grey;
      margin-left: 14px;
      transition: .3s;
      
      &:hover {
        color: $blue;
        cursor: pointer;
      }
    }
  }
}




.friend-drawer {
    cursor: pointer;
  padding: 10px 15px;
  display: flex;
  vertical-align: baseline;
  background: #fff;
  transition: .3s ease;
  
  &--grey {
    background: #eee;
  }
  
 
    
  
  
  .time {
    color: grey;
  }
  
  &--onhover:hover {
    background: $blue;
    cursor: pointer;
    
    p,
    h6,
    .time {
      color: #fff !important;
    }
  }
}

hr {
  margin: 5px auto;
  width: 60%;
}

.chat-bubble {
  padding: 10px 14px;
  background: #eee;
  margin: 10px 30px;
  border-radius: 9px;
  position: relative;
  /*animation: fadeIn 1s ease-in;*/
  
  &:after {
    content: '';
    position: absolute;
    top: 50%;
    width: 0;
    height: 0;
    border: 20px solid transparent;
    border-bottom: 0;
    margin-top: -10px;
  }
  
  &--left {
     &:after {
      left: 0;
      border-right-color: #eee;
	    border-left: 0;
      margin-left: -20px;
    }
  }
  
  &--right {
    &:after {
      right: 0;
      border-left-color: $blue;
	    border-right: 0;
      margin-right: -20px;
    }
  }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}


.offset-md-9 {
  .chat-bubble {
    background: $blue;
    color: #fff;
  }
}

.chat-box-tray {
  background: #eee;
  display: flex;
  align-items: baseline;
  padding: 10px 15px;
  align-items: center;
  margin-top: 19px;
  bottom: 0;
  
  
  i {
    color: grey;
    font-size: 30px;
    vertical-align: middle;
    
    &:last-of-type {
      margin-left: 25px;
    }
  }
}
</style>



 <div class="container-fluid">
	<div class="row no-gutters">
	  <div class="col-md-4 border-right">
		<div class="settings-tray">
		  <!--<img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/filip.jpg" alt="Profile img">-->
		  <span class="settings-tray--right">
		      <div class="row">
		          <div class="col-md-4"><a href="" class="filtes"><h5>Conversations</h5></a></div>
		          <div class="col-md-4"><a href="" class="filtes"><h5>Manual</h5></a></div>
		          <div class="col-md-4"><a href="" class="filtes"><h5>Actions</h5></a></div>
		         
		      </div>
		      <hr>
		      <div class="row">
		          <div class="col-md-3"><a href="" class="filtes"><h3>Unread</h3></a></div>
		          <div class="col-md-3"><a href="" class="filtes"><h3>Resent</h3></a></div>
		          <div class="col-md-3"><a href="" class="filtes"><h3>Starred</h3></a></div>
		          <div class="col-md-3"> <a href="" class="filtes"><h3>All</h3></a></div>
		      </div>
		      
		      
		      
		     
			<!--<i class="material-icons">cached</i>-->
			<!--<i class="material-icons">message</i>-->
			<!--<i class="material-icons">menu</i>-->
		  </span>
		<!--  	<div class="search-box">-->
		<!--  <div class="input-wrapper">-->
		<!--	<i class="fa-solid fa-magnifying-glass"></i>-->
		<!--	<input class="form-control" placeholder="Search here" type="text">-->
		<!--	 <i class="fa-solid fa-filter"></i>-->
		<!--  </div>-->
		 
		<!--</div>-->
		<div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span></div>
                                    <input class="form-control" type="text" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                    <div class="filter-icons">
                                    	 <i class="fa-solid fa-filter" style="font-size:20px;"></i>
                                    	 <i class="fa-solid fa-file-pen" style="font-size:20px;"></i>
                                    </div>
                                </div>
                                
		</div>
	
		<div class="contents_scroll">
		    
		   @foreach($clients as $client)  
		   
		<div class="friend-drawer friend-drawer--onhover customer" data-customer-id="{{$client->id}}">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
		  <div class="text">
			<h6 style="padding:3px;">{{$client->ProfileName}}</h6>
			<p class="text-muted" style="padding:3px;">{{$client->msg}}</p>
		  </div>
		  <!--<span class="time text-muted small">13:21</span>-->
		</div>
		
		<hr>
		@endforeach
	
	
		</div>
	  </div>
	  <div class="col-md-8 ">
	      
		<div class="settings-tray">
		    
			<div class="">
			   
			 <div class="row">
			        <div class="col-md-1">
			            <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
			        </div>
			        <div class="col-md-2">
			            	
			  <h4 style="padding-top:15px;">Robo Cop</h4>
			  <!--<p class="text-muted">Layin' down the law since like before Christ...</p>-->
		
			        </div>
			         <div class="col-md-3">
			            
			        </div>
			        <div class="col-md-3">
			            	<span class="right">
			            	     <p style="font-size:20px;"><i class="fa-solid fa-star style="font-size:20px;""></i> Starred</p>
			 
			 
			</span>
			        </div>
			         <div class="col-md-3">
			            	<span class="right">
			            	  
			  <p style="font-size:20px;"><i class="fa-solid fa-envelope-open-text" > </i> Mard As Read</p>
			 
			</span>
			        </div>
			    </div>
		
			
		
		  </div>
		</div>
		<div class="chat-panel chat-history" >
	<div id="chat-box">
	    
	</div>
		  
		 
		</div>
		<form id="message-form">
        @csrf
		<div class="row" >
		    <div class="col-md-12">
		        <input type="hidden" name="customer_id" id="customer-id-input">
		        <textarea name=message class="form-control" aria-label="With textarea" placeholder="type a message"></textarea>
		    </div>
		</div>
		 <div class="row" style="padding:20px;">
			<div class="col-md-3">
			    <i style="font-size:20px;" class="fa-solid fa-paperclip"></i>&nbsp &nbsp
			 <i style="font-size:20px;" class="fa-solid fa-face-smile"></i>
			</div>
				<div class="col-md-3">
			 
			</div>
				<div class="col-md-4">
			
			</div>
				<div class="col-md-2">
			 <button class="btn btn-success">Send Now | <i class="fa-solid fa-face-smile"></i></button>
			</div>
		  </div>
		  </form>
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
        // var messageHtml = '<div class="message">' +
        //     '<div class="message-body">' + message.body + '</div>' +
        //     '<div class="message-time">' + message.created_at + '</div>' +
        //     '</div>';
        
        
        
         var messageHtml='<div class="row no-gutters">'+
			'<div class="col-md-3">'+
			  '<div class="chat-bubble chat-bubble--left">'+
				message.body+'</div>'+
			'</div>'+
		  '</div>';
		  
		  var messageHtml1='<div class="row no-gutters">'+
			'<div class="col-md-3 offset-md-9">'+
			  '<div class="chat-bubble sent chat-bubble--left">'+
				message.body+'</div>'+
			'</div>'+
		  '</div>';
	
        
        
    // var messageHtml=   '<li class="clearfix">' +
    //         '<div class="message-data text-right">' +
    //         '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
    //             '</div>' +
    //             '<div class="message other-message float-right">' + message.body + '</div>' +
    //                     '</li>';
        
    //         var messageHtml1=   '<li class="clearfix">' +
    //         '<div class="message-data">' +
    //         '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
    //             '</div>' +
    //             '<div class="message my-message">' + message.body + '</div>' +
    //                     '</li>';
        
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
        // var messageHtml = '<div class="message">' +
        //     '<div class="message-body">' + message.body + '</div>' +
        //     '<div class="message-time">' + message.created_at + '</div>' +
        //     '</div>';
//  var messageHtml=   '<li class="clearfix">' +
//             '<div class="message-data text-right">' +
//             '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
//                 '</div>' +
//                 '<div class="message other-message float-right">' + message.body + '</div>' +
//                         '</li>';
        
//             var messageHtml1=   '<li class="clearfix">' +
//             '<div class="message-data">' +
//             '<span class="message-data-time">' + message.created_at + '</span>' +
                                                  
//                 '</div>' +
//                 '<div class="message my-message">' + message.body + '</div>' +
//                         '</li>';

var messageHtml='<div class="row no-gutters">'+
			'<div class="col-md-3">'+
			  '<div class="chat-bubble chat-bubble--left">'+
				message.body+'</div>'+
			'</div>'+
		  '</div>';
		  
		  var messageHtml1='<div class="row no-gutters">'+
			'<div class="col-md-3 offset-md-9">'+
			  '<div class="chat-bubble sent chat-bubble--left">'+
				message.body+'</div>'+
			'</div>'+
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