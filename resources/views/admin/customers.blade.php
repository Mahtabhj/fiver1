@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Customer Search</h1>
        <ul>
            
           
        </ul> 
    </div>
    <div class="row">
        <form method="GET" action="" >
            <div class="form-group answer">
                   <table class="table meta" >                                
                        <tr style="color: #808080;">  
                            <td>Search by name<input type="Date" name="date" placeholder="NAME" class="form-control name_list" /></td>
                            <td>Search by number<input type="number" type="Date" name="date1" placeholder="(XXX) XXX-XXXX" class="form-control name_list" /></td>
                            <td><div class="container" style="padding-top:20px;"><button id="sodo" class="btn btn-primary" name="submit" type="submit">search</button></div></td>
                         </tr>  
                   </table>  
                </div> 

</form>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <span class="warning">WARNING: phone number required . All customers phone number and email should be unique.</span>
    <div class="row">
        
        <div class="col-md-6">
            <form class="form-horizontal" method="post" action="/save_profile" enctype='multipart/form-data'>
                <!-- Title -->
                @csrf
                 @error('password')
<span class="text-danger">{{$message}}</span>
@enderror
                <div class="form-group">
                   
                    <label class="control-label col-lg-2" for="title">FIRST NAME</label>
                    <div class="col-lg-8"> 
                      <input type="text" class="form-control" name="name" id="title" value="" placeholder="customer first name" required>
                      <input type="hidden" class="form-control" name="id" id="title" value="" placeholder="Name" required>
                    </div>
                </div> 
                <!-- Title -->
               
                <!-- Title -->
                
               <div class="form-group">
                    <label class="control-label col-lg-2" for="title">EMAIL</label>
                    <div class="col-lg-8"> 
                      <input type="email" class="form-control" name="email" value="" placeholder="customer email" required>
                    </div>
                </div> 
               <!-- Title -->
                
                <!-- Title -->
                <div class="form-group">
                    <label class="control-label col-lg-8" for="title">DATE OF BIRTH </label>
                    <div class="col-lg-8"> 
                      <input type="password" class="form-control" name="password" id="title" placeholder="MM/DD/YYYY" >
                    </div>
                </div> 
                <!-- Title -->
                <div class="form-group">
                    <label class="control-label col-lg-2" for="title">APARTMENT</label>
                    <div class="col-lg-8"> 
                      <input type="password" class="form-control" name="c_password"  placeholder="customer apartment" >
                    </div>
                </div> 
            
                <!-- Title -->
               
                <!-- Buttons -->
                <div class="form-group">
                    <!-- Buttons -->
                    <div class="col-lg-offset-2 col-lg-6">
                      <button type="submit" class="btn btn-sm btn-primary">submit</button>
                      
                     </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form class="form-horizontal" method="post" action="" enctype='multipart/form-data'>
                <!-- Title -->
                @csrf
                 @error('password')
<span class="text-danger">{{$message}}</span>
@enderror
                <div class="form-group">
                   
                    <label class="control-label col-lg-2" for="title">LAST NAME</label>
                    <div class="col-lg-8"> 
                      <input type="text" class="form-control" name="name" id="title" value="" placeholder="customer last name" required>
                      <input type="hidden" class="form-control" name="id" id="title" value="" placeholder="Name" required>
                    </div>
                </div> 
                <!-- Title -->
               
                <!-- Title -->
                
               <div class="form-group">
                    <label class="control-label col-lg-2" for="title">PHONE NO.</label>
                    <div class="col-lg-8"> 
                      <input type="number" class="form-control" name="email" value="" placeholder="(015)" required>
                    </div>
                </div> 
               <!-- Title -->
                
                <!-- Title -->
                <div class="form-group">
                    <label class="control-label col-lg-8" for="title">ADDRESS</label>
                    <div class="col-lg-8"> 
                      <input type="password" class="form-control" name="password" id="title" placeholder="customer address" >
                    </div>
                </div> 
                <!-- Title -->
              
            
                <!-- Title -->
               
                <!-- Buttons -->
               
            </form>
        </div>
       
                </div>
            
      
    </div>
        </div>
      
    </div>
    @endsection