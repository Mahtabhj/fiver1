@extends('admin.include.layout')
@section('content')
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Logs</h1>
        <ul>
            
           
        </ul> 
    </div>
    <div class="row">
       
           
        <table class="table" >                                
             <tr style="color: #808080;">  
                 <td>Select type<select class="form-control"><option>Select type</option></select></td>
                 <td></td>
                 <td></td>
                 <td><div class="container" style="padding-top:20px;"><button id="sodo" class="btn btn-primary" name="submit" type="submit">search</button></div></td>
              </tr>  
        </table>  
 


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
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-info">copy</button>
                    <button class="btn btn-info">exel</button>
                    <button class="btn btn-info">csv</button>
                    <button class="btn btn-info">pdf</button>
                </div>
                <div class="col-md-4"></div>
            </div>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>DATE </th>
        <th>CUSTOMER ID</th>
        <th>CUSTOMER NAME</th>
        <th>LOG ID</th>
        <th>TYPE</th>
        <th>DETAIL</th>
        <th>AMOUNT</th>
        <th>COUPON</th>
        <th>USER</th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                            <tr>
                               
        <td class="custom-ui-border">02/01/2023

        </td>
        <td class="custom-ui-border">FG$%$%&f(433)34</td>
        <td class="custom-ui-border">4646</td>
        <td class="custom-ui-border">POINTS ADDED</td>
        <td class="custom-ui-border">1000 POINTS ADDED FOR NEW USER</td>
        <td class="custom-ui-border">1000</td>
        <td class="custom-ui-border">1 computer for 2 cents</td>
        <td class="custom-ui-border"></td>
        <td class="custom-ui-border">TCB REGISTER 4</td>
        
    
                            </tr>
                            <tr>
                               
                                <td class="custom-ui-border">02/01/2023
                        
                                </td>
                                <td class="custom-ui-border">FG$%$%&f(433)34</td>
                                <td class="custom-ui-border">4646</td>
                                <td class="custom-ui-border">POINTS ADDED</td>
                                <td class="custom-ui-border">1000 POINTS ADDED FOR NEW USER</td>
                                <td class="custom-ui-border">1000</td>
                                <td class="custom-ui-border">1 computer for 2 cents</td>
                                <td class="custom-ui-border"></td>
                                <td class="custom-ui-border">TCB REGISTER 4</td>
                                
                            
                                                    </tr>
                                                    <tr>
                               
                                                        <td class="custom-ui-border">02/01/2023
                                                
                                                        </td>
                                                        <td class="custom-ui-border">FG$%$%&f(433)34</td>
                                                        <td class="custom-ui-border">4646</td>
                                                        <td class="custom-ui-border">POINTS ADDED</td>
                                                        <td class="custom-ui-border">1000 POINTS ADDED FOR NEW USER</td>
                                                        <td class="custom-ui-border">1000</td>
                                                        <td class="custom-ui-border">1 computer for 2 cents</td>
                                                        <td class="custom-ui-border"></td>
                                                        <td class="custom-ui-border">TCB REGISTER 4</td>
                                                        
                                                    
                                                                            </tr>
                                                                            <tr>
                               
                                                                                <td class="custom-ui-border">02/01/2023
                                                                        
                                                                                </td>
                                                                                <td class="custom-ui-border">FG$%$%&f(433)34</td>
                                                                                <td class="custom-ui-border">4646</td>
                                                                                <td class="custom-ui-border">POINTS ADDED</td>
                                                                                <td class="custom-ui-border">1000 POINTS ADDED FOR NEW USER</td>
                                                                                <td class="custom-ui-border">1000</td>
                                                                                <td class="custom-ui-border">1 computer for 2 cents</td>
                                                                                <td class="custom-ui-border"></td>
                                                                                <td class="custom-ui-border">TCB REGISTER 4</td>
                                                                                
                                                                            
                                                                                                    </tr>
                                                                                                    <tr>
                               
                                                                                                        <td class="custom-ui-border">02/01/2023
                                                                                                
                                                                                                        </td>
                                                                                                        <td class="custom-ui-border">FG$%$%&f(433)34</td>
                                                                                                        <td class="custom-ui-border">4646</td>
                                                                                                        <td class="custom-ui-border">POINTS ADDED</td>
                                                                                                        <td class="custom-ui-border">1000 POINTS ADDED FOR NEW USER</td>
                                                                                                        <td class="custom-ui-border">1000</td>
                                                                                                        <td class="custom-ui-border">1 computer for 2 cents</td>
                                                                                                        <td class="custom-ui-border"></td>
                                                                                                        <td class="custom-ui-border">TCB REGISTER 4</td>
                                                                                                        
                                                                                                    
                                                                                                                            </tr>
                                                                                                                            <tr>
                               
                                                                                                                                <td class="custom-ui-border">02/01/2023
                                                                                                                        
                                                                                                                                </td>
                                                                                                                                <td class="custom-ui-border">FG$%$%&f(433)34</td>
                                                                                                                                <td class="custom-ui-border">4646</td>
                                                                                                                                <td class="custom-ui-border">POINTS ADDED</td>
                                                                                                                                <td class="custom-ui-border">1000 POINTS ADDED FOR NEW USER</td>
                                                                                                                                <td class="custom-ui-border">1000</td>
                                                                                                                                <td class="custom-ui-border">1 computer for 2 cents</td>
                                                                                                                                <td class="custom-ui-border"></td>
                                                                                                                                <td class="custom-ui-border">TCB REGISTER 4</td>
                                                                                                                                
                                                                                                                            
                                                                                                                                                    </tr>
                           
                          
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                            <th>DATE </th>
        <th>CUSTOMER ID</th>
        <th>CUSTOMER NAME</th>
        <th>LOG ID</th>
        <th>TYPE</th>
        <th>DETAIL</th>
        <th>AMOUNT</th>
        <th>COUPON</th>
        <th>USER</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>
       
                </div>
            
      
    </div>
        </div>
      
    </div>
    @endsection