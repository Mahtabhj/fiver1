@extends('admin.include.layout')
@section('content')

<style>
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
  animation: fadeIn 1s ease-in;
  
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

<script>
    // Video tutorial/codealong here: https://youtu.be/fCpw5i_2IYU

$( '.friend-drawer--onhover' ).on( 'click',  function() {
  
  $( '.chat-bubble' ).hide('slow').show('slow');
  
});

// Video tutorial/codealong here: https://youtu.be/fCpw5i_2IYU
</script>

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
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
		  <div class="text">
			<h6>Robo Cop</h6>
			<p class="text-muted">Hey, you're arrested!</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
		  <div class="text">
			<h6>Optimus</h6>
			<p class="text-muted">Wanna grab a beer?</p>
		  </div>
		  <span class="time text-muted small">00:32</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover ">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/real-terminator.png" alt="">
		  <div class="text">
			<h6>Skynet</h6>
			<p class="text-muted">Seen that canned piece of s?</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/termy.jpg" alt="">
		  <div class="text">
			<h6>Termy</h6>
			<p class="text-muted">Im studying spanish...</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
			<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/robocop.jpg" alt="">
		  <div class="text">
			<h6>Robo Cop</h6>
			<p class="text-muted">Hey, you're arrested!</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
		  <div class="text">
			<h6>Optimus</h6>
			<p class="text-muted">Wanna grab a beer?</p>
		  </div>
		  <span class="time text-muted small">00:32</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover ">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/real-terminator.png" alt="">
		  <div class="text">
			<h6>Skynet</h6>
			<p class="text-muted">Seen that canned piece of s?</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/termy.jpg" alt="">
		  <div class="text">
			<h6>Termy</h6>
			<p class="text-muted">Im studying spanish...</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/rick.jpg" alt="">
		  <div class="text">
			<h6>Richard</h6>
			<p class="text-muted">I'm not sure...</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
		<hr>
		<div class="friend-drawer friend-drawer--onhover">
		  <img class="profile-image" src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/rachel.jpeg" alt="">
		  <div class="text">
			<h6>XXXXX</h6>
			<p class="text-muted">Hi, wanna see something?</p>
		  </div>
		  <span class="time text-muted small">13:21</span>
		</div>
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
		<div class="chat-panel" >
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3 offset-md-9">
			  <div class="chat-bubble chat-bubble--right">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3 offset-md-9">
			  <div class="chat-bubble chat-bubble--right">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3 offset-md-9">
			  <div class="chat-bubble chat-bubble--right">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3 offset-md-9">
			  <div class="chat-bubble chat-bubble--right">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3 offset-md-9">
			  <div class="chat-bubble chat-bubble--right">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3">
			  <div class="chat-bubble chat-bubble--left">
				Hello dude!
			  </div>
			</div>
		  </div>
		  <div class="row no-gutters">
			<div class="col-md-3 offset-md-9">
			  <div class="chat-bubble chat-bubble--right">
				Hello dude!
			  </div>
			</div>
		  </div>
		 
		</div>
		<div class="row" >
		    <div class="col-md-12">
		        <textarea class="form-control" aria-label="With textarea" placeholder="type a message"></textarea>
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
	  </div>
	</div>
  </div>

@endsection