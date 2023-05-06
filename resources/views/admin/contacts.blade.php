@extends('admin.include.layout')
@section('content')
<style>
    .nav-pills .nav-link.active{
        color:#363740 !important;
        font-weight:900;
        background-color: #f2efef;
    }
</style>
<div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Contacts</h4>
                                <ul class="nav nav-pills" id="myPillTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="true">Smart List</a></li>
                                    <li class="nav-item"><a class="nav-link" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"> Bulk Action</a></li>
                                    <li class="nav-item"><a class="nav-link" id="contact-icon-pill" data-toggle="pill" href="#contactPIll" role="tab" aria-controls="contactPIll" aria-selected="false"> Restore </a></li>
                                    
                                     <li class="nav-item"><a class="nav-link" id="task-icon-pill" data-toggle="pill" href="#taskPIll" role="tab" aria-controls="taskPIll" aria-selected="false"> Tasks</a></li>
                                    <li class="nav-item"><a class="nav-link" id="company-icon-pill" data-toggle="pill" href="#companyPIll" role="tab" aria-controls="companyPIll" aria-selected="false"> Company</a></li>
                                    
                                </ul>
                                
                                
                                
                                
                                
                                
                                <div class="tab-content" id="myPillTabContent">
                                    <div class="tab-pane fade active show" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                                        
                                        <div class="row">
                                            <div class="col-md-10"></div>
                                             <div class="col-md-2">
                                                 <button class="btn btn-success"  type="button" data-toggle="modal" data-target="#exampleModalCenter">
              Add New

                   </button>
                   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
         <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" required>
   @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
   @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" required>
   
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Contact Type</label>
    <select  name="contact_type" class="form-control" required>
        <Option value="lead">Lead</Option>
        <Option value="customer">Customer</Option>
    </select>
 
   
  </div>
  
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
</div>


                                             </div>
                                        </div>
                                        <br><br>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                               
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Created</th>
         <th>Last Activity</th>
          <th>Tag</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        @foreach($contacts as $contact)
                            <tr>
                                 <td class="custom-ui-border">
                                     <img class="img-mainpro" style="height:50px;width:50px" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp">{{$contact->ProfileName}}
                                     
                                     </td>
        <td class="custom-ui-border">{{$contact->number}}</td>
        <td class="custom-ui-border">{{$contact->email}}</td>
        <td class="custom-ui-border">{{ $contact->created_at->format('M d, Y') }}</td>
        <td class="custom-ui-border">{{ $contact->created_at->diffForHumans() }}</td>
        <td class="custom-ui-border">Customer</td>

    
                            </tr>
                            @endforeach
                           
                         
                        
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                           <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Created</th>
         <th>Last Activity</th>
          <th>Tag</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>

                                    </div>
                                    
                                    <div class="tab-pane fade" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
        <th>Name</th>
        <th>Bulk Operation (Type)</th>
        <th>Status</th>
        <th>Created</th>
        <th>User</th>
        <th>Completed</th>
        <th>Statistics</th>
        <th>Action</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                                  <td class="custom-ui-border">
                                    2/23 180 No Visit  </td>
        <td class="custom-ui-border">Bulk SmS</td>
        <td class="custom-ui-border">Completed</br><a href="">view details</a> </td>
        <td class="custom-ui-border">Feb 2, 2023</br> 6:28Am (GST)</td>
        <td class="custom-ui-border">Cess Lopez</td>
        <td class="custom-ui-border">Feb 2, 2023 6:28Am</td>
       <td class="custom-ui-border"><a href="">Show Statistics</a></td>
       <td class="custom-ui-border">...</td>
    
                            </tr>
                           <tr>
                                  <td class="custom-ui-border">
                                    2/23 180 No Visit  </td>
        <td class="custom-ui-border">Bulk SmS</td>
        <td class="custom-ui-border">Completed</br><a href="">view details</a> </td>
        <td class="custom-ui-border">Feb 2, 2023</br> 6:28Am (GST)</td>
        <td class="custom-ui-border">Cess Lopez</td>
        <td class="custom-ui-border">Feb 2, 2023 6:28Am</td>
       <td class="custom-ui-border"><a href="">Show Statistics</a></td>
       <td class="custom-ui-border">...</td>
    
                            </tr>
                               <tr>
                                  <td class="custom-ui-border">
                                    2/23 180 No Visit  </td>
        <td class="custom-ui-border">Bulk SmS</td>
        <td class="custom-ui-border">Completed</br><a href="">view details</a> </td>
        <td class="custom-ui-border">Feb 2, 2023</br> 6:28Am (GST)</td>
        <td class="custom-ui-border">Cess Lopez</td>
        <td class="custom-ui-border">Feb 2, 2023 6:28Am</td>
       <td class="custom-ui-border"><a href="">Show Statistics</a></td>
       <td class="custom-ui-border">...</td>
    
                            </tr>
                               <tr>
                                  <td class="custom-ui-border">
                                    2/23 180 No Visit  </td>
        <td class="custom-ui-border">Bulk SmS</td>
        <td class="custom-ui-border">Completed</br><a href="">view details</a> </td>
        <td class="custom-ui-border">Feb 2, 2023</br> 6:28Am (GST)</td>
        <td class="custom-ui-border">Cess Lopez</td>
        <td class="custom-ui-border">Feb 2, 2023 6:28Am</td>
       <td class="custom-ui-border"><a href="">Show Statistics</a></td>
       <td class="custom-ui-border">...</td>
    
                            </tr>
                               <tr>
                                  <td class="custom-ui-border">
                                    2/23 180 No Visit  </td>
        <td class="custom-ui-border">Bulk SmS</td>
        <td class="custom-ui-border">Completed</br><a href="">view details</a> </td>
        <td class="custom-ui-border">Feb 2, 2023</br> 6:28Am (GST)</td>
        <td class="custom-ui-border">Cess Lopez</td>
        <td class="custom-ui-border">Feb 2, 2023 6:28Am</td>
       <td class="custom-ui-border"><a href="">Show Statistics</a></td>
       <td class="custom-ui-border">...</td>
    
                            </tr>
                        
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                           <th>Name</th>
        <th>Bulk Operation (Type)</th>
        <th>Status</th>
        <th>Created</th>
        <th>User</th>
        <th>Completed</th>
        <th>Statistics</th>
        <th>Action</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>

                                    </div>
                                    
                                    <div class="tab-pane fade" id="contactPIll" role="tabpanel" aria-labelledby="contact-icon-pill">  <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="select-all"></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
       
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                                <td><input type="checkbox" class="record-checkbox" value=""></td>
                             
                               <td class="custom-ui-border">  Tom Cruise
                                     
                                     </td>
        <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
                            </tr>
 <tr>
                                <td><input type="checkbox" class="record-checkbox" value=""></td>
                             
                               <td class="custom-ui-border">  Tom Cruise
                                     
                                     </td>
        <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" class="record-checkbox" value=""></td>
                             
                               <td class="custom-ui-border">  Tom Cruise
                                     
                                     </td>
        <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" class="record-checkbox" value=""></td>
                             
                               <td class="custom-ui-border">  Tom Cruise
                                     
                                     </td>
        <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" class="record-checkbox" value=""></td>
                             
                               <td class="custom-ui-border">  Tom Cruise
                                     
                                     </td>
        <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
                            </tr>
                        
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                            <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div></div>
        
        <div class="tab-pane fade" id="taskPIll" role="tabpanel" aria-labelledby="task-icon-pill">  <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name and description</th>
        <th>Contact</th>
        <th>Assigne</th>
        <th>Due Date</th>
        <th>Due Date</th>
        <th>Status</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                    <tr>
                       <td class="custom-ui-border">Json</td> 
                        <td class="custom-ui-border">(832) 524-2596</td>
                        <td class="custom-ui-border">Chris Colin</td> 
                         <td class="custom-ui-border">May 5, 2023</td> 
                          <td class="custom-ui-border">May 5, 2023</td> 
                           <td class="custom-ui-border">Pending</td> 
                    </tr>
                      <tr>
                       <td class="custom-ui-border">Json</td> 
                        <td class="custom-ui-border">(832) 524-2596</td>
                        <td class="custom-ui-border">Chris Colin</td> 
                         <td class="custom-ui-border">May 5, 2023</td> 
                          <td class="custom-ui-border">May 5, 2023</td> 
                           <td class="custom-ui-border">Pending</td> 
                    </tr>
                            
                        </tbody>
                        <tfoot>
                           <tr>
                          <th>Name and description</th>
        <th>Contact</th>
        <th>Assigne</th>
        <th>Due Date</th>
        <th>Due Date</th>
        <th>Status</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div></div>
        <div class="tab-pane fade" id="companyPIll" role="tabpanel" aria-labelledby="company-icon-pill">  <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Company Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Created By</th>
        <th>Created Date</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                        <tr>
                             <td class="custom-ui-border">Crown Bingo</td>
                             <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
        <td class="custom-ui-border">Chris colin</td>
        <td class="custom-ui-border">May 26, 2019</td>
        
                        </tr>  
                        <tr>
                             <td class="custom-ui-border">Crown Bingo</td>
                             <td class="custom-ui-border">(832) 524-2596</td>
        <td class="custom-ui-border">harry@bingo.com</td>
        <td class="custom-ui-border">Chris colin</td>
        <td class="custom-ui-border">May 26, 2019</td>
        
                        </tr>  
                       
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                           <th>Company Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Created By</th>
        <th>Created Date</th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div></div>
                                </div>
                            </div>
                        </div>
    @endsection