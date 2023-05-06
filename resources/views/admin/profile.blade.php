@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Profile</h1>
        <ul>
            
            
        </ul> 
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form class="form-horizontal" method="post" action="/save_profile" enctype='multipart/form-data'>
                        <!-- Title -->
                        @csrf
                         @error('password')
<span class="text-danger">{{$message}}</span>
@enderror
                        <div class="form-group">
                           
                            <label class="control-label col-lg-2" for="title">Name</label>
                            <div class="col-lg-8"> 
                              <input type="text" class="form-control" name="name" id="title" value="{{ $user['name'] }}" placeholder="Name" required>
                              <input type="hidden" class="form-control" name="id" id="title" value="{{ $user['id'] }}" placeholder="Name" required>
                            </div>
                        </div> 
                        <!-- Title -->
                       
                        <!-- Title -->
                        
                       <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Email</label>
                            <div class="col-lg-8"> 
                              <input type="email" class="form-control" name="email" value="{{ $user['email'] }}" placeholder="email" required>
                            </div>
                        </div> 
                       <!-- Title -->
                        
                        <!-- Title -->
                        <div class="form-group">
                            <label class="control-label col-lg-8" for="title">Password</label>
                            <div class="col-lg-8"> 
                              <input type="password" class="form-control" name="password" id="title" placeholder="********" >
                            </div>
                        </div> 
                        <!-- Title -->
                        <div class="form-group">
                            <label class="control-label col-lg-2" for="title">Confirm Password</label>
                            <div class="col-lg-8"> 
                              <input type="password" class="form-control" name="c_password"  placeholder="********" >
                            </div>
                        </div> 
                    
                        <!-- Title -->
                       
                        <!-- Buttons -->
                        <div class="form-group">
                            <!-- Buttons -->
                            <div class="col-lg-offset-2 col-lg-6">
                              <button type="submit" class="btn btn-sm btn-primary">Save</button>
                              
                             </div>
                        </div>
                    </form>
                </div>
              
    </div>
        </div>
      
    </div>
    @endsection