@extends('admin.include.layout')
@section('content')

<style>
    .percent{
        color:#43e822;
        font-size:15px;
        padding-left:10px;
    }
</style>
<div class="main-content pt-4">
    <div class="breadcrumb">
        <h1 class="mr-2">Dashboard</h1>
        <!-- <ul>
            <li><a href="">Dashboard</a></li>
            <li>Version 1</li>
        </ul> -->
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Answered</p>
                        <p class="text-primary text-24 line-height-1 mb-2">547<span class="percent">33%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Missed</p>
                        <p class="text-primary text-24 line-height-1 mb-2">380<span class="percent">13%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card ">
                <div class="card-body text-center">
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">First Time Call </p>
                        <p class="text-primary text-24 line-height-1 mb-2">435<span class="percent">3%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card ">
                <div class="card-body text-center">
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Avarage Call Duration</p>
                        <p class="text-primary text-24 line-height-1 mb-2">00 : 42 <span class="percent">7%</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           <h2>Latest phone calls </h2>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>DATE</th>
        <th>NAME</th>
        <th>CALL SOURCE</th>
        <th>PHONE NO.</th>
        <th>ANSWERED </th>
        <th>FIRST CALL</th>
        <th>DURATION </th>
      
                            </tr>
                        </thead>
                        <tbody id="okok" class="menu-table-tbody" style="cursor: all-scroll;">
                      
                             
                        
                           
                           <tr>
                            
   <td class="custom-ui-border">February 16/2023</td>
   <td class="custom-ui-border">Tom Cruise</td>
   <td class="custom-ui-border">May 26,2019</td>

  <td class="custom-ui-border">0202388484</td>
   <td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>

                       </tr>
                          <tr>
                            
   <td class="custom-ui-border">February 16/2023</td>
   <td class="custom-ui-border">Tom Cruise</td>
   <td class="custom-ui-border">May 26,2019</td>

  <td class="custom-ui-border">0202388484</td>
   <td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>

                       </tr>
                        
                          <tr>
                            
   <td class="custom-ui-border">February 16/2023</td>
   <td class="custom-ui-border">Tom Cruise</td>
   <td class="custom-ui-border">May 26,2019</td>

  <td class="custom-ui-border">0202388484</td>
   <td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>

                       </tr>
                        
                          <tr>
                            
   <td class="custom-ui-border">February 16/2023</td>
   <td class="custom-ui-border">Tom Cruise</td>
   <td class="custom-ui-border">May 26,2019</td>

  <td class="custom-ui-border">0202388484</td>
   <td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>
<td class="custom-ui-border">May 26,2019</td>

                       </tr>
                        
                        
                            
                        </tbody>
                        <tfoot>
                           <tr>
                            <th>DATE</th>
        <th>NAME</th>
        <th>CALL SOURCE</th>
        <th>PHONE NO.</th>
        <th>ANSWERED </th>
        <th>FIRST CALL</th>
        <th>DURATION </th>
                          
                                                 
                            </tr>
                        </tfoot>
                    </table>
                </div>
            
      
    </div>
        </div>
  <!-- end of main-content -->
</div>
@endsection