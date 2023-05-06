@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Locations</h1>
        <ul>
            
             <li><button class="btn btn-success"  type="button" data-toggle="modal" data-target="#exampleModalCenter">
              Add New

                   </button>
                   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         <form action="{{ route('locations.store') }}" method="POST">
             @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Location</h5>
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
                                <th>NAME</th>
        <th>EMAIL</th>
        
       
        <th>OPTIONS</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                        @foreach ($location as $loc)      
                        
                            <tr>
                                 <td class="custom-ui-border">{{ $loc->name }}</td>
        <td class="custom-ui-border">{{ $loc->email }}</td>
       

    <td><button class="btn btn-success"  type="button" data-toggle="modal" data-target="#editModalCenter{{ $loc->id }}">
              Edit

                   </button>
                   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editModalCenter{{ $loc->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         <form action="{{ route('locations.update',$loc->id) }}" method="POST">
              @csrf
        @method('PUT')
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="{{ $loc->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="{{ $loc->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
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
           
           <form method="post" action="{{route('locations.destroy',$loc->id)}}">
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
                            <th>NAME</th>
                            <th>EMAIL</th>
                            
                          
                            <th>OPTIONS</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>
      
    </div>
    @endsection