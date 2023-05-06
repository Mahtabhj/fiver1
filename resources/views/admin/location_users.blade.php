@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Location Users</h1>
        <ul>
            
             <li><button class="btn btn-success"  type="button" data-toggle="modal" data-target="#exampleModalCenter">
              Add New

                   </button>
                   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         <form action="{{ route('location_users.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Location User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <select class="custom-select"  name="location_id">
              
                 <option value="1">Select Location </option> 
                  @foreach ($locations as $location)
                 <option value="{{ $location->id }}">{{ $location->name }}</option>
                 @endforeach
                </select>
  <br><br>
  <div class="custom-file">
       <strong>Image:</strong>
                                        <input class="custom-file-input" name="image1" type="file">
                                        <label class="custom-file-label">Choose Image</label>
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
</div></li>
        </ul> 
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>IMAGE</th>
                                <th>NAME</th>
        <th>Email</th>
        <th>LOCATION</th>
        
       
        <th>OPTIONS</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                        @foreach ($location_users as $location_user)      
                        
                            <tr>
                                <td><img src="/images/{{ $location_user->image }}" width="100px"></td>
                                 <td class="custom-ui-border">{{ $location_user->name }}</td>
        <td class="custom-ui-border">{{ $location_user->email }}</td>
        <td class="custom-ui-border">{{ $location_user->locationname }}</td>
       

    <td><button class="btn btn-success"  type="button" data-toggle="modal" data-target="#editModalCenter{{ $location_user->id }}">
              Edit

                   </button>
                   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editModalCenter{{ $location_user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         <form action="{{ route('location_users.update',$location_user->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
        @method('PUT')
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Location User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" value="{{ $location_user->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control"value="{{ $location_user->email }}" placeholder="Enter Email">
   
  </div>
  <select class="custom-select"  name="location_id" value="{{ $location_user->location_id }}">
      @php 
      $selected = "selected";
      @endphp 
              
                 <option value="0">Select Location </option> 
                
                  @foreach ($locations as $location)
                 <option value="{{ $location->id }}" @if ($location->name == $location_user->locationname) {{ $selected }} @endif >{{ $location->name }}</option>
                 @endforeach
                </select>
  <br><br>
  <div class="custom-file">
       
                                        <input class="custom-file-input" name="image1" type="file">
                                        <label class="custom-file-label">Choose Image</label>
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
           
           <form method="post" action="{{route('location_users.destroy',$location_user->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
           </td>
                            </tr>
                           
                         @endforeach
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                                <th>IMAGE</th>
                                <th>NAME</th>
        <th>Email</th>
        <th>LOCATION</th>
                          
                            <th>OPTIONS</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>
      
    </div>
    @endsection