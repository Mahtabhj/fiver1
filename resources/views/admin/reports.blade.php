@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Reports</h1>
        <ul>
            <li>Visit Report</li>
           
        </ul> 
    </div>
  
    <div class="row">
       
           
                   <table class="table" >                                
                        <tr style="color: #808080;">  
                            <td>Search by phone<input type="text" name="date" placeholder="enter customer phone" class="form-control name_list" /></td>
                            <td>From<input type="number" type="Date" name="date1" placeholder="From Date" class="form-control name_list" /></td>
                            <td>To<input type="number" type="Date" name="date1" placeholder="To Date" class="form-control name_list" /></td>
                            <td><div class="container" style="padding-top:20px;"><button id="sodo" class="btn btn-primary" name="submit" type="submit">Filter</button></div></td>
                         </tr>  
                   </table>  
            


    </div>
    <div class="separator-breadcrumb border-top"></div>
    
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                               
        <th>CUSTOMER ID</th>
        <th>CUSTOMER NAME</th>
        <th>CUSTOMER PHONE</th>
        <th>TOTAL VISIT</th>
       
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                               
       
        
        <td class="custom-ui-border">1650</td>
        <td class="custom-ui-border">NEW 1</td>
        <td class="custom-ui-border">(976)-464545</td>
        <td class="custom-ui-border">6</td>
        
    
                            </tr>
                           
                                              
                                                                   
                        </tbody>
                       
                    </table>
                </div>
            
      
    </div>
        </div>
       
                </div>
            
      
    </div>
        </div>


        {{-- 2nd part --}}

        <div class="breadcrumb">
           
            <ul>
                <li>Point Report</li>
               
            </ul> 
        </div>
      
        <div class="row">
           
               
                       <table class="table" >                                
                            <tr style="color: #808080;">  
                                <td>Search by phone<input type="text" name="date" placeholder="enter customer phone" class="form-control name_list" /></td>
                                <td>From<input type="number" type="Date" name="date1" placeholder="From Date" class="form-control name_list" /></td>
                                <td>To<input type="number" type="Date" name="date1" placeholder="To Date" class="form-control name_list" /></td>
                                <td><div class="container" style="padding-top:20px;"><button id="sodo" class="btn btn-primary" name="submit" type="submit">Filter</button></div></td>
                             </tr>  
                       </table>  
                
    
    
        </div>
        <div class="separator-breadcrumb border-top"></div>
        
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                   
            <th>CUSTOMER ID</th>
            <th>CUSTOMER NAME</th>
            <th>CUSTOMER PHONE</th>
            <th>TOTAL VISIT</th>
           
          
                                </tr>
                            </thead>
                            <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                          
                                 
                            
                                <tr>
                                   
           
            
            <td class="custom-ui-border">1650</td>
            <td class="custom-ui-border">NEW 1</td>
            <td class="custom-ui-border">(976)-464545</td>
            <td class="custom-ui-border">6</td>
            
        
                                </tr>
                               
                                                  
                                                                       
                            </tbody>
                           
                        </table>
                    </div>
                
          
        </div>
            </div>
           
                    </div>
                
          
        </div>
            </div>
          
    </div>
    @endsection